<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TabelUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tabel_user';

    protected $fillable = [
        'nama', 'alamat', 'email', 'telp', 'username', 'password', 'id_kota', 'id_role'
    ];

    protected $hidden = [
        'password_user'
    ];

    public function Pemesanans()
    {
        return $this->hasMany('App\Models\Pemesanan', 'id_user', 'id');
    }

    public function Penerimaans()
    {
        return $this->hasMany('App\Models\Penerimaan', 'id_user', 'id');
    }

    public function Kota()
    {
        return $this->belongsTo('App\Models\Kota', 'id_kota', 'id');
    }

    public function Role()
    {
        return $this->belongsTo('App\Models\Role', 'id_role', 'id');
    }
}
