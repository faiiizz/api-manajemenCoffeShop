<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventori extends Model
{
    protected $fillable=[
        'nama_barang','stok','harga','satuan','kd_barang',

    ];
}
