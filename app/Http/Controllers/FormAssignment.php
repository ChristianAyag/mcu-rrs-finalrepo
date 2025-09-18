<?php

namespace App\Http\Controllers;

use App\Models\FormsTable;
use Illuminate\Http\Request;

class FormAssignment extends Controller
{
    public function approvedAccounts()
        {
            // You’re probably also fetching your users via joins here
            $selectForms = FormsTable::all();

            return view('erb.iro-approved-accounts', compact('selectForms'));
        }
}
