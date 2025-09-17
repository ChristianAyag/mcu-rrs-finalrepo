<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classification;
use App\Mail\UserCredentialMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ClassificationController extends Controller
{
    // Display all classifications
    public function index() {
        // Keep variable as $pi, but fetch classifications with user info
        $pi = User::with(['researchInformation','classifications'])
        ->where('user_Access', 'Principal Investigator')
        ->get();
        return view('superadmin.accounts-classifications', compact('pi'));
    }

    // Update classification
    public function update(Request $request, $id) {
    {
        $request->validate([
            'reviewClassification' => 'required|string|max:255',
        ]);

        // Find or create the classification for this user
        $classification = Classification::firstOrCreate(
            ['user_ID' => $id],
            ['classificationStatus' => 'Pending']
        );

        // Update classification and mark as approved
        $classification->update([
            'reviewClassification' => $request->reviewClassification,
            'classificationStatus' => 'Approved',
            'classificationDate' => now()
        ]);

        // Send email to user
        $user = User::findOrFail($id);
        Mail::to($user->user_Email)
            ->send(new UserCredentialMail($user, $request->reviewClassification));

        return redirect()->back()->with('success', 'User classified and credentials sent successfully!');
    }
    }
}