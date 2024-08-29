<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    function index() {
        return view('main.project.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required'
        ],[
            'title.required' => 'Judul tidak boleh kosong!',
            'title.max' => 'Judul terlalu panjang!',

            'description.required' => 'Deskripsi tidak boleh kosong!',
        ]);

        $user = new Content();

        $user->user_id = Auth::user()->id;
        $user->title = $request->title;
        $user->description = $request->description;

        $user->save();

        return redirect('/project/list/'.$user->id);
    }

    public function detail($id) {
        $project = Content::findOrFail($id);

        return view('main.project.detail', compact('project'));
    }
}