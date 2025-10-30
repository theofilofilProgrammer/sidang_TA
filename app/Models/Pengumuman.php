<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pengumumans';

    protected $fillable = [
        'judul_pengumuman',
        'isi_pengumuman',
        'tanggal_pengumuman',
        'dokumen',
        'dokumentasi',
        'user_id',
    ];

    // Definisikan relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
