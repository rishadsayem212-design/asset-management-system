<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //  Method to show the login form
    public function showLoginForm()
    {
        
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    //  login Method
    public function login(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Check if the "remember me" checkbox is checked
        $remember = $request->has('remember');

        // Attempt to log the user in with the provided credentials
        if (Auth::attempt($credentials, $remember)) {
            // If the login attempt is successful, regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // If the login attempt fails, redirect back with an error message
        return back()->with('error', 'The email or password is incorrect!');
    }

    // . logout Method
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}