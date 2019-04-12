<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasaran extends Model
{
    protected $fillable = ['id_sales', 'id_lokasi', 'waktu_pemasaran'];
}
