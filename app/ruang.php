<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    protected $table = 'ruang';
    protected $fillable = ['id_ruang','nama_ruang', 'kode_ruang','keterangan'];
}

