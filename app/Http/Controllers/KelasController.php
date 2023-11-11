<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $slug)
    {
        $jurusans = Jurusan::with('kelas')->where('slug', $slug)->get();

        if ($jurusans->isEmpty()) {
            abort(404); // atau redirect ke halaman 404 atau halaman lain sesuai kebutuhan Anda
        }

        $kelas = collect();
        foreach ($jurusans as $jurusan) {
            $kelas = $kelas->merge($jurusan->kelas);
        }

        $bannerJurusan = $jurusans->first()->banner;

        return view('teachers.pages.kelas', compact('jurusans', 'kelas', 'bannerJurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
