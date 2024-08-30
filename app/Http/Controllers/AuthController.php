<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    function handleLogin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string',
        ],[
            'email.required' => 'Email tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
            'email.email' => 'Input harus email!',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors(['error_message' => 'Email atau Password anda salah!'])->onlyInput('email');

    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
