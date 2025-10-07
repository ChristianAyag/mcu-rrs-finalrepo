<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\InitialReview;
use App\Models\User;
use App\Models\ResearchFiles;
use App\Models\FormsTable;

class ERBReviewer extends Controller
{
    public function index()
    {
        $reviewerId = Auth::user()->user_ID;

        $assignedProtocols = InitialReview::with([
            'protocol.user', 
            'pi',
            'form' // fetch all forms
        ])
        ->where(function ($q) use ($reviewerId) {
            $q->where('reviewer1_ID', $reviewerId)
            ->orWhere('reviewer2_ID', $reviewerId);
        })
        ->get()
        ->groupBy('protocol_ID');

        return view('erb-reviewer.protocol-assign', compact('assignedProtocols'));
    }

    public function showSubmittedDocuments(Request $request)
    {
        $userId = $request->query('user_id');

        // Find PI and load all submitted research files with related form info
        $pi = User::with(['researchFiles.form'])
            ->where('user_ID', $userId)
            ->first();

        if (!$pi) {
            return back()->with('error', 'Principal Investigator not found.');
        }

        $files = $pi->researchFiles; // All files submitted by this user

        return view('erb-reviewer.submitted-documents', compact('pi', 'files'));
    }

    public function showSubmitDocuments($formId)
    {
        $reviewerId = Auth::user()->user_ID;

        $assignedFormIds = InitialReview::where('reviewer1_ID', $reviewerId)
            ->orWhere('reviewer2_ID', $reviewerId)
            ->pluck('form_id'); // Make sure InitialReview has a `form_id` column

        $form = FormsTable::where('form_id', $formId)
            ->whereIn('form_id', $assignedFormIds)
            ->firstOrFail();

        return view('erb-reviewer.submit-documents', compact('form'));
    }

}
