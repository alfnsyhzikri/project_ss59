<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function jurusans()
    {
        return $this->hasOne(Jurusan::class,"id","jurusans_id");
    }

    public function tahun_ajarans()
    {
        return $this->hasOne(TahunAjaran::class,"id","tahun_ajarans_id");
    }
}
