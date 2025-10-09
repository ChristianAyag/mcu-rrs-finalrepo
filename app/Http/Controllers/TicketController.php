<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'User_ID' => 'required|string|exists:tbl_users,user_ID',
            'Ticket_Subject' => 'required|string|max:255',
            'User_Concern' => 'required|string|max:255',
            'Ticket_Description' => 'required|string|max:5000',
        ]);

        Ticket::create([
            'User_ID' => $request->User_ID,
            'Ticket_Subject' => $request->Ticket_Subject,
            'User_Concern' => $request->User_Concern,
            'Ticket_Description' => $request->Ticket_Description,
        ]);

        return redirect()->back()->with('success', 'Ticket submitted successfully!');
    }
}
