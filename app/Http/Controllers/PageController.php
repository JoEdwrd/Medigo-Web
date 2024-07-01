<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faq()
    {
        // Your logic here
        return view('FooterLink.faq'); // Return the 'faq' view
    }

    public function termsandconditions()
    {
        // Your logic here
        return view('FooterLink.tnc'); // Return the 'faq' view
    }
    public function aboutus()
    {
        // Your logic here
        return view('FooterLink.aboutus'); // Return the 'faq' view
    }
}
