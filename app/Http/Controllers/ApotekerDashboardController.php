<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekerDashboardController extends Controller
{
    public function index()
    {
        
        return view('apoteker.dashboard');
    }
    
}
