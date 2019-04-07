<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = ['tipe_kendaraan', 'no_kendaraan', 'jumlah_unit'];
}
