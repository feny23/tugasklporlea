<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = 'ujian';
    protected $guarded=[];
    protected $fillable = ['id','id_user'];

    // Tambahkan Kode yang diperlukan dibawah ini
}
