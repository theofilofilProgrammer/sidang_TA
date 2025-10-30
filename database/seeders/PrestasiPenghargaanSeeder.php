<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PrestasiPenghargaan;

class PrestasiPenghargaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prestasiData = [
            [
                'judul_prestasi_penghargaan' => 'Juara 1 Lomba Aplikasi Mobile Nasional Gemastik',
                'kategori_prestasi_penghargaan' => 'Pengembangan Perangkat Lunak',
                'tahun_prestasi_penghargaan' => 2024,
                'deskripsi_prestasi_penghargaan' => 'Tim dari PSDKU Sukamara berhasil meraih juara pertama dalam kategori pengembangan perangkat lunak dengan aplikasi "Sukamara Tour Guide".',
                'dokumentasi' => 'prestasi/gemastik-2024.jpg',
            ],
            [
                'judul_prestasi_penghargaan' => 'Finalis Kompetisi Keamanan Siber (Capture The Flag) Regional Kalimantan',
                'kategori_prestasi_penghargaan' => 'Keamanan Siber',
                'tahun_prestasi_penghargaan' => 2024,
                'deskripsi_prestasi_penghargaan' => 'Mewakili Polnep, tim mahasiswa berhasil masuk babak final dalam kompetisi CTF yang diselenggarakan oleh BSSN.',
                'dokumentasi' => 'prestasi/ctf-regional-2024.png',
            ],
            [
                'judul_prestasi_penghargaan' => 'Hibah Penelitian Dosen Pemula dari Kemendikbudristek',
                'kategori_prestasi_penghargaan' => 'Penelitian Dosen',
                'tahun_prestasi_penghargaan' => 2023,
                'deskripsi_prestasi_penghargaan' => 'Dr. Andi Wijaya, M.Kom mendapatkan hibah untuk penelitian tentang "Implementasi IoT untuk Smart Farming di Sukamara".',
                'dokumentasi' => 'prestasi/hibah-dosen-2023.jpg',
            ],
            [
                'judul_prestasi_penghargaan' => 'Juara 2 Lomba Desain UI/UX Tingkat Provinsi',
                'kategori_prestasi_penghargaan' => 'Desain UI/UX',
                'tahun_prestasi_penghargaan' => 2023,
                'deskripsi_prestasi_penghargaan' => 'Mahasiswa semester 3 meraih juara kedua dengan desain prototipe aplikasi layanan publik.',
                'dokumentasi' => 'prestasi/lomba-uiux-2023.jpg',
            ],
            [
                'judul_prestasi_penghargaan' => 'Penghargaan Program Studi Inovatif',
                'kategori_prestasi_penghargaan' => 'Penghargaan Institusi',
                'tahun_prestasi_penghargaan' => 2022,
                'deskripsi_prestasi_penghargaan' => 'Prodi D3 TI PSDKU Sukamara menerima penghargaan dari LLDIKTI Wilayah XI sebagai prodi dengan program inovasi terbaik.',
                'dokumentasi' => 'prestasi/prodi-inovatif-2022.jpg',
            ],
            [
                'judul_prestasi_penghargaan' => 'Best Paper Award di Konferensi Nasional Informatika',
                'kategori_prestasi_penghargaan' => 'Publikasi Ilmiah',
                'tahun_prestasi_penghargaan' => 2022,
                'deskripsi_prestasi_penghargaan' => 'Publikasi oleh Prof. Dr. Siti Aminah, M.T. tentang keamanan jaringan nirkabel terpilih sebagai makalah terbaik.',
                'dokumentasi' => 'prestasi/best-paper-2022.jpg',
            ],
            [
                'judul_prestasi_penghargaan' => 'Juara Harapan 1 Lomba Karya Tulis Ilmiah Mahasiswa',
                'kategori_prestasi_penghargaan' => 'Karya Tulis Ilmiah',
                'tahun_prestasi_penghargaan' => 2024,
                'deskripsi_prestasi_penghargaan' => 'Tim mahasiswa menulis tentang pemanfaatan AI untuk prediksi hasil panen kelapa sawit di Sukamara.',
                'dokumentasi' => 'prestasi/lktim-2024.jpg',
            ],
            [
                'judul_prestasi_penghargaan' => 'Sertifikasi Kompetensi Network Administrator (BNSP)',
                'kategori_prestasi_penghargaan' => 'Sertifikasi Mahasiswa',
                'tahun_prestasi_penghargaan' => 2023,
                'deskripsi_prestasi_penghargaan' => 'Sebanyak 15 mahasiswa berhasil lulus uji kompetensi dan mendapatkan sertifikasi dari BNSP di bidang administrasi jaringan.',
                'dokumentasi' => 'prestasi/sertifikasi-bnsp-2023.jpg',
            ],
        ];

        foreach ($prestasiData as $data) {
            PrestasiPenghargaan::updateOrCreate(
                ['judul_prestasi_penghargaan' => $data['judul_prestasi_penghargaan'], 'tahun_prestasi_penghargaan' => $data['tahun_prestasi_penghargaan']],
                $data
            );
        }
    }
}
