<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluatedReviews;
use App\Models\Approved;
use App\Models\FormUser;
use App\Models\FormsTable;
use App\Models\Protocol;
use Illuminate\Support\Facades\Auth;
class ERBDecisionController extends Controller
{
    public function index()
    {
        // Fetch one record per protocol (latest only)
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

        return view('erb.pending-reviews', compact('evaluatedProtocols'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'protocol_id' => 'required|string|exists:tbl_protocol,protocol_ID',
            'decision' => 'required|string',
        ]);

        try {
            $protocolId = $request->protocol_id;
            $decision = $request->decision;

            // ✅ Get the Principal Investigator (PI) linked to this protocol
            $protocol = Protocol::with('researchInformation')
                ->where('protocol_ID', $protocolId)
                ->first();

            if (!$protocol || !$protocol->researchInformation) {
                return response()->json([
                    'success' => false,
                    'message' => 'Principal Investigator not found for this protocol.',
                ]);
            }

            $piUserId = $protocol->researchInformation->user_ID; // ✅ P.I.'s user_ID

            // ✅ Only act if the decision is "Approved"
            if ($decision === 'Approved') {
                // --- Insert into tbl_approved ---
                $alreadyApproved = Approved::where('Protocol_ID', $protocolId)
                    ->where('user_ID', $piUserId)
                    ->exists();

                if (!$alreadyApproved) {
                    Approved::create([
                        'user_ID' => $piUserId,
                        'Protocol_ID' => $protocolId,
                    ]);
                }

                // --- Assign Form 3L to the PI ---
                $form3L = FormsTable::where('form_code', 'FORM 3(L)')->first();

                if ($form3L) {
                    $alreadyAssigned = FormUser::where('user_ID', $piUserId)
                        ->where('form_id', $form3L->form_id)
                        ->exists();

                    if (!$alreadyAssigned) {
                        FormUser::create([
                            'user_ID' => $piUserId,
                            'form_id' => $form3L->form_id,
                        ]);
                    }
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Form 3L not found in tbl_forms.',
                    ]);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Protocol approved and Form 3L assigned to the Principal Investigator.',
                ]);
            }

            // ✅ For other decisions
            return response()->json([
                'success' => true,
                'message' => "Decision '{$decision}' recorded successfully.",
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
        }
    }
}
