<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate user input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Ensure unique email
            'phone' => 'required|string|unique:users', // Ensure unique phone number
            'dob' => 'required|date|before:17 years ago', // Minimum age of 17 years
            'password' => 'required|string|min:8', // Removed confirmation password validation
            'address' => 'required|string|max:255',
        ]);

        // Handle validation errors (optional, but recommended for user feedback)
        // Get all validation errors
        if ($request->validator && $request->validator->fails()) {
            // Access validation errors here
            $errors = $request->validator->errors()->messages();
            // ...
            // Check if any errors exist

            if (count($errors) > 0) {
            // Return specific error message for each field
            $errorMessage = '';
            if (isset($errors['email'])) {
                $errorMessage = $errors['email'][0]; // Get first email error message
            } elseif (isset($errors['phone'])) {
                $errorMessage = $errors['phone'][0]; // Get first phone error message
            } elseif (isset($errors['dob'])) {
                $errorMessage = $errors['dob'][0]; // Get first dob error message
            } elseif (isset($errors['password'])) {
                $errorMessage = $errors['password'][0]; // Get first password error message
            } elseif (isset($errors['address'])) {
                $errorMessage = $errors['address'][0]; // Get first street address error message
            }

            // Return error message if any
            if ($errorMessage) {
                return back()->withErrors([$errorMessage]);
            }
        }
          }

        // Create user on successful validation
        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'dob' => $input['dob'],
            'password' => Hash::make($input['password']),
        ]);

        return redirect()->route('LandingPage.LandingIndex'); // Redirect to Landing Page on success
    }
}
