<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kegiatan;
use Carbon\Carbon;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kegiatans = [
            [
                'nama_kegiatan' => 'Workshop Pengembangan Web dengan Laravel',
                'tanggal_kegiatan' => Carbon::create(2024, 8, 15),
                'deskripsi_kegiatan' => 'Workshop intensif selama 2 hari untuk mahasiswa tingkat akhir mengenai framework PHP Laravel. Materi mencakup dasar-dasar, Eloquent, Blade, dan pembuatan REST API.',
                'dokumentasi' => 'kegiatan/workshop-laravel-2024.jpg',
            ],
            [
                'nama_kegiatan' => 'Seminar Nasional Keamanan Siber 2024',
                'tanggal_kegiatan' => Carbon::create(2024, 9, 5),
                'deskripsi_kegiatan' => 'Seminar yang menghadirkan pakar keamanan siber nasional untuk membahas tren ancaman terbaru dan cara mitigasinya. Terbuka untuk umum dan mahasiswa.',
                'dokumentasi' => 'kegiatan/seminar-cybersecurity-2024.jpg',
            ],
            [
                'nama_kegiatan' => 'Hackathon "Sukamara Smart City Challenge"',
                'tanggal_kegiatan' => Carbon::create(2024, 10, 12),
                'deskripsi_kegiatan' => 'Kompetisi coding 24 jam untuk menciptakan solusi inovatif berbasis teknologi untuk permasalahan di Kabupaten Sukamara. Tim terbaik akan mendapatkan hadiah dan pembinaan.',
                'dokumentasi' => 'kegiatan/hackathon-sukamara-2024.png',
            ],
            [
                'nama_kegiatan' => 'Kuliah Tamu: "Prospek Karir di Industri Game"',
                'tanggal_kegiatan' => Carbon::create(2024, 9, 20),
                'deskripsi_kegiatan' => 'Kuliah tamu dari praktisi industri game development, membahas tentang proses pembuatan game dan peluang karir di dalamnya.',
                'dokumentasi' => 'kegiatan/kuliah-tamu-game-dev.jpg',
            ],
            [
                'nama_kegiatan' => 'Pengabdian Masyarakat: Pelatihan Microsoft Office untuk Aparatur Desa',
                'tanggal_kegiatan' => Carbon::create(2024, 7, 25),
                'deskripsi_kegiatan' => 'Kegiatan pengabdian oleh dosen dan mahasiswa TI untuk meningkatkan literasi digital aparatur desa di sekitar Kabupaten Sukamara.',
                'dokumentasi' => 'kegiatan/pengmas-office-2024.jpg',
            ],
            [
                'nama_kegiatan' => 'Lomba Desain UI/UX Aplikasi Mobile',
                'tanggal_kegiatan' => Carbon::create(2024, 11, 1),
                'deskripsi_kegiatan' => 'Kompetisi internal untuk mahasiswa prodi TI dalam merancang antarmuka pengguna yang intuitif dan menarik untuk aplikasi mobile.',
                'dokumentasi' => 'kegiatan/lomba-uiux-2024.png',
            ],
            [
                'nama_kegiatan' => 'Sosialisasi Program Magang dan Studi Independen Bersertifikat (MSIB)',
                'tanggal_kegiatan' => Carbon::create(2024, 6, 10),
                'deskripsi_kegiatan' => 'Sesi informasi mengenai program MSIB dari Kemendikbudristek, menjelaskan manfaat dan cara pendaftaran bagi mahasiswa.',
                'dokumentasi' => 'kegiatan/sosialisasi-msib-2024.jpg',
            ],
            [
                'nama_kegiatan' => 'Pelantikan Himpunan Mahasiswa Teknologi Informasi (HMTI) Periode 2024/2025',
                'tanggal_kegiatan' => Carbon::create(2024, 5, 15),
                'deskripsi_kegiatan' => 'Acara serah terima jabatan dan pelantikan pengurus baru HMTI PSDKU Sukamara.',
                'dokumentasi' => 'kegiatan/pelantikan-hmti-2024.jpg',
            ],
            [
                'nama_kegiatan' => 'Studi Banding ke Industri Teknologi di Pontianak',
                'tanggal_kegiatan' => Carbon::create(2025, 2, 20),
                'deskripsi_kegiatan' => 'Kunjungan industri bagi mahasiswa semester 4 untuk melihat langsung proses kerja dan teknologi yang digunakan di perusahaan IT terkemuka.',
                'dokumentasi' => 'kegiatan/studi-banding-2025.jpg',
            ],
            [
                'nama_kegiatan' => 'Workshop Internet of Things (IoT) Dasar',
                'tanggal_kegiatan' => Carbon::create(2024, 11, 22),
                'deskripsi_kegiatan' => 'Pelatihan dasar penggunaan mikrokontroler seperti ESP32 dan sensor untuk membangun proyek IoT sederhana.',
                'dokumentasi' => 'kegiatan/workshop-iot-2024.jpg',
            ],
        ];

        foreach ($kegiatans as $kegiatan) {
            // Menggunakan updateOrCreate untuk mencegah duplikasi data jika seeder dijalankan berkali-kali
            Kegiatan::updateOrCreate(
                ['nama_kegiatan' => $kegiatan['nama_kegiatan'], 'tanggal_kegiatan' => $kegiatan['tanggal_kegiatan']],
                $kegiatan
            );
        }
    }
}
