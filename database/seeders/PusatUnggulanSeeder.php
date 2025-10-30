<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PusatUnggulan;
use App\Models\MataKuliah;

class PusatUnggulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coes = [
            [
                'data' => [
                    'judul_coe' => 'Pusat Unggulan Teknologi Pertanian Cerdas (Smart Agriculture)',
                    'deskripsi_utama_coe' => 'Fokus pada riset dan implementasi teknologi IoT, sensor, dan drone untuk meningkatkan efisiensi dan produktivitas sektor pertanian serta perkebunan di Kabupaten Sukamara.',
                    'poin_poin_unggulan_coe' => json_encode([
                        'Sistem irigasi otomatis berbasis IoT',
                        'Monitoring kesehatan tanaman menggunakan drone',
                        'Analisis data tanah untuk rekomendasi pemupukan',
                        'Aplikasi mobile untuk manajemen panen',
                    ]),
                    'email_dosen' => 'andi.wijaya@polnep.ac.id', // Contoh email dosen penanggung jawab
                    'gambar_coe' => 'images/Jenis_pusat_unggulan/COE-1.jpg',
                ],
                'mata_kuliah' => [
                    'Jaringan Komputer Dasar', 'Basis Data', 'Pemrograman Berorientasi Objek'
                ]
            ],
            [
                'data' => [
                    'judul_coe' => 'Pusat Unggulan Keamanan Siber & Forensik Digital',
                    'deskripsi_utama_coe' => 'Menjadi pusat riset, pelatihan, dan konsultasi di bidang keamanan siber untuk melindungi infrastruktur digital pemerintah daerah dan industri lokal dari ancaman siber.',
                    'poin_poin_unggulan_coe' => json_encode([
                        'Pengembangan sistem deteksi intrusi (IDS)',
                        'Pelatihan kesadaran keamanan siber untuk UMKM',
                        'Layanan analisis malware dan forensik digital',
                    ]),
                    'email_dosen' => 'siti.aminah@polnep.ac.id',
                    'gambar_coe' => 'images/Jenis_pusat_unggulan/COE-2.jpg',
                ],
                'mata_kuliah' => [
                    'Sistem Keamanan Informasi', 'Jaringan Komputer Dasar', 'Algoritma Pemrograman'
                ]
            ],
            [
                'data' => [
                    'judul_coe' => 'Pusat Unggulan Digitalisasi UMKM dan E-Government',
                    'deskripsi_utama_coe' => 'Mendorong transformasi digital pada Usaha Mikro, Kecil, dan Menengah (UMKM) serta layanan pemerintahan di Sukamara melalui pengembangan aplikasi dan platform digital.',
                    'poin_poin_unggulan_coe' => json_encode([
                        'Platform e-commerce untuk produk lokal Sukamara',
                        'Sistem antrian online untuk layanan publik',
                        'Pelatihan pemasaran digital untuk pelaku UMKM',
                    ]),
                    'email_dosen' => 'budi.santoso@polnep.ac.id',
                    'gambar_coe' => 'images/Jenis_pusat_unggulan/COE-3.jpg',
                ],
                'mata_kuliah' => [
                    'Rekayasa Perangkat Lunak', 'Basis Data', 'Pemrograman Terstruktur'
                ]
            ],
            // Anda bisa menambahkan data ke-5 hingga ke-n di sini dengan format yang sama
        ];

        foreach ($coes as $coeData) {
            // Pastikan poin-poin unggulan adalah string JSON
            if (is_array($coeData['data']['poin_poin_unggulan_coe'])) {
                $coeData['data']['poin_poin_unggulan_coe'] = json_encode($coeData['data']['poin_poin_unggulan_coe']);
            }

            $pusatUnggulan = PusatUnggulan::updateOrCreate(
                ['judul_coe' => $coeData['data']['judul_coe']],
                $coeData['data']
            );

            if (!empty($coeData['mata_kuliah'])) {
                $mataKuliahIds = MataKuliah::whereIn('nama_mk', $coeData['mata_kuliah'])->pluck('id');
                $pusatUnggulan->mataKuliahs()->sync($mataKuliahIds);
            }
        }
    }
}
