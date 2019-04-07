<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang', 'jenis_barang', 'harga', 'stock', 'pembuatan'];
}
