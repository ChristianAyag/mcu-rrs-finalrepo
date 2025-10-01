<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormsTable;
use App\Models\ResearchFiles;

class ResearchFileController extends Controller
{
    public function showForm($formId)
    {
        // find the form
        $form = FormsTable::findOrFail($formId);

        // check if the current student already submitted
        $submitted = ResearchFiles::where('user_id', auth()->id())
            ->where('form_id', $formId)
            ->exists();

        return view('student.submit-form-layout', compact('form', 'submitted'));
    }
}
