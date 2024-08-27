<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function handleLogin(Request $req) {
        $req->validate([
            'username' => '',
            'password' => '',
        ]);
    }
}
