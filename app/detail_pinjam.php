<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pinjam extends Model
{
      protected $table = 'detail_pinjam';
    protected $fillable = ['id_detail_pinjam','id_inventaris', 'jumlah'];
}
