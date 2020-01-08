<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventaris extends Model
{
    protected $table = 'inventaris';
    protected $fillable = ['id_inventaris','nama', 'kondisi','keterangan','jumlah','id_jenis','tanggal_registrasi','id_ruang','kode_inventaris','id_petugas'];
}
