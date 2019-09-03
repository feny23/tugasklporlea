<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailUjian extends Model
{
    protected $table = 'detail_ujian';
    protected $guarded=[];
    protected $fillable = ['id','id_soal','jawaban'];

    // Tambahkan Kode yang diperlukan dibawah ini
}
