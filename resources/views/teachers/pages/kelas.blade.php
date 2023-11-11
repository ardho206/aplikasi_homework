@extends('teachers.layouts.main')

@section('content')
    <div class="px-4">
        <div class="bg-white w-full h-[40rem] rounded-lg shadow-lg">
            <div class="w-full">
                <img class="rounded-t-lg" src="/img/banner/{{ $bannerJurusan }}" alt="">
            </div>
            <div class="grid grid-cols-3 gap-4 mt-8 mx-4">
                @foreach ($kelas as $item)
                    <div class="flex items-center shadow-lg rounded-lg bg-white border w-full h-20">
                        <h2>{{ $item->kelas }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
