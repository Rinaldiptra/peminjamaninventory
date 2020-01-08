<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['id_peminjaman','tanggal_pinjam','tanggal_kembali','status_peminjaman','id_petugas'];
}