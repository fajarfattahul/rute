<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = ['nama_lokasi', 'wilayah', 'waktu_pemesanan'];
}
