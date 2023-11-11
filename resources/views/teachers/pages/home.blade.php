@extends('teachers.layouts.main')

@section('content')
    <div class="px-4 pb-10 font-poppins">
        <div class="grid grid-cols-1 gap-4 md:gap-5 md:grid-cols-3">
            <template x-for="jurusan in filteredJurusan">
                <div class="relative w-full rounded-lg bg-base-100 h-56 md:h-60 shadow-lg font-poppins">
                    <a :href="'tugas/' + jurusan.slug" class="group relative isolate flex flex-col justify-center overflow-hidden rounded-t-lg h-[6.5rem] max-w-full pl-3.5">
                        <img :src="'/img/banner/' + jurusan.banner" :alt="jurusan.jurusan" class="absolute inset-0 h-full w-full object-fill object-center transition ease-linear duration-200 group-hover:scale-[1.1]">
                        <div class="absolute w-full flex justify-center items-center inset-0 bg-gradient-to-t from-gray-800/50 via-gray-800/30 transition-all duration-300 -bottom-[8rem] group-hover:bottom-0">
                            <p x-text="jurusan.jurusan" class="font-bold text-3xl text-gray-200"></p>
                        </div>
                    </a>
                    <div class="avatar mt-2 ml-2 md:mt-3 md:ml-3">
                        <div class="w-[3.2rem] h-14 md:w-16 md:h-16 rounded-full border border-black">
                            <img class="inset-0 w-full object-fill object-center" src="{{ asset('img/avatar/avatar1.png') }}" />
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 flex items-center justify-around md:justify-end w-full h-12 px-1 border-t border-gray-400">
                        <div class="lg:tooltip" data-tip="Lihat Kelas">
                            <div class="relative flex items-center justify-center">
                                <a :href="'kelas/' + jurusan.slug" class="py-1 px-3 md:px-2 md:py-2 flex items-center rounded-lg border border-gray-700/30 md:border-0 bg-gray-100 md:bg-white hover:bg-gray-200">
                                    <p class="block md:hidden mr-1 font-semibold capitalize">kelas</p>
                                    <svg class="w-5 h-5 stroke-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4H1m3 4H1m3 4H1m3 4H1m6.071.286a3.429 3.429 0 1 1 6.858 0M4 1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm9 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="lg:tooltip" data-tip="Lihat Nilai">
                            <div class="relative flex items-center justify-center">
                                <a :href="'nilai/' + jurusan.slug" class="py-1 px-3 md:px-2 md:py-2 flex items-center rounded-lg border border-gray-700/30 md:border-0 bg-gray-100 md:bg-white hover:bg-gray-200">
                                    <p class="block md:hidden mr-1 font-semibold capitalize">Nilai</p>
                                    <svg class="w-5 h-5 stroke-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1v14h16m0-9-3-2-3 5-3-2-3 4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="lg:tooltip" data-tip="Lihat di Drive">
                            <div class="relative flex items-center justify-center">
                                <a :href="jurusan.slug" class="py-1 px-3 md:px-2 md:py-2 flex items-center rounded-lg border border-gray-700/30 md:border-0 bg-gray-100 md:bg-white hover:bg-gray-200">
                                    <p class="block md:hidden mr-1 font-semibold capitalize">Drive</p>
                                    <svg class="w-5 h-5 stroke-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5v11a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H1Zm0 0V2a1 1 0 0 1 1-1h5.443a1 1 0 0 1 .8.4l2.7 3.6H1Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <div x-show="filteredJurusan.length === 0"
            class="flex flex-col justify-center items-center bg-white w-full h-[17rem] shadow-xl rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-20 h-w-20 mb-4 stroke-gray-800">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            <p class="text-xl font-semibold text-gray-800 uppercase"><span x-text="'``' + search + '``'"></span> tidak ditemukan</p>
        </div>
    </div>
@endsection
