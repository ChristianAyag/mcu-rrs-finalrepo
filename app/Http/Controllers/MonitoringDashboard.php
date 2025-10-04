<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MonitoringDashboard extends Controller
{
    public function index(){
        $monitor = User::with(['forms','researchInformation','classifications'])
        ->where('user_Access', 'Principal Investigator')   
        ->get();

        return view('superadmin.monitoring', compact('monitor'));
    }
}
