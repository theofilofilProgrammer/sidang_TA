<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'email_mahasiswa',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'mahasiswa_asal',
        'tinggal_mahasiswa',
        'agama_mahasiswa',
        'no_telp_mahasiswa',
        'nama_sekolah_dasar',
        'nama_menengah_pertama',
        'nama_sekolah_atas',
        'semester',
        'ipk',
        'motivasi_mahasiswa',
        'nama_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'foto_profil_mhs',
        'pekerjaan_bagi_mahasiswa',
        'deskripsi_pekerjaan',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
