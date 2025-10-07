<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Protocol;
use App\Models\InitialReview;
use App\Models\FormsTable;

class assignReviewer extends Controller
{
    public function index(){
        $erbReviewer = User::where('user_Access','ERB Reviewer')
            ->with('reviewerInformation')
            ->get();

        $piWithForms = User::with(['researchInformation', 'forms'])
            ->where('user_Access', 'Principal Investigator')
            ->whereHas('forms')
            ->whereDoesntHave('protocol')
            ->get();
        
        $forms = FormsTable::whereIn('form_code', [
            'Form 2(E)',
            'Form 2(J)',
            'Form 2(E) Soft Copy',
            'Form 2(J) Soft Copy'
        ])->get();
        return view('erb.assign-reviewer', compact('piWithForms','erbReviewer','forms'));
    }

    public function ERBstore(Request $request)
    {
        $request->validate([
            'pis' => 'required|array',
            'review_type' => 'required|string',
            'reviewer1_ID' => 'required|string',
            'reviewer2_ID' => 'required|string',
            'assigned_forms' => 'required|array'
        ]);

        foreach ($request->pis as $piID) {

            // 🔹 Generate Incremental Protocol Code
            $year = date('Y');

            // Get the latest number used for this year
            $latestProtocol = Protocol::where('protocol_ID', 'like', "ERB-$year-%")
                ->orderBy('protocol_ID', 'desc')
                ->first();

            if ($latestProtocol) {
                // Extract the numeric part (e.g., MCUERB-2025-005 → 5)
                $lastNumber = intval(substr($latestProtocol->protocol_ID, strrpos($latestProtocol->protocol_ID, '-') + 1));
                $nextNumber = $lastNumber + 1;
            } else {
                $nextNumber = 1;
            }

            // Format with leading zeros (e.g., 001, 002, 003)
            $protocolCode = sprintf("ERB-%s-%03d", $year, $nextNumber);

            // 🔹 Save to tbl_protocol
            $protocol = Protocol::create([
                'protocol_ID' => $protocolCode,
                'user_ID' => $piID,
                'review_type' => $request->review_type,
            ]);

            // 🔹 Save to tbl_initial_review for each assigned form
            foreach ($request->assigned_forms as $formName) {
                $form = FormsTable::where('form_id', $formName)->first();

                InitialReview::create([
                    'protocol_ID' => $protocol->protocol_ID,
                    'user_ID' => $piID,
                    'reviewer1_ID' => $request->reviewer1_ID,
                    'reviewer2_ID' => $request->reviewer2_ID,
                    'form_ID' => $form?->form_id,
                ]);
            }
        }

        return response()->json(['message' => 'Reviewers successfully assigned!']);
    }
}
