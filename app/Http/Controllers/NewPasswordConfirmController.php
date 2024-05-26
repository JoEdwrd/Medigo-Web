<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPasswordConfirmController extends Controller
{
    public function index()
    {
        return view('Profile.Change-Password.new-password-confirm');
    }
}
