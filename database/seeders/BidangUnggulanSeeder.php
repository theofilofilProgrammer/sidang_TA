<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BidangUnggulan;
use App\Models\Dosen;
use App\Models\MataKuliah;

class BidangUnggulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bidangUnggulans = [
            [
                'data' => [
                    'nama_bidang_unggulan' => 'Rekayasa Perangkat Lunak (RPL)',
                    'fokus_bidang' => 'Pengembangan perangkat lunak, arsitektur sistem, metodologi agile, dan pengujian perangkat lunak.',
                    'deskripsi_lengkap_bidang' => 'Bidang ini fokus pada seluruh siklus hidup pengembangan perangkat lunak, mulai dari analisis kebutuhan, desain, implementasi, pengujian, hingga pemeliharaan sistem. Mahasiswa akan belajar membangun aplikasi web, desktop, dan mobile yang andal dan efisien.',
                    'gambar_bidang_unggulan' => 'images/jenis_bidang_unggulan/RPL.jpg',
                ],
                'dosens' => ['Dr. Budi Santoso, S.Kom., M.Kom.', 'Agus Salim, S.T., M.Eng.', 'Dian Kusuma, S.Kom., M.T.'],
                'mata_kuliah' => ['Rekayasa Perangkat Lunak', 'Pemrograman Berorientasi Objek', 'Basis Data', 'Struktur Data'],
            ],
            [
                'data' => [
                    'nama_bidang_unggulan' => 'Jaringan Komputer & Keamanan Siber',
                    'fokus_bidang' => 'Desain, implementasi, dan manajemen infrastruktur jaringan yang aman, termasuk deteksi dan pencegahan ancaman siber.',
                    'deskripsi_lengkap_bidang' => 'Mempelajari cara merancang, mengkonfigurasi, dan mengelola jaringan komputer skala kecil hingga besar. Termasuk di dalamnya adalah topik keamanan siber untuk melindungi data dan infrastruktur dari serangan digital.',
                    'gambar_bidang_unggulan' => 'images/jenis_bidang_unggulan/jarkom-keamanan.jpg',
                ],
                'dosens' => ['Prof. Dr. Siti Aminah, M.T.', 'Prof. Dr. S. Hartono, M.Eng.', 'Dr. Rio Saputra, S.Kom., M.Eng.'],
                'mata_kuliah' => ['Jaringan Komputer Dasar', 'Praktikum Jaringan Komputer Dasar', 'Sistem Keamanan Informasi', 'Praktikum Sistem Keamanan Informasi'],
            ],
            [
                'data' => [
                    'nama_bidang_unggulan' => 'Sistem Informasi & Basis Data',
                    'fokus_bidang' => 'Perancangan sistem informasi, manajemen basis data, data mining, dan business intelligence.',
                    'deskripsi_lengkap_bidang' => 'Fokus pada pengembangan dan pengelolaan sistem informasi untuk mendukung operasi dan pengambilan keputusan bisnis. Mahasiswa akan mahir dalam merancang dan mengelola database (SQL & NoSQL) serta menganalisis data.',
                    'gambar_bidang_unggulan' => 'images/jenis_bidang_unggulan/sistem-informasi.jpg',
                ],
                'dosens' => ['Ir. Citra Dewi, M.Kom.', 'Dr. Rina Marlina, S.Kom., M.Kom.', 'Eko Prasetyo, S.Kom., M.Kom.'],
                'mata_kuliah' => ['Basis Data', 'Praktikum Basis Data', 'Rekayasa Perangkat Lunak', 'Struktur Data'],
            ],
            [
                'data' => [
                    'nama_bidang_unggulan' => 'Multimedia & Kreativitas Digital',
                    'fokus_bidang' => 'Pengembangan konten multimedia, animasi, desain interaktif, dan aplikasi augmented/virtual reality.',
                    'deskripsi_lengkap_bidang' => 'Menggabungkan aspek teknis informatika dengan kreativitas untuk menghasilkan produk digital yang menarik, seperti game, animasi 2D/3D, video, dan aplikasi interaktif lainnya.',
                    'gambar_bidang_unggulan' => 'images/jenis_bidang_unggulan/multimedia.jpg',
                ],
                'dosens' => ['Drs. Anton Wijaya, M.T.', 'Endah Lestari, S.Kom., M.Kom.'],
                'mata_kuliah' => ['Paket Program Terapan', 'Praktikum Paket Program Terapan', 'Pemrograman Berorientasi Objek'],
            ],
            [
                'data' => [
                    'nama_bidang_unggulan' => 'Pengembangan Aplikasi Mobile',
                    'fokus_bidang' => 'Pembuatan aplikasi untuk platform Android dan iOS menggunakan teknologi native maupun cross-platform.',
                    'deskripsi_lengkap_bidang' => 'Bidang yang sangat diminati ini berfokus pada perancangan, pengembangan, dan publikasi aplikasi mobile yang responsif dan user-friendly untuk berbagai perangkat.',
                    'gambar_bidang_unggulan' => 'images/jenis_bidang_unggulan/mobile-dev.jpg',
                ],
                'dosens' => ['Dian Kusuma, S.Kom., M.T.'],
                'mata_kuliah' => ['Pemrograman Berorientasi Objek', 'Praktikum Pemrograman Berorientasi Objek', 'Basis Data'],
            ],
            [
                'data' => [
                    'nama_bidang_unggulan' => 'Internet of Things (IoT)',
                    'fokus_bidang' => 'Integrasi perangkat keras (sensor, mikrokontroler) dengan perangkat lunak untuk menciptakan solusi cerdas.',
                    'deskripsi_lengkap_bidang' => 'Mempelajari cara menghubungkan objek fisik ke internet, mengumpulkan data dari sensor, dan mengontrol perangkat dari jarak jauh untuk aplikasi seperti smart home, smart agriculture, dan lainnya.',
                    'gambar_bidang_unggulan' => 'images/jenis_bidang_unggulan/iot.jpg',
                ],
                'dosens' => ['Dr. Rio Saputra, S.Kom., M.Eng.'],
                'mata_kuliah' => ['Arsitektur Komputer', 'Jaringan Komputer Dasar', 'Pemrograman Terstruktur'],
            ],
            [
                'data' => [
                    'nama_bidang_unggulan' => 'Kecerdasan Buatan (AI)',
                    'fokus_bidang' => 'Dasar-dasar machine learning, pemrosesan bahasa alami, dan visi komputer.',
                    'deskripsi_lengkap_bidang' => 'Pengenalan konsep kecerdasan buatan dan penerapannya untuk menyelesaikan masalah kompleks, seperti sistem rekomendasi, chatbot, dan pengenalan objek pada gambar.',
                    'gambar_bidang_unggulan' => 'images/jenis_bidang_unggulan/ai.jpg',
                ],
                'dosens' => ['Eko Prasetyo, S.Kom., M.Kom.'],
                'mata_kuliah' => ['Algoritma Pemrograman', 'Struktur Data', 'Matematika'],
            ],
        ];

        foreach ($bidangUnggulans as $item) {
            $bidang = BidangUnggulan::updateOrCreate(
                ['nama_bidang_unggulan' => $item['data']['nama_bidang_unggulan']],
                $item['data']
            );

            // Menghubungkan dengan Dosen
            if (!empty($item['dosens'])) {
                $dosenIds = Dosen::whereIn('nama_dosen', $item['dosens'])->pluck('id');
                if ($dosenIds->isNotEmpty()) {
                    $bidang->dosens()->sync($dosenIds);
                }
            }

            // Menghubungkan dengan Mata Kuliah
            if (!empty($item['mata_kuliah'])) {
                $mataKuliahIds = MataKuliah::whereIn('nama_mk', $item['mata_kuliah'])->pluck('id');
                if ($mataKuliahIds->isNotEmpty()) {
                    $bidang->mataKuliahs()->sync($mataKuliahIds);
                }
            }
        }
    }
}
