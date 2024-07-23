<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = User::query();

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%");
        }

        $users = $query->get();

        return view('AdminPage.Users.index', [
            'users' => $users
        ]);

        // dd(User::all());
        // return view("AdminPage.Users.index",[    
        //     'users' => User::all()
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view("AdminPage.Users.show", [
            "user" => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect("/dashboard/users")->with("success", "User has been deleted!");
    }
}
