<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiPenghargaan extends Model
{
    use HasFactory;

    protected $table = 'prestasi_penghargaans';

    protected $fillable = [
        'judul_prestasi_penghargaan',
        'kategori_prestasi_penghargaan',
        'tahun_prestasi_penghargaan',
        'deskripsi_prestasi_penghargaan',
        'dokumentasi',
    ];
}
