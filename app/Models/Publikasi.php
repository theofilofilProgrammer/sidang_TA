<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_publikasi',
        'abstrak_publikasi',
        'deskripsi_publikasi',
        'jurnal_prosiding_id',
    ];

    /**
     * Relasi one-to-many (inverse) ke JurnalProsiding.
     */
    public function jurnalProsiding()
    {
        return $this->belongsTo(JurnalProsiding::class);
    }

    /**
     * Relasi many-to-many ke Dosen.
     */
    public function dosens()
    {
        return $this->belongsToMany(Dosen::class, 'publikasi_dosen');
    }
}
