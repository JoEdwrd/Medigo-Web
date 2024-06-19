<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function check(Request $request)
    {
        // @dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect("/");
        } else {
            // Handle failed login attempt
            $errorMessage = 'Invalid email or password. Please try again.';
            return redirect()->back()->withErrors(['email' => $errorMessage]);
        }

    }
}
