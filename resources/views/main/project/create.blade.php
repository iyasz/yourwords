@extends('layout.main')

@section('content')
    <div class=" mt-10">
        <h1 class="text-white text-center font-bold lg:text-2xl md:text-[30px] text-[20px] tracking-wide">New Project</h1>

        <div class="mt-8">
            <div class="flex justify-center">
                <div class="">
                    <a href="/dashboard" class="inline-block">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12.5" cy="12" r="9" stroke="white" stroke-width="2"/>
                            <path d="M17.7312 11.2379C18.1454 11.237 18.4819 11.572 18.4828 11.9862C18.4837 12.4004 18.1487 12.737 17.7345 12.7379L17.7312 11.2379ZM6.23784 12.5436C5.9443 12.2514 5.94325 11.7765 6.2355 11.483L10.9979 6.69945C11.2902 6.40591 11.765 6.40486 12.0586 6.69711C12.3521 6.98936 12.3532 7.46423 12.0609 7.75777L7.82765 12.0098L12.0797 16.243C12.3732 16.5353 12.3742 17.0101 12.082 17.3037C11.7898 17.5972 11.3149 17.5983 11.0213 17.306L6.23784 12.5436ZM17.7345 12.7379L6.76865 12.7621L6.76534 11.2621L17.7312 11.2379L17.7345 12.7379Z" fill="white"/>
                        </svg>
                    </a>
                    <div class="card bg-zinc-800 rounded-md md:w-[470px] w-[320px] mt-3">
                        <div class="card-body md:p-5 p-3">
                            <form action="/project/new" method="post">
                                @csrf
                                <div class="mb-5">
                                    <label for="title" class="text-slate-200 text-sm">Judul</label>
                                    <input type="text" maxlength="100" name="title" id="title" required class="w-full p-3 mt-2 text-slate-200 rounded-md foucs:outline-none focus-visible:outline-none bg-zinc-800 border-[1px] border-zinc-600" placeholder="Example">
                                </div>
                                <div class="mb-5">
                                    <label for="description" class="text-slate-200 text-sm">Deskripsi</label>
                                    <textarea name="description" required id="description" class="w-full p-3 mt-2 text-slate-200 rounded-md foucs:outline-none focus-visible:outline-none bg-zinc-800 border-[1px] border-zinc-600" placeholder="Something here .." cols="30" rows="6"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="text-white bg-dark-primary w-full rounded-lg py-3 text-sm">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection