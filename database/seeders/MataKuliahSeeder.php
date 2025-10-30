<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB Facade
use App\Models\MataKuliah; // Pastikan Anda sudah membuat model Mata Kuliah

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataKuliahsData = [
            [
                'kode_mk' => 'TI106',
                'nama_mk' => 'Pendidikan Pancasila',
                'semester' => 1,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI105',
                'nama_mk' => 'Matematika',
                'semester' => 1,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI109',
                'nama_mk' => 'Pengantar Teknologi Informasi',
                'semester' => 1,
                'sks_teori' => 2,
                'sks_praktik' => 2,
                'jumlah_sks' => 4,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI103',
                'nama_mk' => 'Pemrograman Terstruktur',
                'semester' => 1,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI104',
                'nama_mk' => 'Praktikum Pemrograman Terstruktur',
                'semester' => 1,
                'sks_teori' => 0,
                'sks_praktik' => 3,
                'jumlah_sks' => 3,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI107',
                'nama_mk' => 'Paket Program Terapan',
                'semester' => 1,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI108',
                'nama_mk' => 'Praktikum Paket Program Terapan',
                'semester' => 1,
                'sks_teori' => 0,
                'sks_praktik' => 2,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI101',
                'nama_mk' => 'Algoritma Pemrograman',
                'semester' => 1,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI102',
                'nama_mk' => 'Praktikum Algoritma Pemrograman',
                'semester' => 1,
                'sks_teori' => 0,
                'sks_praktik' => 3,
                'jumlah_sks' => 3,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI201',
                'nama_mk' => 'Struktur Data',
                'semester' => 2,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI202',
                'nama_mk' => 'Praktikum Struktur Data',
                'semester' => 2,
                'sks_teori' => 0,
                'sks_praktik' => 3,
                'jumlah_sks' => 3,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI205',
                'nama_mk' => 'Arsitektur Komputer',
                'semester' => 2,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI203',
                'nama_mk' => 'Pemrograman Berorientasi Objek',
                'semester' => 2,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI204',
                'nama_mk' => 'Praktikum Pemrograman Berorientasi Objek',
                'semester' => 2,
                'sks_teori' => 0,
                'sks_praktik' => 2,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI206',
                'nama_mk' => 'Basis Data',
                'semester' => 2,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI207',
                'nama_mk' => 'Praktikum Basis Data',
                'semester' => 2,
                'sks_teori' => 0,
                'sks_praktik' => 3,
                'jumlah_sks' => 3,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI505',
                'nama_mk' => 'Rekayasa Perangkat Lunak',
                'semester' => 5,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI403',
                'nama_mk' => 'Jaringan Komputer Dasar',
                'semester' => 4,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI404',
                'nama_mk' => 'Praktikum Jaringan Komputer Dasar',
                'semester' => 4,
                'sks_teori' => 0,
                'sks_praktik' => 3,
                'jumlah_sks' => 3,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI603',
                'nama_mk' => 'Sistem Keamanan Informasi',
                'semester' => 6,
                'sks_teori' => 2,
                'sks_praktik' => 0,
                'jumlah_sks' => 2,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_mk' => 'TI604',
                'nama_mk' => 'Praktikum Sistem Keamanan Informasi',
                'semester' => 6,
                'sks_teori' => 0,
                'sks_praktik' => 3,
                'jumlah_sks' => 3,
                'keterangan' => 'Wajib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Memasukkan data ke dalam tabel mata_kuliahs
        // Menggunakan updateOrCreate untuk menghindari duplikasi berdasarkan kode_mk
        foreach ($mataKuliahsData as $mk) {
            // MataKuliah::updateOrCreate(
            //     // ['kode_mk' => $data['kode_mk']], // Kriteria untuk mencari data yang sudah ada
            //     // $data // Data yang akan diupdate atau dibuat
            // );
            MataKuliah::updateOrCreate(
                ['nama_mk' => $mk['nama_mk']],
                $mk
            );
        }
    }
}
