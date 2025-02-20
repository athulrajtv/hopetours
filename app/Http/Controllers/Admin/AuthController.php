<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User; // Assuming you're using the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login() {
        return view ('admin.auth.login');
    }
    public function post_login(Request $request)
    {
        // Validate the input fields
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Regenerate the session to prevent fixation attacks
            $request->session()->regenerate();

            Log::info('Login successful for email:', ['email' => $credentials['email']]);

            // Redirect to the intended URL or fallback to the admin dashboard
            return redirect()->intended(route ('admin.dashboard')); 
        }

        Log::warning('Login failed for email:', ['email' => $credentials['email']]);

        // If login fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register() {
        return view ('admin.auth.register');
    }
    public function post_register(Request $request)
    {
        $request->validate([
            'regname' => 'required|string|max:255',
            'regmail' => 'required|string|email|max:255|unique:users,email',
            'regpassword' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->regname,
            'email' => $request->regmail,
            'password' => Hash::make($request->regpassword),
        ]);

        return redirect()->route('admin.auth.login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect(route('admin.auth.login'))->with('success', 'Successfully logged out');
    }
}

