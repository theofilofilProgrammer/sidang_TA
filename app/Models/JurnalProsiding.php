<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalProsiding extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_judul_jurnal_prosiding',
        'tipe_jurnal_prosiding',
        'deskripsi_jurnal_prosiding',
        'tahun_jurnal_prosiding',
        'issn',
        'penerbit_jurnal_publikasi',
        'kunjungi_jurnal_dalam_bentuk_url',
    ];

    /**
     * Relasi many-to-many ke MataKuliah.
     */
    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'jurnal_prosiding_mata_kuliah');
    }
}
