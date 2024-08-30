@extends('layout.main')

@section('content')
    <div class="text-center mt-10">
        <h1 class="font-bold text-white lg:text-[50px] md:text-[55px] text-[33px] leading-[1]">Theme <br> <span class="text-primary capitalize"> {{$project->title}}</span></h1>
        <hr class="my-10 opacity-25 mx-4">

    </div>

    <div class="guess-wrapper mx-4" x-data="{isAlertShow: false, isCorrect: null, answer: ''}">
        <div class="flex justify-center">
            @foreach ($datas as $data)
            <div class="">
                <div class="mb-5 flex justify-center" x-show="isCorrect === false">
                    <img src="{{asset('img/wrong.png')}}" alt="alert" width="140px" class="rounded-md">
                </div>
                <div class="mb-5 flex justify-center" x-show="isCorrect === true">
                    <img src="{{asset('img/correct.png')}}" alt="alert" width="140px" class="rounded-md">
                </div>
                <div class="mb-5">
                    <label for="text" class="text-slate-200 text-sm">Text</label>
                    <h1 class="text-primary text-xl mt-2 font-semibold capitalize ">{{$data->text}}</h1>
                </div>
                <div class="mb-5">
                    <label for="answer_text" class="text-slate-200 text-sm">Text Answer</label>
                    <input type="text" name="answer_text" id="answer_text" x-model="answer" required maxlength="100" class="w-full p-3 mt-2 text-slate-200 rounded-md focus:outline-none focus-visible:outline-none bg-zinc-800 border-[1px] border-zinc-600">
                </div>
                <button x-on:click="isCorrect = answer.trim().toLowerCase() === `{{$data->answer_text}}`.trim().toLowerCase()" class="w-full text-white bg-zinc-700 rounded-md py-3 text-sm mt-8">
                    Check
                </button>
                <div class="text-center mt-4">
                    <a href="/dashboard" class="text-white text-sm ">Kembali</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection