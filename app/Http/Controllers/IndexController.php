<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    function index() {
        return view('home');
    }

    function dashboard() {
        $projects = Content::where('user_id', Auth::user()->id)->get();
        return view('main.dashboard', compact('projects'));
    }
}
