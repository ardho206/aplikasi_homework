<?php

namespace App\Models;

use App\Models\Tugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapels';

    protected $guarded = [];

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
}
