<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldPasswordCheckController extends Controller
{
    public function index()
    {
        return view('Profile.Change-Password.old-password-check');
    }
}
