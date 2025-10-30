<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DasarHukum;
use App\Models\Dosen;
use App\Models\MataKuliah;

class DasarHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil beberapa ID Dosen dan Mata Kuliah untuk dihubungkan
        $dosenIds = Dosen::pluck('id');
        $mataKuliahIds = MataKuliah::pluck('id');

        $dasarHukums = [
            [
                'data' => [
                    'judul_dasar_hukum' => 'Sistem Informasi Absensi Mahasiswa Berbasis Web',
                    'jenis_dasar_hukum' => 'HKI',
                    'jenis_hukum_berkaitan_judul' => 'Hak Cipta (Program Komputer)',
                    'tahun_dasar_hukum' => 2023,
                    'nomor_pendaftaran' => 'EC00202301234',
                    'deskripsi_dasar_hukum' => 'Program komputer untuk manajemen absensi mahasiswa secara online.',
                ],
                'dosen_count' => 2, // Jumlah dosen yang akan di-attach
                'matkul_count' => 3, // Jumlah matkul yang akan di-attach
            ],
            [
                'data' => [
                    'judul_dasar_hukum' => 'Aplikasi Mobile Deteksi Dini Kebakaran Hutan Menggunakan IoT',
                    'jenis_dasar_hukum' => 'HKI',
                    'jenis_hukum_berkaitan_judul' => 'Hak Cipta (Program Komputer)',
                    'tahun_dasar_hukum' => 2024,
                    'nomor_pendaftaran' => 'EC00202405678',
                    'deskripsi_dasar_hukum' => 'Aplikasi mobile yang terintegrasi dengan sensor IoT untuk mendeteksi potensi kebakaran hutan.',
                ],
                'dosen_count' => 2,
                'matkul_count' => 4,
            ],
            [
                'data' => [
                    'judul_dasar_hukum' => 'Metode Pengolahan Citra untuk Deteksi Kerusakan Tanaman Padi Otomatis',
                    'jenis_dasar_hukum' => 'Paten',
                    'jenis_hukum_berkaitan_judul' => 'Paten Sederhana',
                    'tahun_dasar_hukum' => 2023,
                    'nomor_pendaftaran' => 'S00202309876',
                    'deskripsi_dasar_hukum' => 'Sebuah metode atau proses baru untuk menganalisis citra digital daun padi guna mendeteksi penyakit secara otomatis.',
                ],
                'dosen_count' => 3,
                'matkul_count' => 2,
            ],
            [
                'data' => [
                    'judul_dasar_hukum' => 'Desain Antarmuka Pengguna Aplikasi Smart Home',
                    'jenis_dasar_hukum' => 'HKI',
                    'jenis_hukum_berkaitan_judul' => 'Desain Industri',
                    'tahun_dasar_hukum' => 2024,
                    'nomor_pendaftaran' => 'IDD00202401122',
                    'deskripsi_dasar_hukum' => 'Desain tata letak dan tampilan visual untuk aplikasi kontrol perangkat rumah pintar.',
                ],
                'dosen_count' => 2,
                'matkul_count' => 2,
            ],
            // Tambahkan 6+ data lainnya di sini dengan format yang sama
        ];

        foreach ($dasarHukums as $item) {
            $dasarHukum = DasarHukum::updateOrCreate(
                ['nomor_pendaftaran' => $item['data']['nomor_pendaftaran']],
                $item['data']
            );

            // Attach relasi ke Dosen dan Mata Kuliah secara acak
            $dasarHukum->dosens()->sync($dosenIds->random($item['dosen_count'])->all());
            $dasarHukum->mataKuliahs()->sync($mataKuliahIds->random($item['matkul_count'])->all());
        }
    }
}
