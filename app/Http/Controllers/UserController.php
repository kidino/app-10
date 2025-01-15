<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index(Request $request) {
        
        if($request->filled('s')) {
            $users = User::where('name', 'like', '%'.$request->s.'%')
                ->orWhere('email', 'like', '%'.$request->s.'%')
                ->paginate(10);
        } else {
            $users = User::paginate(10);
        }

        // echo "<pre>";
        // print_r($users->toArray());
        // echo "</pre>";

        return view('user.index', [
            'users' => $users,
            'request' => $request
        ]);
    }

    public function edit($id) {

        $user = User::findOrFail($id);
        $roles = Role::all();

        // return view('user.edit', [
        //     'user' => $user,
        //     'roles' => $roles
        // ]);

        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'roles' => ['nullable', 'array'],
            'roles.*' => ['exists:roles,id'],
            'password' => ['nullable', 'confirmed', Password::defaults()],
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // update password only if entered 
        if($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        $user->roles()->sync($request->roles ?? []);

        return redirect(route('user.index'))->with(
            'success',
            'User '.$user->name.' ('.$user->id.') updated successfully'
        );
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
