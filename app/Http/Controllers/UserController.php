<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        
        $users = User::all();
        // echo "<pre>";
        // print_r($users->toArray());
        // echo "</pre>";

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function edit($id) {

        $user = User::findOrFail($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }

    function create() {
        return view('user.create');
    }

    function store(Request $request) {
        // dd($request->all());    

        $validated_data = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:5',
        ]);


    }
}
