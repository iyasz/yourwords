@extends('layout.main')

@section('content')
    <div class="mt-10 mx-4">
        <div class="mb-4">
            <a href="/dashboard" class="inline-block">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12.5" cy="12" r="9" stroke="white" stroke-width="2"/>
                    <path d="M17.7312 11.2379C18.1454 11.237 18.4819 11.572 18.4828 11.9862C18.4837 12.4004 18.1487 12.737 17.7345 12.7379L17.7312 11.2379ZM6.23784 12.5436C5.9443 12.2514 5.94325 11.7765 6.2355 11.483L10.9979 6.69945C11.2902 6.40591 11.765 6.40486 12.0586 6.69711C12.3521 6.98936 12.3532 7.46423 12.0609 7.75777L7.82765 12.0098L12.0797 16.243C12.3732 16.5353 12.3742 17.0101 12.082 17.3037C11.7898 17.5972 11.3149 17.5983 11.0213 17.306L6.23784 12.5436ZM17.7345 12.7379L6.76865 12.7621L6.76534 11.2621L17.7312 11.2379L17.7345 12.7379Z" fill="white"/>
                </svg>
            </a>
        </div>
        <div class="mb-6">
            <h1 class="text-white font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">Title</h1>
            <h1 class="text-white font-light lg:text-xl md:text-[24px] text-[14px] tracking-wide">{{$project->title}}</h1>
        </div>
        <div class="mb-6">
            <h1 class="text-white font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">Description</h1>
            <h1 class="text-white font-light lg:text-xl md:text-[24px] text-[14px] tracking-wide">{{$project->description}}</h1>
        </div>
        <div class="mb-6">
            <h1 class="text-white font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">Dibuat</h1>
            <h1 class="text-white font-light lg:text-xl md:text-[24px] text-[14px] tracking-wide">{{$project->created_at->format('d M Y')}}</h1>
        </div>
        

    </div>

    <div class="projects-wrapper mt-20 mx-4">
        <div class="flex items-center justify-between" x-data="{ openList: false }">
            <h1 class="text-white font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">List Kata</h1>
            <button x-on:click="openList = !openList" class="text-white font-light lg:text-xl md:text-[24px] text-[14px] tracking-wide">Tambah +</button>
            <template x-if="openList">
                <x-create-detail/>
            </template>
        </div>
        <div class="mt-6">
            @if ($project->DetailContent->count() > 0)
                <div class="grid lg:max-w-none md:max-w-2xl max-w-xl lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-5 gap-y-5 ">
                    @foreach ($project->DetailContent as $item)
                    <div class="bg-zinc-800 rounded-md">
                        <div class="p-3 h-full flex flex-col">
                            <h1 class="text-white font-semibold text-sm break-words ">{{$item->text}}</h1>
                            <hr class="my-3 opacity-25">
                            <p class="text-zinc-100 text-xs break-words">{{$item->answer_text}}</p>

                            <div class="text-end mt-auto">
                                <form action="/project/list/{{$item->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="inline-block bg-primary text-white p-1 rounded-sm text-xs">
                                        <svg width="15" height="15" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.01444 12.4585C3.77445 10.3786 3.65445 9.33861 4.25097 8.6693C4.84749 8 5.89435 8 7.98808 8H17.0119C19.1056 8 20.1525 8 20.749 8.6693C21.3455 9.33861 21.2255 10.3786 20.9856 12.4585L20.4086 17.4585C20.2142 19.1436 20.117 19.9861 19.5482 20.4931C18.9794 21 18.1313 21 16.435 21H8.565C6.86873 21 6.02059 21 5.4518 20.4931C4.88302 19.9861 4.7858 19.1436 4.59136 17.4585L4.01444 12.4585Z" stroke="white" stroke-width="2"/>
                                            <path d="M6.5 9V7C6.5 5.11438 6.5 4.17157 7.08579 3.58579C7.67157 3 8.61438 3 10.5 3H14.5C16.3856 3 17.3284 3 17.9142 3.58579C18.5 4.17157 18.5 5.11438 18.5 7V9" stroke="white" stroke-width="2"/>
                                            <path d="M9.5 17V12" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M21.5 8H3.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M15.5 17V12" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            @else 
                <div class="mt-5 text-center">
                    <h1 class="text-white font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">Belom bikin nihh ...</h1>
                </div>
            @endif

        </div>
    </div>
@endsection