@extends('layout.main')

@section('content')
    <div class="text-center mt-10">
        <h1 class="font-bold text-white lg:text-[50px] md:text-[55px] text-[33px] leading-[1]">Selamat datang! <br> <span class="text-primary">{{ Auth::user()->name }}</span></h1>

        <div class="action-wrapper md:mt-10 mt-6 flex justify-center">
            <a href="/project/new" class="bg-gray-700 tracking-wide lg:py-4 py-3 lg:px-10 px-5 text-white font-medium rounded-md flex items-center">
                <span class="me-2 lg:text-[17px] text-[12px]">New Project</span>
                <svg class="lg:w-[20px] w-[14px]" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.49998 11C4.94769 11 4.49998 11.4477 4.49998 12C4.49998 12.5523 4.94769 13 5.49998 13L5.49998 11ZM22.2071 12.7071C22.5976 12.3166 22.5976 11.6834 22.2071 11.2929L15.8431 4.92893C15.4526 4.53841 14.8195 4.53841 14.4289 4.92893C14.0384 5.31946 14.0384 5.95262 14.4289 6.34315L20.0858 12L14.4289 17.6569C14.0384 18.0474 14.0384 18.6805 14.4289 19.0711C14.8195 19.4616 15.4526 19.4616 15.8432 19.0711L22.2071 12.7071ZM5.49998 13L21.5 13L21.5 11L5.49998 11L5.49998 13Z" fill="white"/>
                </svg>
            </a>
        </div>

    </div>

    <div class="projects-wrapper mt-20 mx-4">
        <h1 class="text-white font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">Recent Projects</h1>
        <div class="mt-6">
            @if ($projects->count() > 0)
            <div class="grid lg:max-w-none md:max-w-2xl max-w-xl lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-5 gap-y-5 ">
                @foreach ($projects as $data)
                    <div class="bg-zinc-800 rounded-md">
                        <div class="p-3 h-full flex flex-col">
                            <h1 class="text-white font-semibold text-sm break-words">{{$data->title}}</h1>
                            <p class="text-zinc-100 text-xs break-words my-2">{{$data->description}}</p>
                            <div class="text-end mt-auto">
                                <a href="/project/{{$data->id}}/game" class="inline-block bg-primary text-white p-1 rounded-sm text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="15" height="15" viewBox="0 0 24 24"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A.998.998 0 0 0 5 3v18a1 1 0 0 0 .536.886zM7 4.909 17.243 12 7 19.091V4.909z"></path></svg>
                                </a>
                                <a href="/project/list/{{$data->id}}" class="inline-block bg-primary text-white p-1 rounded-sm text-xs ms-1">
                                    <svg width="15" height="15" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5 18V6" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M6.5 12L18.5 12" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @else 
            <div class="text-center mt-10">
                <h1 class="text-white font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">Belom ada project nihh ...</h1>
            </div>
            @endif

        </div>
    </div>
@endsection