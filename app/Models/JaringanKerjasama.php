<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JaringanKerjasama extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jaringan_kerjasamas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_jaringan_kerjasama',
        'jenis_kemitraan',
        'gambar_perusahaan',
        'pengertian_jaringan_kerjasama',
    ];
}
