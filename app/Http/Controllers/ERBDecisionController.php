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
        // ✅ Validate request
        $request->validate([
            'protocol_id' => 'required|string|exists:tbl_protocol,protocol_ID',
            'decision' => 'required|string|in:Approved,Resubmission',
        ]);

        try {
            $protocolId = $request->protocol_id;
            $decision = $request->decision; // now lowercase to match request input

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

            $piUserId = $protocol->researchInformation->user_ID; // P.I.'s user_ID

            // ✅ Insert or update the decision in tbl_approved
            Approved::updateOrCreate(
                [
                    'Protocol_ID' => $protocolId,
                    'user_ID' => $piUserId,
                ],
                [
                    'Decision' => $decision, // matches DB column name
                ]
            );

            // ✅ Assign Form 3L only if Approved
            if ($decision === 'Approved') {
                $form3L = FormsTable::where('form_code', 'FORM 3(L)')->first();

                if ($form3L) {
                    FormUser::updateOrCreate(
                        [
                            'user_ID' => $piUserId,
                            'form_id' => $form3L->form_id,
                        ]
                    );
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Form 3L not found in tbl_forms.',
                    ]);
                }
            }elseif ($decision === 'Resubmission') {
            // --- Assign Form 3A and 3B to the student ---
                $studentUserId = $protocol->researchInformation->user_ID; // Assuming the PI is the student, adjust if different

                $form3A = FormsTable::where('form_code', 'FORM 3(A)')->first();
                $form3B = FormsTable::where('form_code', 'FORM 3(B)')->first();

                if ($form3A) {
                    FormUser::updateOrCreate(
                        [
                            'user_ID' => $studentUserId,
                            'form_id' => $form3A->form_id,
                        ]
                    );
                }

                if ($form3B) {
                    FormUser::updateOrCreate(
                        [
                            'user_ID' => $studentUserId,
                            'form_id' => $form3B->form_id,
                        ]
                    );
                }
            }
            // ✅ Return success response
            return response()->json([
                'success' => true,
                'message' => $decision === 'Approved'
                    ? 'Protocol approved and Form 3L assigned to the Principal Investigator.'
                    : 'Resubmission recorded successfully for the Principal Investigator.',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
        }
    }

}
