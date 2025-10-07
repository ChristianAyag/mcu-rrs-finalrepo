<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ReviewerInformation;

class ReviewerInformationController extends Controller
{
    public function iacucCreate()
    {
        return view('iacuc-reviewer.college-dept');
    }

    public function iacucStore(Request $request)
    {
        $request->validate([
            'Reviewer_Dept' => 'required|string|max:255',
            'Reviewer_Prog' => 'required|string|max:255',
        ]);

        ReviewerInformation::create([
            'Reviewer_ID' => $this->generateReviewerID(),
            'user_ID' => Auth::user()->user_ID,
            'Reviewer_Dept' => $request->Reviewer_Dept,
            'Reviewer_Prog' => $request->Reviewer_Prog,
        ]);

        return redirect()->route('iacuc-reviewer.dashboard')
                         ->with('success', 'Information saved successfully.');
    }

    // ==========================
    // ERB Reviewer Methods
    // ==========================
    public function erbCreate()
    {
        return view('erb-reviewer.college-dept');
    }

    public function erbStore(Request $request)
    {
        $request->validate([
            'Reviewer_Dept' => 'required|string|max:255',
            'Reviewer_Prog' => 'required|string|max:255',
        ]);

        ReviewerInformation::create([
            'Reviewer_ID' => $this->generateReviewerID(),
            'user_ID' => Auth::user()->user_ID,
            'Reviewer_Dept' => $request->Reviewer_Dept,
            'Reviewer_Prog' => $request->Reviewer_Prog,
        ]);

        return redirect()->route('erb-reviewer.dashboard')
                         ->with('success', 'Information saved successfully.');
    }

    // ==========================
    // Shared method: generate REV-000XX ID
    // ==========================
    private function generateReviewerID()
    {
        $lastRecord = ReviewerInformation::orderBy('Reviewer_ID', 'desc')->first();

        if (!$lastRecord) {
            $nextNumber = 1;
        } else {
            $lastNumber = (int) str_replace('REV-', '', $lastRecord->Reviewer_ID);
            $nextNumber = $lastNumber + 1;
        }

        return 'REV-' . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
    }
}
