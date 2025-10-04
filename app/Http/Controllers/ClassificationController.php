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
        ->whereDoesntHave('classifications', function($query) {
            $query->where('classificationStatus', 'Approved');
        })   
        ->get();
        return view('superadmin.accounts-classifications', compact('pi'));
    }

    public function bulkUpdate(Request $request) {
        $request->validate([
            'user_ids' => 'required|array',
            'reviewClassification' => 'required|string|max:255',
        ]);

        $userIds = $request->user_ids;
        $classificationType = $request->reviewClassification;

        foreach ($userIds as $id) {
            // Find or create classification for each user
            $classification = Classification::firstOrCreate(
                ['user_ID' => $id],
                ['classificationStatus' => 'Pending']
            );

            // Update classification
            $classification->update([
                'reviewClassification' => $classificationType,
                'classificationStatus' => 'Approved',
                'classificationDate' => now()
            ]);

            // Send email to user
            $user = User::find($id);
            if ($user) {
                Mail::to($user->user_Email)->queue(new UserCredentialMail($user, $classificationType));
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Selected users have been classified and credentials sent!'
        ]);
    }
}

// Update classification
    /*public function update(Request $request, $id) {
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
    }*/