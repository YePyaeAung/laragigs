<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // Register Form
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        // Validation
        $registerFormData = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);
        // Create User
        $user = User::create($registerFormData);
        // Login
        auth()->login($user);
        return redirect('/')->with('flashMessage', "Thanks For Registeration!");
    }
    // Login Form
    public function login()
    {
        return view('auth.login');
    }
    public function postLogin()
    {
        $loginFormData = request()->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => ['required', 'min:6']
        ]);
        if(auth()->attempt($loginFormData)) {
            request()->session()->regenerate();
            return redirect('/')->with('flashMessage',  "You are now Logged In!");
        }
        return back()->withErrors(['email' => "Invalid Credentials!"])->onlyInput('email');
    }
    // Logout
    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('flashMessage',  "You have been Logged Out!");
    }
}
