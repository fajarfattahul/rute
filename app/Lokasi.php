<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Lokasi extends Model
{
    protected $fillable = ['nama_lokasi', 'wilayah', 'waktu_pemesanan'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'pemasarans', 'id_lokasi', 'id_sales');
    }
}
