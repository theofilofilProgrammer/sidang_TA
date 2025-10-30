<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengumuman; // Menggunakan model Pengumuman yang benar
use Carbon\Carbon; // Untuk mengelola tanggal

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan updateOrCreate untuk mencegah duplikasi data jika seeder dijalankan berkali-kali.
        // Metode ini akan mencari record berdasarkan 'judul_pengumuman', jika ada akan di-update, jika tidak ada akan dibuat.
        Pengumuman::updateOrCreate(
            ['judul_pengumuman' => 'Pembaruan Kurikulum Semester Ganjil 2024/2025'],
            [
                'isi_pengumuman' => 'Diberitahukan kepada seluruh mahasiswa bahwa telah terjadi pembaruan pada kurikulum untuk semester ganjil tahun ajaran 2024/2025. Detail kurikulum dapat diunduh pada lampiran.',
                'tanggal_pengumuman' => Carbon::now()->subDays(5),
                'dokumen' => 'dokumen/kurikulum_2024_2025.pdf',
                'dokumentasi' => 'dokumen/gambar/pengumuman_kurikulum.jpg',
            ]
        );

        Pengumuman::updateOrCreate(
            ['judul_pengumuman' => 'Jadwal Ujian Akhir Semester (UAS) Genap 2023/2024'],
            [
                'isi_pengumuman' => 'Berikut adalah jadwal lengkap Ujian Akhir Semester (UAS) untuk semester genap tahun ajaran 2023/2024. Harap diperhatikan dengan seksama.',
                'tanggal_pengumuman' => Carbon::now()->subDays(10),
                'dokumen' => 'dokumen/jadwal_uas_genap_2023_2024.pdf',
                'dokumentasi' => 'dokumen/gambar/jadwal_uas_genap_2023_2024.jpg',
            ]
        );
    }
}
