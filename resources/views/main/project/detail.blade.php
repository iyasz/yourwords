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
            <div class="grid lg:max-w-none md:max-w-2xl max-w-xl lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-5 gap-y-5 ">
               @foreach ($project->DetailContent as $item)
                <div class="bg-zinc-800 rounded-md">
                    <div class="p-3">
                        <h1 class="text-white font-semibold text-sm break-words ">{{$item->text}}</h1>
                        <p class="text-zinc-100 text-xs break-words">{{$item->answer_text}}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
@endsection