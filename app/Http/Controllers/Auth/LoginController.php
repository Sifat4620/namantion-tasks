<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;  // Use the User model
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validate the login form
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in using username and password (Eloquent)
        $user = User::where('username', $request->username)->first(); // Eloquent query

        // Use Hash::check() to compare the password
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentication was successful, log the user in
            Auth::loginUsingId($user->id);
            return redirect()->intended('/');
        }

        // Authentication failed, redirect back with error message
        return back()->withErrors(['username' => 'The provided credentials are incorrect.']);
    }
}
