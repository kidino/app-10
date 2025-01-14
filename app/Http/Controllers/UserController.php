<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

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

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('user.index'))->with(
            'success', 
            'User '.$user->name.' ('.$user->id.') created successfully'
        );

    }
}
