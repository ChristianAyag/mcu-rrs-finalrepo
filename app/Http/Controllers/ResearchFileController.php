<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormsTable;
use App\Models\ResearchFiles;
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
            }
        }

        return redirect()->back()->with('success', 'Files submitted successfully!');
    }
}
