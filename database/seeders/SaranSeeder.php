<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Saran;

class SaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Saran::create([
            'nama_lengkap' => 'Budi Santoso',
            'alamat_email' => 'budi.santoso@example.com',
            'isi_saran' => 'Sistem informasi website prodi D3 TI PSDKU sudah bagus, tapi mungkin bisa ditambahkan fitur notifikasi pengumuman.',
            'status' => 'Menunggu Balasan',
        ]);

        Saran::create([
            'nama_lengkap' => 'Anonim',
            'alamat_email' => null,
            'isi_saran' => 'Kurikulum untuk mata kuliah praktikum perlu diperbarui agar lebih relevan dengan industri.',
            'balasan_admin' => 'Terima kasih atas sarannya. Kami akan mempertimbangkan masukan ini untuk perbaikan kurikulum di masa depan.',
            'status' => 'Sudah Dibalas',
        ]);
    }
}
