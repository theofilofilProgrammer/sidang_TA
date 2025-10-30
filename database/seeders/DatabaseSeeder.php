<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Level 1: Seeder tanpa dependensi eksternal
            // UserSeeder::class, // Jika Anda membuat UserSeeder
            DosenSeeder::class,
            MataKuliahSeeder::class,
            MahasiswaSeeder::class,
            KegiatanSeeder::class,
            PengumumanSeeder::class,
            PrestasiPenghargaanSeeder::class,
            JaringanKerjasamaSeeder::class,

            // Level 2: Seeder dengan dependensi ke Level 1
            JurnalProsidingSeeder::class,       // Bergantung pada MataKuliahSeeder
            BidangUnggulanSeeder::class,        // Bergantung pada DosenSeeder, MataKuliahSeeder
            PusatUnggulanSeeder::class,         // Bergantung pada MataKuliahSeeder
            DasarHukumSeeder::class,            // Bergantung pada DosenSeeder, MataKuliahSeeder
            ProgramLearningOutcomeSeeder::class,// Bergantung pada MataKuliahSeeder

            // Level 3: Seeder dengan dependensi ke Level 2
            PublikasiSeeder::class,             // Bergantung pada DosenSeeder, JurnalProsidingSeeder
        ]);
    }
}
