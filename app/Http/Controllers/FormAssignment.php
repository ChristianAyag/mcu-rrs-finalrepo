<?php

namespace App\Http\Controllers;

use App\Models\FormsTable;
use Illuminate\Http\Request;
use App\Models\User;

class FormAssignment extends Controller
{
    public function approvedAccounts()
    {
        // You’re probably also fetching your users via joins here
        $approvedAccounts = User::with(['forms', 'researchInformation', 'classifications'])
        ->whereHas('classifications', function ($q) {
            $q->where('classificationStatus', 'Approved');
        })
        ->get();

        $selectForms = FormsTable::whereIn('form_code', [
            'Form 2(A)',
            'Form 2(B)',
            'Form 2(C)',
            'Form 2(D)',
            'Form 5(E)',
            'FORM 2(A) Soft Copy',
            'FORM 2(B) Soft Copy',
            'Proof of Enrollment',
            'Technical Review Letter',
            'Study Protocol',
            'Form 2(C) Soft Copy - ENG',
            'Form 2(C) Soft Copy - FIL',
            'Data Collection Tools',
            'Certificates of Validators',
            'Child Assent for Children Ages 7-12 years - ENG',
            'Child Assent for Children Ages 7-12 years - FIL',
            'Child Assent for Children Ages 13-17 years - ENG',
            'Child Assent for Children Ages 13-17 years - FIL',
            'Recruitment advertisement',
            'Curriculum Vitae',
            'Good Clinical Practice (GCP) or Health Research Ethics Training Certificate',
            'Gantt chart',
        ])->get();

        return view('erb.iro-approved-accounts', compact('selectForms','approvedAccounts'));
    }
    public function assignFormsAjax(Request $request)
    {
        $request->validate([
        'user_ids' => 'required|array',
        'form_ids' => 'required|array',
        ]);

        foreach ($request->user_ids as $userId) {
            $user = User::find($userId);

            if ($user) {
                // Save to tbl_forms_user (pivot)
                $user->forms()->syncWithoutDetaching($request->form_ids);
            }
        }

        return response()->json(['success' => true, 'message' => 'Forms assigned successfully!']);
    }
    public function assignedFormsDisplay(){
        $student = auth()->user();
        
        $assignedForms = $student->forms()
        ->where('form_type','Forms')
        ->get();

        return view('student.download-forms', compact('assignedForms'));
    }

    public function assignedSubmissionDisplay(){
        $student = auth()->user();

        $submissionForms = $student->forms()
            ->where('form_type', 'Submission')
            ->get();
        
        return view('student.submit-forms', compact('submissionForms'));
    }
}
