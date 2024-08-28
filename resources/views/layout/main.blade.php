<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">

    {{-- alpinejs  --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- tailwind  --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    {{-- css  --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>YourWords - Buat ngafalin kata katan tho</title>

    @stack('css')

</head>
<body>

    <div class="max-w-5xl mx-auto" x-data="{ isOpen: false }">
        <x-navbar/>

        @if ($errors->any())
            <x-toast>{{$errors->first()}}</x-toast>
        @endif
        
        {{-- <x-auth-form/> --}}
        @yield('content')
        <x-footer/>
    </div>

    @stack('js')
        
</body>
</html>