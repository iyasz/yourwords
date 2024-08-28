<div>

    @if (!Auth::user())
        <template x-if="isOpen">
            <x-auth-form  />
        </template>
        <div class="navbar">
            <div class="flex py-5 lg:mx-0 mx-5 items-center">
                <div class="navbar-brand">
                    <h1 class="text-white flex items-center">
                        <img src="{{asset('img/logo.png')}}" loading="lazy" alt="logo" width="40px">
                        <span class="ms-3 text-slate-100 font-semibold lg:text-lg text-sm">YourWords</span>
                    </h1>
                </div>
                <div class="nav-link ms-auto">
                    <button class="text-white lg:text-[15px] text-xs" x-on:click="isOpen = !isOpen">Masuk</button>
                </div>
            </div>
        </div>
    @else
        <div class="navbar">
            <div class="flex py-5 lg:mx-0 mx-5 items-center">
                <div class="navbar-brand">
                    <h1 class="text-white flex items-center">
                        <img src="{{asset('img/logo.png')}}" loading="lazy" alt="logo" width="40px">
                        <span class="ms-3 text-slate-100 font-semibold lg:text-lg text-sm">YourWords</span>
                    </h1>
                </div>
                <div class="nav-link ms-auto">
                    <a href="/logout" class="text-white lg:text-[15px] text-xs" >Logout</a>
                </div>
            </div>
        </div>
    @endif
    


</div>
