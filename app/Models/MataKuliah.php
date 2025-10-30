<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'semester',
        'sks_teori',
        'sks_praktik',
        'jumlah_sks',
        'keterangan',
    ];

    /**
     * The Program Learning Outcomes that belong to the MataKuliah.
     */
    // public function programLearningOutcomes(): BelongsToMany
    // {
    //     return $this->belongsToMany(ProgramLearningOutcome::class, 'plo_mata_kuliah');
    // }

    /**
     * The Bidang Unggulan that belong to the MataKuliah.
     */
    public function bidangUnggulans(): BelongsToMany
    {
        return $this->belongsToMany(BidangUnggulan::class, 'bidang_unggulan_mata_kuliah');
    }

    /**
     * The Pusat Unggulan that belong to the MataKuliah.
     */
    // public function pusatUnggulans(): BelongsToMany
    // {
    //     return $this->belongsToMany(PusatUnggulan::class, 'pusat_unggulan_mata_kuliah', 'mata_kuliah_id', 'pusat_unggulan_id');
    // }
}
