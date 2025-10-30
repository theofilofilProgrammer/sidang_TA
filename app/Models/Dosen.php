<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nidn',
        'nama_dosen',
        'e_mail_dosen',
        'no_telp_dosen',
        'tempat_lahir',
        'tanggal_lahir',
        'status_kepegawaian',
        'bidang_keahlian',
        'deskripsi_bidang_keahlian',
        'jenis_dosen',
        'foto_profil_dosen',
        'tempat_tinggal_dosen',
        'riwayat_pendidikan',
        'perguruan_tinggi',
        'bidang_keahlian_pendidikan',
        'minat_penelitian',
        'visi_dosen',
        'misi_dosen',
    ];

    /**
     * The bidangUnggulans that belong to the Dosen.
     */
    public function bidangUnggulans(): BelongsToMany
    {
        return $this->belongsToMany(BidangUnggulan::class, 'bidang_unggulan_dosen');
    }
}
