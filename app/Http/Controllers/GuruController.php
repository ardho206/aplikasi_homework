<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('teachers.pages.home');
    }

    public function jurusanApi()
    {
        $jurusanData = Jurusan::all();

        return response()->json($jurusanData);
    }
}
