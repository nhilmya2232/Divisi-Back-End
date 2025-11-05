<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'nama_lengkap',
        'nomor_telepon',
        'alamat_lengkap',
        'catatan_lokasi',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}