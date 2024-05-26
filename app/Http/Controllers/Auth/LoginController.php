<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('backend.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Check if user exists
        $user = \App\Models\User::where('email', $request->email)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'Email yang anda masukkan tidak ada pada sistem.',
            ]);
        }

        // Check if password matches
        if (!Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            throw ValidationException::withMessages([
                'password' => 'Password yang anda masukkan salah.',
            ]);
        }

        $request->session()->regenerate();

            // Redirect user based on their role
            $user = Auth::user();
            if ($user->role->name === 'Admin') {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/user/dashboard');
            }  
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
