<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DasarHukum extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_dasar_hukum',
        'jenis_dasar_hukum',
        'jenis_hukum_berkaitan_judul',
        'tahun_dasar_hukum',
        'nomor_pendaftaran',
        'deskripsi_dasar_hukum',
    ];

    /**
     * Relasi many-to-many ke Dosen.
     */
    public function dosens()
    {
        return $this->belongsToMany(Dosen::class, 'dasar_hukum_dosen');
    }

    /**
     * Relasi many-to-many ke MataKuliah.
     */
    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'dasar_hukum_mata_kuliah');
    }
}
