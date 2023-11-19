<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                'kelas' => 10,
                'jurusan_id' => 1,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 11,
                'jurusan_id' => 1,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 12,
                'jurusan_id' => 1,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 10,
                'jurusan_id' => 2,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 11,
                'jurusan_id' => 2,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 12,
                'jurusan_id' => 2,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 10,
                'jurusan_id' => 3,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 11,
                'jurusan_id' => 3,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 12,
                'jurusan_id' => 3,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 10,
                'jurusan_id' => 4,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 11,
                'jurusan_id' => 4,
                'jumlah_murid' => 30
            ],
            [
                'kelas' => 12,
                'jurusan_id' => 4,
                'jumlah_murid' => 30
            ],
        ];

        foreach($kelas as $key => $item) {
            Kelas::create($item);
        }
    }
}
