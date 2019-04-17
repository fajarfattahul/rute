<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Lokasi;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'tgl_lahir', 'jk', 'jabatan', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lokasis()
    {
        return $this->belongsToMany('App\Lokasi', 'pemasarans', 'id_sales', 'id_lokasi');
    }

    public function admin()
    {
        $admin = json_encode(["Admin"]);
        if ($this->jabatan == $admin) {
            return true;
        } else {
            return false;
        }
    }
}
