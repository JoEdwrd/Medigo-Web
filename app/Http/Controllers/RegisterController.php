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
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|min:10|regex:/^\d+$/|unique:users',
            'dob' => 'required|date|before:17 years ago|after:100 years ago',
            'password' => 'required|string|min:8',
        ],[
            'dob.before' => 'Age must be at least 17 years old.',
            'dob.after' => 'Age must be under 100 years old.',
        ]);

        if ($request->validator && $request->validator->fails()) {
            
            $errors = $request->validator->errors()->messages();

            if (count($errors) > 0) {
                $errorMessage = '';
                if (isset($errors['email'])) {
                    $errorMessage = $errors['email'][0];
                } elseif (isset($errors['phone'])) {
                    $errorMessage = $errors['phone'][0];
                } elseif (isset($errors['dob'])) {
                    $errorMessage = $errors['dob'][0];
                } elseif (isset($errors['password'])) {
                    $errorMessage = $errors['password'][0];
                }

                if ($errorMessage) {
                    return back()->withErrors([$errorMessage]);
                }
            }
        }

        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'dob' => $input['dob'],
            'address' => "",
            'password' => Hash::make($input['password']),
        ]);

        return redirect()->route('login');
    }
}
