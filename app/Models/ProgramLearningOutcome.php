<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class ProgramLearningOutcome extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_cpl',
        'deskripsi_utama',
        'poin_poin_sub',
    ];

    protected $casts = [
        'poin_poin_sub' => 'array', // Otomatis mengubah JSON ke array dan sebaliknya
    ];

    public function mataKuliahs(): BelongsToMany
    {
        return $this->belongsToMany(MataKuliah::class, 'plo_mata_kuliah');
    }
}
