<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="shortcut icon" href="{{ asset('img/homework.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Homework</title>

    <style>
        .typed-cursor {
            font-size: 30px;
            color: white;
            margin-bottom: 7px;
        }
    </style>
</head>

<body class="font-poppins">
    <div class="w-full h-screen relative bg-[#5E72E4] px-6 py-6">
        <img src="{{ asset('img/pattern3.png') }}" alt="" class="absolute w-full h-full top-0 left-0">
        <div class="grid md:grid-cols-2 gap-4 h-full">
            <div class="hidden md:flex justify-start items-center relative bg-transparent w-full h-full">
                <div class="flex items-center absolute top-0 left-0">
                    <img class="w-7 h-7" src="{{ asset('img/homework.png') }}" alt="">
                    <p class="ml-2 text-white text-lg font-semibold">Homework</p>
                </div>
                <span id="typing-content" class="text-2xl text-white capitalize"></span>
            </div>
            <div class="bg-white w-full -h-full rounded-xl flex flex-col justify-center items-center relative">
                <img src="{{ asset('img/pattern4.png') }}" alt="" class="absolute w-[19rem] top-0 right-0 rotate-180">
                @if (Request::is('login'))
                    @yield('login')
                @elseif (Request::is('register'))
                    @yield('regist')
                @else
                    <h2 class="text-[#5E72E4] text-3xl font-bold mb-4">Get Started</h2>
                    <div class="flex gap-2">
                        <button type="button" onclick="window.location.href='/login'" class="text-white bg-gradient-to-br from-[#5E72E4] to-blue-400 focus:ring-0 focus:outline-none font-medium rounded-lg text-sm px-8 py-2.5 text-center">Login</button>
                        <button type="button" onclick="window.location.href='/register'" class="text-white bg-gradient-to-br from-[#5E72E4] to-blue-400 focus:ring-0 focus:outline-none font-medium rounded-lg text-sm px-8 py-2.5 text-center">Sign Up</button>
                    </div>
                @endif
                <p class="absolute bottom-3 text-[#5E73E4] flex items-center">
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

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>
