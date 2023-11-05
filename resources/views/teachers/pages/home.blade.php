@extends("teachers.layouts.main")

@section('content')
<div class="px-4">
    <div class="grid grid-cols-1 gap-5 lg:grid-cols-4">
        <template x-for="jurusan in filteredJurusan">
            <div class="relative w-full rounded-lg bg-base-100 h-44 lg:h-52 shadow-lg font-poppins">
                <a :href="'tugas/' + jurusan.slug" class="group relative isolate flex flex-col justify-center overflow-hidden rounded-t-lg h-[6.5rem] max-w-full pl-3.5">
                    <img src="{{ asset('img/banner/bannermtk.jpeg') }}" :alt="jurusan.jurusan" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/30"></div>
                    <h3 class="z-10 text-2xl font-semibold text-white group-hover:underline group-hover:underline-offset-1" x-text="jurusan.jurusan"></h3>
                    <div class="z-10 overflow-hidden text-sm leading-6 text-gray-200 group-hover:underline group-hover:underline-offset-1" x-text="jurusan.kepanjangan"></div>
                </a>
                <div class="absolute bottom-0 left-0 flex items-center justify-end w-full h-12 px-1 border-t border-gray-400">
                    <div class="lg:tooltip" data-tip="Lihat Kelas">
                        <div class="relative flex items-center justify-center">
                            <a :href="'kelas/' + jurusan.slug" class="p-2 rounded-lg hover:bg-gray-200">
                                <svg class="w-5 h-5 stroke-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4H1m3 4H1m3 4H1m3 4H1m6.071.286a3.429 3.429 0 1 1 6.858 0M4 1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Zm9 6.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="lg:tooltip" data-tip="Lihat Nilai">
                        <div class="relative flex items-center justify-center">
                            <a :href="'nilai/' + jurusan.slug" class="p-2 rounded-lg hover:bg-gray-200">
                                <svg class="w-5 h-5 stroke-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1v14h16m0-9-3-2-3 5-3-2-3 4"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="lg:tooltip" data-tip="Lihat di Drive">
                        <div class="relative flex items-center justify-center">
                            <a :href="jurusan.slug" class="p-2 rounded-lg hover:bg-gray-200">
                                <svg class="w-5 h-5 stroke-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5v11a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H1Zm0 0V2a1 1 0 0 1 1-1h5.443a1 1 0 0 1 .8.4l2.7 3.6H1Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
    <div x-show="filteredJurusan.length === 0" class="flex flex-col justify-center items-center bg-white w-full h-[17rem] shadow-xl rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-20 h-w-20 mb-4 stroke-gray-800">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        <p class="text-xl font-semibold text-gray-800 uppercase"><span x-text="'``' + search + '``'"></span> tidak ditemukan</p>
    </div>
</div>
@endsection
