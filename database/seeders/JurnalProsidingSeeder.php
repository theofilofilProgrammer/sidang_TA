<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JurnalProsiding;
use App\Models\MataKuliah;

class JurnalProsidingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil beberapa ID Mata Kuliah untuk dihubungkan
        $mataKuliahIds = MataKuliah::pluck('id');

        $jurnals = [
            [
                'data' => [
                    'jenis_judul_jurnal_prosiding' => 'Jurnal Sistem Teknologi Informasi (JITS)',
                    'tipe_jurnal_prosiding' => 'Jurnal',
                    'deskripsi_jurnal_prosiding' => 'Jurnal ini mempublikasikan artikel-artikel orisinal di bidang teknologi informasi, mencakup sistem informasi, rekayasa perangkat lunak, basis data, dan kecerdasan buatan.',
                    'tahun_jurnal_prosiding' => 2023,
                    'issn' => 'P-ISSN: 2302-333X | E-ISSN: 2580-8553',
                    'penerbit_jurnal_publikasi' => 'PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara',
                    'kunjungi_jurnal_dalam_bentuk_url' => 'https://jits.polnep.ac.id/',
                ],
                'matkul_count' => 5,
            ],
            [
                'data' => [
                    'jenis_judul_jurnal_prosiding' => 'Jurnal Jaringan dan Keamanan Komputer (JCNS)',
                    'tipe_jurnal_prosiding' => 'Jurnal',
                    'deskripsi_jurnal_prosiding' => 'JCNS berfokus pada penelitian dan pengembangan di bidang jaringan komputer, keamanan siber, dan komputasi awan. Menerima artikel teori dan aplikasi.',
                    'tahun_jurnal_prosiding' => 2022,
                    'issn' => 'P-ISSN: 2548-5728 | E-ISSN: 2548-5736',
                    'penerbit_jurnal_publikasi' => 'PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara',
                    'kunjungi_jurnal_dalam_bentuk_url' => 'https://jcns.polnep.ac.id/',
                ],
                'matkul_count' => 4,
            ],
            [
                'data' => [
                    'jenis_judul_jurnal_prosiding' => 'Prosiding Seminar Nasional Teknologi Informasi (SeNaTI)',
                    'tipe_jurnal_prosiding' => 'Prosiding',
                    'deskripsi_jurnal_prosiding' => 'Kumpulan makalah dari seminar nasional tahunan yang diselenggarakan oleh Program Studi D3 Teknologi Informasi PSDKU Polnep Sukamara.',
                    'tahun_jurnal_prosiding' => 2024,
                    'issn' => 'E-ISSN: 2622-9986',
                    'penerbit_jurnal_publikasi' => 'PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara',
                    'kunjungi_jurnal_dalam_bentuk_url' => 'https://senati.polnep.ac.id/2024',
                ],
                'matkul_count' => 8,
            ],
            // Anda bisa menambahkan data lain di sini
        ];

        if ($mataKuliahIds->isEmpty()) {
            $this->command->warn('Tabel mata_kuliahs kosong. Tidak ada relasi yang akan dibuat untuk jurnal/prosiding.');
            foreach ($jurnals as $item) {
                JurnalProsiding::updateOrCreate(
                    ['jenis_judul_jurnal_prosiding' => $item['data']['jenis_judul_jurnal_prosiding']],
                    $item['data']
                );
            }
        } else {
            foreach ($jurnals as $item) {
                $jurnal = JurnalProsiding::updateOrCreate(
                    ['jenis_judul_jurnal_prosiding' => $item['data']['jenis_judul_jurnal_prosiding']],
                    $item['data']
                );

                // Attach relasi ke Mata Kuliah secara acak
                $jurnal->mataKuliahs()->sync($mataKuliahIds->random(min($item['matkul_count'], $mataKuliahIds->count()))->all());
            }
        }
    }
}
