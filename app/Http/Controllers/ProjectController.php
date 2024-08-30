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

        $project = new Content();

        $project->user_id = Auth::user()->id;
        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect('/project/list/'.$project->id);
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

        $project = Content::findOrFail($id);

        if($project->user_id != Auth::user()->id){
            abort(404);
        }

        $detailContent = new DetailContent();
        $detailContent->content_id = $id;
        $detailContent->text = $request->text;
        $detailContent->answer_text = $request->answer_text;
        $detailContent->save();

        return redirect(request()->path());
    }

    public function handleDeleteList($id) {
        $detail = DetailContent::findOrFail($id);
        $idContent = $detail->content->id;

        if($detail->content->user_id != Auth::user()->id){
            abort(404);
        }

        $detail->delete();

        return redirect('/project/list/'.$idContent);

    }

    public function handleEditProject($id) {
        $project = Content::findOrFail($id);

        if($project->user_id != Auth::user()->id){
            abort(404);
        }



        return view('main.project.edit', compact('project'));
    }

    public function handleUpdateProject(Request $request, $id) {
        $project = Content::findOrFail($id);

        if($project->user_id != Auth::user()->id){
            abort(404);
        }

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required'
        ],[
            'title.required' => 'Judul tidak boleh kosong!',
            'title.max' => 'Judul terlalu panjang!',

            'description.required' => 'Deskripsi tidak boleh kosong!',
        ]);


        $project->title = $request->title;
        $project->description = $request->description;
        $project->update();

        return redirect('/project/list/'.$project->id);


    }

    public function handleDeleteProject($id) {
        $project = Content::findOrFail($id);

        if($project->user_id != Auth::user()->id){
            abort(404);
        }


        $project->DetailContent()->delete();

        $project->delete();

        return redirect('/dashboard');

    }


    public function handlePlayGame($id) {
        $project = Content::findOrFail($id);

        if($project->user_id != Auth::user()->id){
            abort(404);
        }

        $datas = $project->DetailContent->shuffle()->take(1);


        return view('main.project.guess', compact('project', 'datas'));
    }
}