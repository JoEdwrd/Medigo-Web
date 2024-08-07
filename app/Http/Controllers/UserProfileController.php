<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);
        return view('Profile.user-profile', compact('cart', 'user'));
    }

    public function checkPassPage(){
        $user = auth()->user();
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);
        return view('Profile.Change-Password.old-password-check', compact('cart', 'user'));
    }

    public function newPassPage(Request $request){
        $user = auth()->user();
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);
        return view('Profile.Change-Password.new-password-confirm', compact('cart', 'user'));
    }

    public function validateOldPass(Request $request){
        $request->validate([
            'old_password' => 'required'
        ]);

        $user = auth()->user();
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);

        $userInput = $request->old_password;
        if(Hash::check($userInput, $user->password)){
            return redirect('/newPass');
        }else{
            return redirect()->back()->withErrors("Incorrect Password!");
        }
    }



    public function changePassword(Request $request){
        $user = auth()->user();
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);
        $request->validate([
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $newPass = $request->new_password;
        $confirmNewPass = $request->confirm_password;

        if($newPass == $confirmNewPass){
            User::whereId($user->id)->update([
                'password' => Hash::make($newPass)
            ]);

            return redirect()->route('oldPassPage')->with("success", "Password changed successfully!", compact('cart', 'user'));
        }else{
            return redirect()->back()->withErrors("New Password and Confirm Password do not match!");
        }
    }

    public function logoutPage(){
        $user = auth()->user();
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);
        return view('Profile.logout-profile', compact('cart', 'user'));
    }

    public function updateProfile(Request $request){
        $user = auth()->user();
        $rules=[
           'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'gender' => 'required|string|max:255',
            'phone' => [
                'required',
                'string',
                'regex:/(08)[0-9]*/',
                'min:10',
                'max:13',
                Rule::unique('users')->ignore($user->id),
            ],
            'dob' => 'required|date',
            'province' => 'required|string|regex:/^[\pL]+(?:[\s\pL]+)*$/u',
            'city' => 'required|string|regex:/^[\pL]+(?:[\s\pL]+)*$/u',
            'district' => 'required|string|regex:/^[\pL]+(?:[\s\pL]+)*$/u',
            'street' => 'required|string|regex:/^[\pL\d\s\.]+$/u|not_regex:/^\s/',
            'postalCode' => 'required|string|regex:/^\d{1,5}$/',
            'description' =>'nullable',
            'profile_picture' => 'nullable',
            'profile_picture.*' => 'nullable | image | mimes : jpg ,jpeg,png |max:2048'
        ];

        $validatedData=$request->validate($rules, [
            'province.regex' => 'Edit profile failed, The province field must not contain symbols, numbers, or leading whitespaces. Please try again.',
            'city.regex' => 'Edit profile failed, The city field must not contain symbols, numbers, or leading whitespaces. Please try again.',
            'district.regex' => 'Edit profile failed, The district field must not contain symbols, numbers, or leading whitespaces. Please try again.',
            'street.regex' => 'Edit profile failed, The street field must not contain symbols or leading whitespaces. Please try again.',
            'postalCode.regex' => 'Edit profile failed, The postal code must be a number with a minimum and maximum length of 5 digits. Please try again.',
        ]);

        $validatedData['address'] = $validatedData['street'] . ', ' . $validatedData['district'] . ', ' . $validatedData['city'] . ', ' . $validatedData['province'] . ', ' . $validatedData['postalCode'];

        if(isset($validatedData['description'])){
            $validatedData['address'] = $validatedData['address'].', ' . $validatedData['description'];
        }


        unset(
            $validatedData['street'],
            $validatedData['city'],
            $validatedData['district'],
            $validatedData['postalCode'],
            $validatedData['province'],
            $validatedData['description']
        );


        if ($request->hasFile('profile_picture')) {
            $profilePhotoPath = $request->file('profile_picture')->store('item', "public");
            $validatedData['profile_picture'] = $profilePhotoPath;

        } else {
            $validatedData['profile_picture'] = $user->profile_picture;
        }

        User::where("id",$user->id)
        ->update($validatedData);
        return redirect("/profile")->with("success","Profile has been updated!");
    }

}
