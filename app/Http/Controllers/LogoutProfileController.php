<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutProfileController extends Controller
{
    public function index()
    {
        return view('Profile.logout-profile');
    }
}
