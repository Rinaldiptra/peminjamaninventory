<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    
    protected $table = 'jenis';
    protected $fillable = ['id_jenis','nama_jenis', 'keterangan'];
}
