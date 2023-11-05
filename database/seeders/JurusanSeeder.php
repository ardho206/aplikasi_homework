<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            [
                'jurusan' => 'RPL 1'
            ],
            [
                'jurusan' => 'RPL 2'
            ],
            [
                'jurusan' => 'TKJ 1'
            ],
            [
                'jurusan' => 'TKJ 2'
            ],
            [
                'jurusan' => 'TITL 1'
            ],
            [
                'jurusan' => 'TITL 2'
            ],
            [
                'jurusan' => 'TKR 1'
            ],
            [
                'jurusan' => 'TKR 2'
            ],
            [
                'jurusan' => 'TBSM 1'
            ],
            [
                'jurusan' => 'TBSM 2'
            ],
            [
                'jurusan' => 'TP 1'
            ],
            [
                'jurusan' => 'TP 2'
            ],
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
