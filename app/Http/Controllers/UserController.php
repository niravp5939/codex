<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function addUser(UserRequest $request)
    {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->route('home')->with('success', 'Message send successfully');
    }
    public function listUser(Request $request)
    {
        $userlist = User::all();
        return view('adminpanel.user-list', compact('userlist'));
    }
}