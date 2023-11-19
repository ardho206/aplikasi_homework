<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework</title>

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Icon Website -->
    <link rel="shortcut icon" href="{{ asset('img/homework.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body class="font-poppins">

    <div class="w-full h-screen relative bg-[#5E72E4] px-3 py-4 md:px-6 md:py-6">
        <img src="{{ asset('img/pattern3.png') }}" alt="" class="absolute w-full h-full top-0 left-0">
        <div class="grid md:grid-cols-2 gap-4 h-full">
            <div wire:loading.class="opacity-50" class="hidden md:flex justify-start items-center relative bg-transparent w-full h-full">
                <div class="flex items-center absolute top-0 left-0">
                    <img class="w-7 h-7" src="{{ asset('img/homework.png') }}" alt="">
                    <p class="ml-2 text-white text-lg font-semibold">Homework</p>
                </div>
                <span id="typing-content" class="text-2xl text-white capitalize"></span>
            </div>
            <div class="bg-white w-full h-full rounded-xl flex flex-col justify-center items-center relative">
                <img src="{{ asset('img/pattern4.png') }}" alt="" class="absolute w-[19rem] top-0 right-0 rotate-180">
                @if (Request::is('login'))
                    @yield('login')
                @elseif (Request::is('register'))
                    @livewire('register')
                @else
                    <h2 class="text-[#5E72E4] text-2xl md:text-3xl font-bold mb-3 md:mb-4">Get Started</h2>
                    <div class="flex gap-3 md:gap-2">
                        <button type="button" wire:click="redirectToLogin" class="text-white bg-gradient-to-br from-[#5E72E4] to-blue-400 focus:ring-0 focus:outline-none font-medium rounded-lg text-sm px-6 py-1.5 md:px-8 md:py-2.5 text-center">Login</button>
                        <button wire:click="redirectToRegister" class="text-white bg-gradient-to-br from-[#5E72E4] to-blue-400 focus:ring-0 focus:outline-none font-medium rounded-lg text-sm px-6 py-1.5 md:px-8 md:py-2.5 text-center">Sign Up</button>
                    </div>
                @endif
                <p class="absolute bottom-3 text-[#5E73E4] flex items-center text-xs md:text-lg">
                    &copy;
                    Made with
                    <svg class="w-4 h-4 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
                    </svg>
                    by
                    <span class="ml-1 font-semibold hover:text-[#5E72E4]">Homework Team</span>
                </p>
            </div>
        </div>
    </div>

    @livewireScriptConfig()
</body>
</html>
