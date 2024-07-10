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

        $request->validate([
            'old_password' => 'required'
        ]);

        // dd($request);
        
        $user = auth()->user();
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);

        $userInput = $request->old_password;
        if(Hash::check($userInput, $user->password)){    
            return view('Profile.Change-Password.new-password-confirm', compact('cart', 'user'));
        }else{
            return redirect()->back()->withErrors("Incorrect Password!");
        }
    }

    

    public function changePassword(Request $request){
        $user = auth()->user();
        $cart = Cart::with(['cart_details.product', 'promotion'])->firstOrCreate(['user_id'=> $user->id]);
        $request->validate([
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        $newPass = $request->new_password;
        $confirmNewPass = $request->confirm_password;

        if($newPass == $confirmNewPass){
            User::whereId($user->id)->update([
                'password' => Hash::make($newPass)
            ]);
    
            return redirect()->route('oldPassPage')->with("Password changed successfully!", compact('cart', 'user'));
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
        // dd($request->all());
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
            'address'=> 'required|string',
            'profile_picture' => 'nullable',
            'profile_picture.*' => 'nullable | image | mimes : jpg ,jpeg,png |max:2048'
            // 'role' => 'required|boolean|max:255'
        ];

        
        
        // if($request->email!=$user->email){
        //     $rules["email"]= "required|unique:users";
        // }
        // if($request->phone!=$user->phone){
        //     $rules["phone"]= "required|max:255|unique:users";
        // }
        $validatedData=$request->validate($rules);
        

        if ($request->hasFile('profile_picture')) {
            $profilePhotoPath = $request->file('profile_picture')->store('item');
            $validatedData['profile_picture'] = $profilePhotoPath;
            
        } else {
            $validatedData['profile_picture'] = $user->profile_picture;
        }
        // dd($request);
        //  if($request->file("image")){
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData["image"]=$request->file("image")->store("post-images");
        // }
        User::where("id",$user->id)
        ->update($validatedData);
        return redirect("/profile")->with("success","Profile has been update!");
    }

}
