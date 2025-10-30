<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProgramLearningOutcome;
use App\Models\MataKuliah;

class ProgramLearningOutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plos = [
            // Sikap
            [
                'judul_cpl' => 'S-1: Bertakwa kepada Tuhan Yang Maha Esa',
                'deskripsi_utama' => 'Mampu menunjukkan sikap religius dan bertakwa kepada Tuhan Yang Maha Esa.',
                'poin_poin_sub' => [],
            ],
            [
                'judul_cpl' => 'S-2: Menjunjung Tinggi Nilai Kemanusiaan',
                'deskripsi_utama' => 'Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral, dan etika.',
                'poin_poin_sub' => [],
            ],
            [
                'judul_cpl' => 'S-9: Menunjukkan Sikap Bertanggung Jawab',
                'deskripsi_utama' => 'Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.',
                'poin_poin_sub' => [],
            ],
            // Pengetahuan
            [
                'judul_cpl' => 'P-1: Menguasai Konsep Teoritis Informatika',
                'deskripsi_utama' => 'Menguasai konsep teoritis bidang pengetahuan informatika secara umum, meliputi algoritma, arsitektur komputer, basis data, jaringan komputer, dan rekayasa perangkat lunak.',
                'poin_poin_sub' => [],
            ],
            [
                'judul_cpl' => 'P-2: Menguasai Konsep Matematika',
                'deskripsi_utama' => 'Menguasai konsep matematika (logika, aljabar, statistika) yang diperlukan untuk analisis dan perancangan di bidang informatika.',
                'poin_poin_sub' => [],
            ],
            // Keterampilan Umum
            [
                'judul_cpl' => 'KU-1: Menerapkan Pemikiran Logis dan Inovatif',
                'deskripsi_utama' => 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya.',
                'poin_poin_sub' => [],
            ],
            [
                'judul_cpl' => 'KU-2: Menunjukkan Kinerja Mandiri dan Bermutu',
                'deskripsi_utama' => 'Mampu menunjukkan kinerja mandiri, bermutu, dan terukur.',
                'poin_poin_sub' => [],
            ],
            [
                'judul_cpl' => 'KU-5: Mengambil Keputusan Secara Tepat',
                'deskripsi_utama' => 'Mampu mengambil keputusan secara tepat dalam konteks penyelesaian masalah di bidang keahliannya, berdasarkan hasil analisis informasi dan data.',
                'poin_poin_sub' => [],
            ],
            // Keterampilan Khusus
            [
                'judul_cpl' => 'KK-1: Keterampilan Rekayasa Perangkat Lunak',
                'deskripsi_utama' => 'Mampu menerapkan prinsip-prinsip rekayasa perangkat lunak untuk melakukan perancangan, pengembangan, dan pengujian aplikasi skala kecil hingga menengah.',
                'poin_poin_sub' => [
                    'Menganalisis kebutuhan pengguna dan sistem.',
                    'Merancang arsitektur perangkat lunak.',
                    'Mengimplementasikan rancangan menjadi kode program.',
                    'Melakukan pengujian unit dan integrasi.',
                ],
                'mata_kuliah' => [
                    'Rekayasa Perangkat Lunak',
                    'Pemrograman Berorientasi Objek',
                    'Struktur Data',
                    'Basis Data',
                ],
            ],
            [
                'judul_cpl' => 'KK-2: Keterampilan Basis Data',
                'deskripsi_utama' => 'Mampu merancang, mengimplementasikan, dan mengelola basis data relasional untuk mendukung aplikasi perangkat lunak.',
                'poin_poin_sub' => [
                    'Merancang skema basis data menggunakan ERD dan normalisasi.',
                    'Menggunakan SQL untuk manipulasi dan definisi data (DML & DDL).',
                    'Melakukan administrasi dasar basis data (backup, recovery).',
                ],
                'mata_kuliah' => [
                    'Basis Data',
                    'Praktikum Basis Data',
                ],
            ],
            [
                'judul_cpl' => 'KK-3: Keterampilan Jaringan Komputer',
                'deskripsi_utama' => 'Mampu merancang, mengimplementasikan, dan mengelola jaringan komputer skala kecil (SOHO) yang aman.',
                'poin_poin_sub' => [
                    'Melakukan pengalamatan IP (subnetting).',
                    'Mengkonfigurasi perangkat jaringan dasar (router, switch).',
                    'Menerapkan kebijakan keamanan jaringan dasar.',
                ],
                'mata_kuliah' => [
                    'Jaringan Komputer Dasar',
                    'Praktikum Jaringan Komputer Dasar',
                    'Sistem Keamanan Informasi',
                ],
            ],
            [
                'judul_cpl' => 'KK-4: Keterampilan Pengembangan Aplikasi Web',
                'deskripsi_utama' => 'Mampu membangun aplikasi berbasis web yang dinamis dan interaktif menggunakan teknologi front-end dan back-end yang relevan.',
                'poin_poin_sub' => [
                    'Membangun antarmuka pengguna (UI) dengan HTML, CSS, dan JavaScript.',
                    'Mengembangkan logika sisi server (back-end) dengan framework seperti Laravel.',
                    'Mengintegrasikan aplikasi dengan basis data.',
                ],
                'mata_kuliah' => [
                    'Pemrograman Terstruktur',
                    'Pemrograman Berorientasi Objek',
                    'Basis Data',
                    'Jaringan Komputer Dasar',
                ],
            ],
        ];

        foreach ($plos as $ploData) {
            $plo = ProgramLearningOutcome::updateOrCreate(
                ['judul_cpl' => $ploData['judul_cpl']],
                [
                    'deskripsi_utama' => $ploData['deskripsi_utama'],
                    'poin_poin_sub' => $ploData['poin_poin_sub'],
                ]
            );

            if (!empty($ploData['mata_kuliah'])) {
                $mataKuliahIds = MataKuliah::whereIn('nama_mk', $ploData['mata_kuliah'])->pluck('id');
                $plo->mataKuliahs()->sync($mataKuliahIds);
            }
        }
    }
}
