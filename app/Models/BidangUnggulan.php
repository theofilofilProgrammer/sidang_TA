<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BidangUnggulan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bidang_unggulan',
        'fokus_bidang',
        'deskripsi_lengkap_bidang',
        'gambar_bidang_unggulan',
    ];

    /**
     * The dosens that belong to the BidangUnggulan.
     */
    public function dosens(): BelongsToMany
    {
        return $this->belongsToMany(Dosen::class, 'bidang_unggulan_dosen');
    }

    /**
     * The mataKuliahs that belong to the BidangUnggulan.
     */
    public function mataKuliahs(): BelongsToMany
    {
        return $this->belongsToMany(MataKuliah::class, 'bidang_unggulan_mata_kuliah');
    }
}
