<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::all();

        return response()->json([
            "status" => 1,
            "message" => "Users list",
            "total_users"=>$users->count(),
            "data" => $users,
            
        ], 200);
    }


    public function addNewUser(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json([
            "status" => 1,
            "message" => "User added successfully"
        ], 200);

    }
}
