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

            $selectForms = FormsTable::all();

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
}
