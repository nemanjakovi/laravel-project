<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    // Show Register Create Form
    public function create()
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request)
    {
        $formFilds = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email',  Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        //Hash Password
        $formFilds['password'] = bcrypt($formFilds['password']);

        //Create User
        $user = User::create($formFilds);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
    // Logout
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Show Login From
    public function login()
    {
        return view('users.login');
    }
    // Authenticate User
    public function authenticate(Request $request)
    {
        $formFilds = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFilds)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid credencials'])->onlyInput('email');
    }
}
