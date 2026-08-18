<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // WAJIB
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory; // WAJIB

    protected $table = 'pelanggan';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'no_hp',
        'email'
    ];
}