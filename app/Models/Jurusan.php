<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Tugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusans';

    protected $guarded = [];

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
}
