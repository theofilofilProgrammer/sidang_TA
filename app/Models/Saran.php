<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'alamat_email',
        'isi_saran',
        'balasan_admin',
        'status',
    ];
}
