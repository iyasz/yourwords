<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\DetailContent;
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

        if($project->user_id != Auth::user()->id){
            abort(404);
        }

        return view('main.project.detail', compact('project'));
    }

    public function handleAddList(Request $request, $id) {
        $request->validate([
            'text' => 'required|max:100',
            'answer_text' => 'required|max:100',
        ],[
            'text.required' => 'Teks tidak boleh kosong!',
            'text.max' => 'Teks terlalu panjang!',

            'answer_text.required' => 'Teks Answer tidak boleh kosong!',
            'answer_text.max' => 'Teks Answer terlalu panjang!',

        ]);
        $detailContent = new DetailContent();
        $detailContent->content_id = $id;
        $detailContent->text = $request->text;
        $detailContent->answer_text = $request->answer_text;
        $detailContent->save();

        return redirect(request()->path());
    }
}