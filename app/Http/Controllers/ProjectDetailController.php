<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    function index() {
        return view('main.project.create');
    }
}
