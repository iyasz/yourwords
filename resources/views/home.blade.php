@extends('layout.main')

@section('content')
    <div class="text-center mt-20 ">
        <h1 class="font-bold text-white lg:text-[70px] md:text-[55px] text-[33px] leading-[1]">Hafalin kata-kata ? <br> Gampang az.</h1>
        <p class="text-slate-400 md:mt-6 mt-4 lg:text-base md:text-[14px] text-[9px]">Alternatif metode menghafalkan kata-kata dengan menebaknya.</p>
        <div class="action-wrapper md:mt-10 mt-6 flex justify-center">
            <button class="bg-gray-700 tracking-wide lg:py-4 py-3 lg:px-10 px-5 text-white font-medium rounded-md flex items-center">
                <span class="me-2 lg:text-[17px] text-[12px]">Get Started</span>
                <svg class="lg:w-[20px] w-[14px]" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.49998 11C4.94769 11 4.49998 11.4477 4.49998 12C4.49998 12.5523 4.94769 13 5.49998 13L5.49998 11ZM22.2071 12.7071C22.5976 12.3166 22.5976 11.6834 22.2071 11.2929L15.8431 4.92893C15.4526 4.53841 14.8195 4.53841 14.4289 4.92893C14.0384 5.31946 14.0384 5.95262 14.4289 6.34315L20.0858 12L14.4289 17.6569C14.0384 18.0474 14.0384 18.6805 14.4289 19.0711C14.8195 19.4616 15.4526 19.4616 15.8432 19.0711L22.2071 12.7071ZM5.49998 13L21.5 13L21.5 11L5.49998 11L5.49998 13Z" fill="white"/>
                </svg>
            </button>
        </div>

        <hr class="opacity-25 lg:my-20 my-10 mx-5">
        <div class="features-wrapper">
            <div class="text-center">
                <h1 class="text-white font-bold lg:text-4xl md:text-[30px] text-[24px] tracking-wide">About</h1>
            </div>
            <div class="content md:mt-16 mt-6 flex justify-center">
                <div class="grid lg:max-w-none md:max-w-2xl max-w-xl lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-8 px-4 gap-y-16 ">
                    <div class="">
                        <div class="icon bg-[#20706f] p-3 mb-4 inline-block text-center rounded-full">
                            <svg class="w-[25px] text-[#3aedf3]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 8l-4 4l4 4m10-8l4 4l-4 4M14 4l-4 16"></path> </svg>
                        </div>
                        <h1 class="text-white text-xl mb-1 font-semibold">Open Source</h1>
                        <h1 class="text-slate-200 md:text-sm text-xs ">Anda dapat berkontribusi untuk mengembangkan website ini dan terdapat free source code!</h1>
                    </div>
                    <div class="">
                        <div class="icon bg-[#207020] p-3 mb-4 inline-block text-center rounded-full">
                            <svg class="w-[25px]" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.1811 10.3017L19.3189 10.1983C20.4902 10.0918 21.5 11.014 21.5 12.1901V19C21.5 20.1046 20.6046 21 19.5 21H14H11.5C10.3954 21 9.5 20.1046 9.5 19V9.17707C9.5 8.73793 9.64453 8.311 9.91128 7.96217L12.4113 4.69293C13.5731 3.17367 16 3.99526 16 5.90784V8.30993C16 9.486 17.0098 10.4082 18.1811 10.3017Z" stroke="#43f33a" stroke-width="2"/>
                                <path d="M3.5 10V19C3.5 20.1046 4.39543 21 5.5 21H7.5C8.60457 21 9.5 20.1046 9.5 19V10C9.5 8.89543 8.60457 8 7.5 8H5.5C4.39543 8 3.5 8.89543 3.5 10Z" stroke="#43f33a" stroke-width="2"/>
                            </svg>
                        </div>
                        <h1 class="text-white text-xl mb-1 font-semibold">Free to use</h1>
                        <h1 class="text-slate-200 md:text-sm text-xs ">Ya kali bayar, gratis dong! free to use untuk kamu sebagai pengguna tanpa biaya sepeserpun!</h1>
                    </div>
                    <div class="">
                        <div class="icon bg-[#702060] p-3 mb-4 inline-block text-center rounded-full">
                            <svg class="w-[25px]" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.3262 9.51736C18.737 8.05464 17.6728 6.83266 16.3049 6.04801C14.9371 5.26337 13.345 4.96168 11.7849 5.19149C10.2248 5.4213 8.78735 6.16925 7.70383 7.31499C6.62031 8.46074 6 9.84689 5.81128 11.5082M5.81128 11.5082L4 8.84689M5.81128 11.5082L8.5 10.3469" stroke="#f33aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.50002 14.5652C6.08925 16.0279 7.15341 17.2499 8.52129 18.0345C9.88916 18.8192 11.4812 19.1209 13.0413 18.8911C14.6014 18.6612 16.0389 17.9133 17.1224 16.7676C18.2059 15.6218 18.8262 14.2357 19.0149 12.5744M19.0149 12.5744L20.8262 15.2357M19.0149 12.5744L16.3262 13.7357" stroke="#f33aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h1 class="text-white text-xl mb-1 font-semibold">Easy to use</h1>
                        <h1 class="text-slate-200 md:text-sm text-xs ">Gampang banget dipake tinggal sat set doang, tinggal langsung simpan pertanyaan, start, dan tebak! </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection