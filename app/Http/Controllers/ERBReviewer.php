<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\InitialReview;
use App\Models\User;
use App\Models\ResearchFiles;
use App\Models\FormsTable;
use App\Models\EvaluatedReviews;
use App\Models\ReviewerFile;

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


    public function submitForm(Request $request, $formId)
    {
        $reviewerId = Auth::user()->user_ID;

        // Validate uploaded files
        $request->validate([
            'uploadForms.*' => 'required|file|mimes:doc,docx,pdf|max:10240'
        ]);

        // Verify if form is assigned to this reviewer
        $assignedForm = InitialReview::where('form_id', $formId)
            ->where(function ($q) use ($reviewerId) {
                $q->where('reviewer1_ID', $reviewerId)
                ->orWhere('reviewer2_ID', $reviewerId);
            })
            ->first();

        if (!$assignedForm) {
            return redirect()->back()->with('error', 'This form is not assigned to you.');
        }

        $protocolId = $assignedForm->protocol_ID;

        // Get form (must be a Submission-type form)
        $form = FormsTable::where('form_id', $formId)
            ->where('form_type', 'Submission')
            ->firstOrFail();

        // Save uploaded files under reviewer_files/{protocol_ID}/
        foreach ($request->file('uploadForms') as $file) {
            $filename = $file->getClientOriginalName();
            $path = $file->store("reviewer_files/{$protocolId}", 'public');

            ReviewerFile::create([
                'form_id' => $form->form_id,
                'protocol_ID' => $protocolId,
                'reviewer_ID' => $reviewerId,
                'file_name' => $filename,
                'file_path' => $path,
            ]);
        }

        /**
         * --- EVALUATION LOGIC ---
         * Always record in tbl_evaluated_reviews once any submission is made.
         * Mark as "In Progress" unless all Submission-type forms are done.
         */

        // All forms assigned to this reviewer for this protocol
        $assignedForms = InitialReview::where('protocol_ID', $protocolId)
            ->where(function ($q) use ($reviewerId) {
                $q->where('reviewer1_ID', $reviewerId)
                ->orWhere('reviewer2_ID', $reviewerId);
            })
            ->pluck('form_id')
            ->unique();

        // Get only Submission-type assigned forms
        $submissionFormIds = FormsTable::whereIn('form_id', $assignedForms)
            ->where('form_type', 'Submission')
            ->pluck('form_id');

        // Forms that reviewer has already submitted
        $submittedForms = ReviewerFile::where('protocol_ID', $protocolId)
            ->where('reviewer_ID', $reviewerId)
            ->pluck('form_id')
            ->unique();

        // Determine progress
        $allSubmitted = $submissionFormIds->diff($submittedForms)->isEmpty();
        $status = $allSubmitted ? 'Completed' : 'In Progress';

        // Always record or update in tbl_evaluated_reviews
        EvaluatedReviews::updateOrCreate(
            [
                'protocol_ID' => $protocolId,
                'reviewer_ID' => $reviewerId
            ],
            [
                'status' => $status,
                'completed_at' => $allSubmitted ? now() : null
            ]
        );

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
