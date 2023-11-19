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
            abort(404);
        }

        $kelasMessages = [];
        foreach ($jurusans as $jurusan) {
            foreach ($jurusan->kelas as $kelas) {
                $kelasMessages[] = $kelas->kelas . ' ' . $jurusan->jurusan;
            }
        }

        $bannerJurusan = $jurusans->first()->banner;

        return view('teachers.pages.kelas', compact('kelasMessages', 'bannerJurusan', 'jurusans'));
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
