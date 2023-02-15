<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
