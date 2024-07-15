<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard_page()
    {
        return view('dashboard');
    }

    #Astrologer List
    public function astrologerListPage()
    {
        return view('Astrologer.astrologerList');
    }


}
