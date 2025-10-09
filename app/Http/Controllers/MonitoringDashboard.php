<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchInformation;
use App\Models\FormsTable;
use App\Models\ResearchFiles;
use App\Models\Protocol;
use App\Models\Approved;
use App\Models\EvaluatedReviews;
use App\Models\User;
class MonitoringDashboard extends Controller
{
    public function index(){
        $monitor = User::with(['forms','researchInformation','classifications'])
        ->where('user_Access', 'Principal Investigator')   
        ->get();

        return view('superadmin.monitoring', compact('monitor'));
    }
    public function superadminResearchRecords()
    {
        $Records = ResearchInformation::with([
            // Load the P.I. user and their related data
            'user' => function ($query) {
                $query->with([
                    // Load all initial reviews and reviewers
                    'initialReviews' => function ($q) {
                        $q->with([
                            'protocol',        // Load protocol info
                            'reviewer1',       // Load reviewer 1 details
                            'reviewer2',       // Load reviewer 2 details
                        ]);
                    },
                    // Load approved decisions
                    'approved'
                ]);
            },
        ])->get();

        return view('superadmin.research-records', compact('Records'));
    }

    public function viewUnassignedReviewer(){
        $piWithForms = User::with(['researchInformation', 'forms'])
            ->where('user_Access', 'Principal Investigator')
            ->whereHas('forms')
            ->whereDoesntHave('protocol')
            ->get();

        return view('superadmin.assign-reviewer', compact('piWithForms'));
    }
    
    public function viewEvaluatedProtocols(){
        $evaluatedProtocols = EvaluatedReviews::with([
            'protocol.researchInformation.user'
        ])
        ->selectRaw('protocol_id, MAX(updated_at) as latest_review_date')
        ->groupBy('protocol_id')
        ->get()
        ->map(function ($item) {
            // Get the latest review for each protocol
            $latestReview = EvaluatedReviews::where('protocol_id', $item->protocol_id)
                ->orderByDesc('updated_at')
                ->with(['protocol.researchInformation.user'])
                ->first();

            $researchInfo = $latestReview->protocol->researchInformation ?? null;
            $user = $researchInfo?->user;

            return (object) [
                'protocol_ID'      => $latestReview->protocol->protocol_ID ?? 'N/A',
                'research_title'   => $researchInfo->research_title ?? 'N/A',
                'user_Fname'       => $user->user_Fname ?? 'N/A',
                'co_investigator'  => $researchInfo->research_CoInvestigator ?? 'N/A',
                'status'           => $latestReview->status ?? 'Pending',
                'date_submitted'   => $latestReview->created_at,
                'review_date'      => $latestReview->updated_at,
            ];
        });

        return view('superadmin.pending-reviews', compact('evaluatedProtocols'));
    }
    public function dashboard()
    {
        // Total assigned protocols
        $totalAssignedProtocols = Protocol::count();

        // Protocols that haven't been assigned a reviewer
        $protocolsWithoutReviewer = Protocol::whereDoesntHave('initialReviews')->count();

        // Total ongoing reviews
        // Protocols that have at least one initial review assigned
        // but have not yet been fully evaluated
        $ongoingReviews = Protocol::whereHas('initialReviews')
            ->whereDoesntHave('evaluatedReviews', function($q) {
                $q->where('status', 'Completed'); // only consider completed evaluations
            })
            ->count();

        // Total evaluated reviews (completed ones)
        $evaluatedReviews = EvaluatedReviews::where('status', 'Completed')->count();

        // Total approved protocols (Decision = 'Approved')
        $approvedProtocols = Approved::where('Decision', 'Approved')->count();

        return view('superadmin.dashboard', compact(
            'totalAssignedProtocols',
            'protocolsWithoutReviewer',
            'ongoingReviews',
            'evaluatedReviews',
            'approvedProtocols'
        ));
    }
}
