<?php

namespace App\Http\Controllers;

use App\Models\ResearchInformation;
use Illuminate\Http\Request;
use App\Models\FormsTable;
use App\Models\ResearchFiles;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\FileUploaded;
use Illuminate\Support\Facades\Storage;

class ResearchFileController extends Controller
{
    public function showForm($formId)
    {
        $student = auth()->user();

        // find the form assigned to this student
        $form = $student->forms()
            ->where('tbl_forms.form_type', 'Submission')
            ->where('tbl_forms.form_id', $formId)
            ->firstOrFail();

        // check if the current student already submitted
        $submitted = ResearchFiles::where('user_ID', $student->user_ID)
            ->where('form_id', $formId)
            ->exists();

        return view('student.submit-form-layout', compact('form', 'submitted'));
    }

    public function storeSubmission(Request $request, $formId)
    {
        $request->validate([
            'uploadForms.*' => 'required|mimes:doc,docx,pdf|max:2048',
        ]);

        $user = auth()->user();
        $folderPath = "researchFolder/{$user->user_ID}";

        if ($request->hasFile('uploadForms')) {
            foreach ($request->file('uploadForms') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                // Save file into storage/app/public/researchFolder/{user_ID}
                $filePath = $file->storeAs($folderPath, $filename, 'public');

                // Insert record
                ResearchFiles::create([
                    'user_ID'      => $user->user_ID,
                    'form_id'      => $formId,
                    'file_name'    => $filename,
                    'file_path'    => $filePath,
                    'submitted_at' => now(),
                ]);

                // Determine which admins to notify based on user classification
                $adminUsers = collect();
                
                // Check user classification (assuming these fields exist in your users table)
                if ($user->classification === 'IACUC') {
                    $adminUsers = $adminUsers->merge(User::where('user_Access', 'IACUC Admin')->get());
                } 
                elseif ($user->classification === 'ERB') {
                    $adminUsers = $adminUsers->merge(User::where('user_Access', 'ERB Admin')->get());
                } 
                elseif ($user->classification === 'BOTH') {
                    $iacucAdmins = User::where('user_Access', 'IACUC Admin')->get();
                    $erbAdmins = User::where('user_Access', 'ERB Admin')->get();
                    $adminUsers = $adminUsers->merge($iacucAdmins)->merge($erbAdmins);
                }
                
                // Alternative approach if you have separate boolean fields
                /*
                if ($user->is_iacuc || $user->classification === 'both') {
                    $adminUsers = $adminUsers->merge(User::where('user_Access', 'IACUC Admin')->get());
                }
                if ($user->is_erb || $user->classification === 'both') {
                    $adminUsers = $adminUsers->merge(User::where('user_Access', 'ERB Admin')->get());
                }
                */

                // Send notification to appropriate admins
                if ($adminUsers->isNotEmpty()) {
                    Notification::send($adminUsers, new FileUploaded($user, $formId, $filename));
                }
            }
        }
        return redirect()->back()->with('success', 'Files submitted successfully!');
    }

    public function submittedDocumentsErb($userId)
    {
        $user = User::findOrFail($userId);
        
        // Check if user is classified for ERB or BOTH
        if (!$user->classifications || !in_array($user->classifications->reviewClassification, ['ERB', 'BOTH'])) {
            return redirect()->back()->with('error', 'This user is not classified for ERB submissions.');
        }
        
        $piFiles = User::with(['researchFiles' => function($query) {
            $query->where('status', 'active');
        }])->findOrFail($userId);

        return view('erb.submitted-documents', compact('piFiles', 'user'));
    }

    // Add this method to handle soft deletion
    public function softDeleteResearchFile($fileId)
    {
        try {
            $researchFile = ResearchFiles::findOrFail($fileId);
            $researchFile->update(['status' => 'inactive']);
            
            return redirect()->back()->with('success', 'Document deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting document');
        }
    }

    public function researchRecords()
    {
        $researchRecords = ResearchInformation::with([
            'user' => function ($query) {
                $query->with([
                    'researchFiles',
                    'initialReviews' => function ($q) {
                        $q->with([
                            'protocol',
                            'reviewer1',
                            'reviewer2',
                        ]);
                    },
                    'approved',
                    'classifications' // Use the plural relationship name
                ]);
            },
        ])->whereHas('user.classifications', function ($query) {
            $query->whereIn('reviewClassification', ['ERB', 'BOTH']);
        })->get();

        return view('erb.research-records', compact('researchRecords'));
    }

    /*LAHAT NG IACUC CLASS DITOOOO*/
    public function researchRecordsIacuc()
    {
        $researchRecords = ResearchInformation::with([
            'user' => function ($query) {
                $query->with([
                    'researchFiles',
                    'initialReviews' => function ($q) {
                        $q->with([
                            'protocol',
                            'reviewer1',
                            'reviewer2',
                        ]);
                    },
                    'approved',
                    'classifications' // Use the plural relationship name
                ]);
            },
        ])->whereHas('user.classifications', function ($query) {
            $query->whereIn('reviewClassification', ['IACUC', 'BOTH']);
        })->get();

        return view('iacuc.research-records', compact('researchRecords'));
    }

    public function submittedDocumentsIacuc($userId)
    {
        $user = User::findOrFail($userId);
        
        // Check if user is classified for IACUC or BOTH
        if (!$user->classifications || !in_array($user->classifications->reviewClassification, ['IACUC', 'BOTH'])) {
            return redirect()->back()->with('error', 'This user is not classified for IACUC submissions.');
        }
        
        $piFiles = User::with(['researchFiles' => function($query) {
            $query->where('status', 'active');
        }])->findOrFail($userId);

        return view('iacuc.submitted-documents', compact('piFiles', 'user'));
    }
}
