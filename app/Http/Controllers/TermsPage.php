<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsPage extends Controller
{
    public function show()
    {
        return view('FooterLink.TermsAndConditionPage');
    }
}
