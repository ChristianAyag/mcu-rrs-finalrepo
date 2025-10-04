<?php

namespace App\Http\Controllers;

use Spatie\LaravelPdf\Facades\Pdf;
use App\Models\Form2B;
class PdfExportController extends Controller
{
    public function exportForm2A()
    {
        //sample code
        $protocol = (object)[
            'mcuerb_code' => 'MCU-2025-001',
            'title' => 'Effect of AI on Research Practices',
            'principal_investigator' => 'Dr. Juan Dela Cruz',
            'co_investigator' => 'Prof. Maria Santos',
            'review_type' => 'EXPEDITED',
        ];

        //dito din palitan mo nalang din
        return Pdf::view('student.forms.form2aPdf', compact('protocol'))
            ->format('Letter')
            ->margins(15, 15, 15, 15)
            ->inline('FORM-2A.pdf');
    }
    public function exportForm2B()
    {
        //sample code
        $user = auth()->user();

        // Fetch the Form2B record for this user
        $protocol = Form2B::where('user_ID', $user->user_ID)
            ->with('researchInfo') // if you need related info
            ->firstOrFail();

        //dito din palitan mo nalang din
        return Pdf::view('student.forms.form2bPdf', compact('protocol'))
            ->format('Letter')
            ->margins(15, 15, 15, 15)
            ->download('FORM-2B.pdf');
    }
    public function exportForm2C()
    {
        //sample code
        $protocol = (object)[
            'mcuerb_code' => 'MCU-2025-001',
            'title' => 'Effect of AI on Research Practices',
            'principal_investigator' => 'Dr. Juan Dela Cruz',
            'co_investigator' => 'Prof. Maria Santos',
            'review_type' => 'EXPEDITED',
        ];

        //dito din palitan mo nalang din
        return Pdf::view('student.forms.form2cPdf', compact('protocol'))
            ->format('Letter')
            ->margins(15, 15, 15, 15)
            ->inline('FORM-2C.pdf');
    }

    public function exportForm3C()
    {
        //sample code
        $protocol = (object)[
            
        ];

        //dito din palitan mo nalang din
        return Pdf::view('student.forms.form3cPdf', compact('protocol'))
            ->format('Letter')
            ->margins(15, 15, 15, 15)
            ->inline('FORM-3C.pdf');
    }

    public function exportForm3D()
    {
        //sample code
        $protocol = (object)[
            
        ];

        //dito din palitan mo nalang din
        return Pdf::view('student.forms.form3dPdf', compact('protocol'))
            ->format('Letter')
            ->margins(15, 15, 15, 15)
            ->inline('FORM-3D.pdf');
    }


    public function exportForm3L()
    {
        //sample code
        $protocol = (object)[
            
        ];

        //dito din palitan mo nalang din
        return Pdf::view('student.forms.form3lPdf', compact('protocol'))
            ->format('Letter')
            ->margins(15, 15, 15, 15)
            ->inline('FORM-3L.pdf');
    }
}
