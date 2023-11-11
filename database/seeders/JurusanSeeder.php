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
                'jurusan' => 'RPL 1',
                'kepanjangan' => 'Rekayasa Perangkat Lunak',
                'slug' => 'rekayasa-perangkat-lunak',
                'banner' => 'banner_rpl.png'
            ],
            [
                'jurusan' => 'RPL 2',
                'kepanjangan' => 'Rekayasa Perangkat Lunak',
                'slug' => 'rekayasa-perangkat-lunak',
                'banner' => 'banner_rpl.png'
            ],
            [
                'jurusan' => 'TKJ 1',
                'kepanjangan' => 'Teknik Komputer Jaringan',
                'slug' => 'teknik-komputer-jaringan',
                'banner' => 'banner_tkj.jpeg'
            ],
            [
                'jurusan' => 'TKJ 2',
                'kepanjangan' => 'Teknik Komputer Jaringan',
                'slug' => 'teknik-komputer-jaringan',
                'banner' => 'banner_tkj.jpeg'
            ],
            [
                'jurusan' => 'TITL 1',
                'kepanjangan' => 'Teknik Instalasi Tenaga Listrik',
                'slug' => 'teknik-instalasi-tenaga-listrik',
                'banner'=> 'banner_titl.jpeg'
            ],
            [
                'jurusan' => 'TITL 2',
                'kepanjangan' => 'Teknik Instalasi Tenaga Listrik',
                'slug' => 'teknik-instalasi-tenaga-listrik',
                'banner'=> 'banner_titl.jpeg'
            ],
            [
                'jurusan' => 'TKR 1',
                'kepanjangan' => 'Teknik Kendaraan Ringan',
                'slug' => 'teknik-kendaraan-ringan',
                'banner' => 'banner_tkr.jpeg'
            ],
            [
                'jurusan' => 'TKR 2',
                'kepanjangan' => 'Teknik Kendaraan Ringan',
                'slug' => 'teknik-kendaraan-ringan',
                'banner' => 'banner_tkr.jpeg'
            ],
            [
                'jurusan' => 'TBSM 1',
                'kepanjangan' => 'Teknik Bisnis Sepeda Motor',
                'slug' => 'teknik-bisnis-sepeda-motor',
                'banner' => 'banner_tbsm.jpeg'
            ],
            [
                'jurusan' => 'TBSM 2',
                'kepanjangan' => 'Teknik Bisnis Sepeda Motor',
                'slug' => 'teknik-bisnis-sepeda-motor',
                'banner' => 'banner_tbsm.jpeg'
            ],
            [
                'jurusan' => 'TP 1',
                'kepanjangan' => 'Teknik Pemesinan',
                'slug' => 'teknik-pemesinan',
                'banner' => 'banner_tp.jpeg'
            ],
            [
                'jurusan' => 'TP 2',
                'kepanjangan' => 'Teknik Pemesinan',
                'slug' => 'teknik-pemesinan',
                'banner' => 'banner_tp.jpeg'
            ],
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
