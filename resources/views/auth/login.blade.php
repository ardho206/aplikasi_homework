@extends('landing-page')

@section('login')
    @if (session()->has('loginError'))
        <div id="alert-2"
            class="flex absolute top-3 right-3 w-9/12 items-center p-4 text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-lg font-medium">
                {{ session('loginError') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <h2 class="text-[#5E72E4] text-3xl font-bold mb-4 tracking-wider z-50">Log<span
            class="bg-[#5E72E4] text-white px-1">in</span>
    </h2>
    <form action="{{ url('/login/auth') }}" method="post" class="w-[23rem] z-50">
        @csrf
        <div class="w-full">
            <label for="email-address-icon"
                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path
                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                </div>
                <input type="email" name="email" id="email-address-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#5E72E4] focus:border-[#5E72E4] block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@example.com">
            </div>
            <label for="password-icon"
                class="block mt-3 mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <div class="relative mb-5">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.5 8V4.5a3.5 3.5 0 1 0-7 0V8M8 12v3M2 8h12a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z" />
                    </svg>
                </div>
                <div class="absolute inset-y-0 right-0 hidden items-center pr-3.5 cursor-pointer" id="show-password">
                    <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 14">
                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                        </g>
                    </svg>
                </div>
                <div class="absolute inset-y-0 right-0 hidden items-center pr-3.5 cursor-pointer" id="hide-password">
                    <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.933 10.909A4.357 4.357 0 0 1 1 9c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 19 9c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M2 17 18 1m-5 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </div>
                <input type="password" name="password" id="password-icon"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#5E72E4] focus:border-[#5E72E4] block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <h3 class="block mb-1 mt-3 text-sm font-medium text-gray-900 dark:text-white">Login sebagai :</h3>

            <div class="flex items-center mb-2">
                <input id="guru" type="radio" name="role" value="guru"
                    class="h-5 w-5 border-gray-300 focus:ring-0 focus:bg-[#5E72E4] checked:bg-[#5E72E4] appearance-none cursor-pointer">
                <label for="guru" class="text-sm font-medium text-gray-900 ml-2 block">
                    Guru
                </label>
            </div>
            <div class="flex items-center mb-2">
                <input id="siswa" type="radio" name="role" value="siswa"
                    class="h-5 w-5 border-gray-300 focus:ring-0 focus:bg-[#5E72E4] checked:bg-[#5E72E4] appearance-none cursor-pointer">
                <label for="siswa" class="text-sm font-medium text-gray-900 ml-2 block">
                    Siswa
                </label>
            </div>

        </div>
        <button type="submit"
            class="bg-gradient-to-br from-[#5E72E4] to-blue-400 text-white w-full py-2 mt-5 rounded-lg font-medium">Login</button>
    </form>
    <p class="text-sm mt-2 tracking-wide">Belum memiliki akun? <a href="/register"
            class="text-[#5E72E4] font-semibold">Daftar</a></p>
@endsection
