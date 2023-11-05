<?php

namespace App\Models;

use App\Models\Tugas;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'gurus';

    protected $guarded = ['id'];

    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
}
