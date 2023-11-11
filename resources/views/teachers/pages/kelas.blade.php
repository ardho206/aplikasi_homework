@extends('teachers.layouts.main')

@section('content')
    <div class="px-4">
        <div class="bg-white w-full h-[40rem] rounded-lg shadow-lg">
            <div class="w-full">
                <img class="rounded-t-lg" src="/img/banner/{{ $bannerJurusan }}" alt="">
            </div>
            <div class="flex items-center justify-end w-full mt-6">
                <p class="mr-2 text-lg">Kelas : </p>
                <label for="underline_select" class="sr-only">Underline select</label>
                <select x-model="selectedKelas" @change="updateURL()" id="underline_select"
                    class="block py-0 px-0 mt-1 mr-10 w-28 text-lg bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option value="" :selected="selectedKelas === ''">Semua</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-8 mx-4">
                @foreach ($kelasMessages as $kelasMessage)
                    <div class="flex items-center shadow-lg rounded-lg bg-white border w-full h-20">
                        <h2>{{ $kelasMessage }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
