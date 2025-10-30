<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publikasi;
use App\Models\JurnalProsiding;
use App\Models\Dosen;

class PublikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil ID dari Jurnal/Prosiding dan Dosen yang sudah ada
        $jurnalProsidingIds = JurnalProsiding::pluck('id');
        $dosenIds = Dosen::pluck('id');

        if ($jurnalProsidingIds->isEmpty() || $dosenIds->isEmpty()) {
            $this->command->warn('Tabel jurnal_prosidings atau dosens kosong. Seeder Publikasi tidak dapat dijalankan.');
            return;
        }

        $publikasis = [
            [
                'data' => [
                    'judul_publikasi' => 'Implementasi Algoritma K-Means untuk Segmentasi Pelanggan pada UMKM di Sukamara',
                    'abstrak_publikasi' => 'Penelitian ini bertujuan untuk menerapkan algoritma K-Means clustering untuk mengelompokkan pelanggan UMKM di Kabupaten Sukamara berdasarkan pola pembelian. Hasil segmentasi ini dapat digunakan untuk strategi pemasaran yang lebih tertarget.',
                    'deskripsi_publikasi' => 'Publikasi ini membahas langkah-langkah implementasi, mulai dari pengumpulan data, pra-pemrosesan, hingga evaluasi hasil clustering. Diharapkan dapat menjadi acuan bagi UMKM lokal dalam memanfaatkan data science.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 2,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Analisis Keamanan Jaringan pada Instansi Pemerintah Daerah Menggunakan Metode Penetration Testing',
                    'abstrak_publikasi' => 'Artikel ini menyajikan hasil analisis keamanan jaringan pada salah satu instansi pemerintah di Kabupaten Sukamara menggunakan metode penetration testing. Beberapa kerentanan berhasil diidentifikasi beserta rekomendasi perbaikannya.',
                    'deskripsi_publikasi' => 'Penelitian dilakukan secara etis dan terstruktur, mengikuti tahapan penetration testing standar. Temuan ini menyoroti pentingnya audit keamanan secara berkala untuk melindungi aset digital pemerintah.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 3,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Pengembangan Aplikasi Mobile "Sukamara Agro" untuk Monitoring Pertanian Berbasis IoT',
                    'abstrak_publikasi' => 'Aplikasi mobile "Sukamara Agro" dikembangkan untuk membantu petani memantau kondisi lahan pertanian secara real-time melalui sensor IoT. Aplikasi ini menyediakan data suhu, kelembaban tanah, dan rekomendasi penyiraman.',
                    'deskripsi_publikasi' => 'Publikasi ini menjelaskan arsitektur sistem, desain antarmuka, dan hasil pengujian fungsionalitas aplikasi. Sistem ini berpotensi meningkatkan efisiensi dan hasil panen petani di Sukamara.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 2,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Perancangan User Interface (UI) dan User Experience (UX) untuk Aplikasi Layanan Publik Kabupaten Sukamara',
                    'abstrak_publikasi' => 'Penelitian ini berfokus pada perancangan antarmuka yang intuitif dan ramah pengguna untuk aplikasi layanan publik. Metode yang digunakan adalah Design Thinking untuk memahami kebutuhan pengguna.',
                    'deskripsi_publikasi' => 'Hasil dari penelitian ini adalah prototipe high-fidelity yang telah diuji melalui usability testing, menunjukkan peningkatan signifikan dalam kemudahan penggunaan dibandingkan sistem sebelumnya.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 2,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Studi Komparasi Kinerja Protokol Routing OSPF dan EIGRP pada Jaringan Skala Menengah',
                    'abstrak_publikasi' => 'Artikel ini membandingkan kinerja protokol routing OSPF dan EIGRP dalam hal konvergensi, penggunaan CPU, dan throughput pada topologi jaringan simulasi skala menengah.',
                    'deskripsi_publikasi' => 'Simulasi dilakukan menggunakan GNS3. Hasil menunjukkan bahwa EIGRP memiliki waktu konvergensi yang lebih cepat, namun OSPF lebih unggul dalam skalabilitas pada arsitektur multi-vendor.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 1,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Penerapan Teknik Kriptografi AES-256 untuk Pengamanan Data pada Aplikasi Chatting',
                    'abstrak_publikasi' => 'Publikasi ini membahas implementasi teknik enkripsi Advanced Encryption Standard (AES) dengan panjang kunci 256-bit untuk mengamankan pesan pada aplikasi chatting berbasis Android.',
                    'deskripsi_publikasi' => 'Pengujian menunjukkan bahwa implementasi enkripsi berhasil mengamankan data dari serangan man-in-the-middle tanpa mengorbankan performa aplikasi secara signifikan.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 2,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Sistem Rekomendasi Mata Kuliah Pilihan Menggunakan Metode Collaborative Filtering',
                    'abstrak_publikasi' => 'Sistem ini dirancang untuk membantu mahasiswa dalam memilih mata kuliah pilihan dengan memberikan rekomendasi berdasarkan data historis pengambilan mata kuliah dari angkatan sebelumnya.',
                    'deskripsi_publikasi' => 'Menggunakan algoritma user-based collaborative filtering, sistem ini mampu memberikan rekomendasi yang dipersonalisasi untuk setiap mahasiswa, meningkatkan relevansi pilihan studi.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 3,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Rancang Bangun Sistem Informasi Geografis (SIG) untuk Pemetaan Potensi Wisata di Sukamara',
                    'abstrak_publikasi' => 'Penelitian ini menghasilkan sebuah sistem informasi geografis berbasis web untuk memvisualisasikan dan mengelola data lokasi wisata, akomodasi, dan fasilitas pendukung di Kabupaten Sukamara.',
                    'deskripsi_publikasi' => 'Dibangun menggunakan Leaflet.js dan Laravel, sistem ini diharapkan dapat membantu dinas pariwisata dalam mempromosikan potensi daerah.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 2,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Analisis Sentimen pada Media Sosial Twitter Terhadap Kebijakan Publik Menggunakan Naive Bayes Classifier',
                    'abstrak_publikasi' => 'Studi ini menerapkan algoritma Naive Bayes untuk mengklasifikasikan sentimen (positif, negatif, netral) dari tweet berbahasa Indonesia terkait kebijakan pemerintah daerah.',
                    'deskripsi_publikasi' => 'Hasil analisis sentimen memberikan gambaran umum mengenai opini publik, yang dapat menjadi masukan berharga bagi para pembuat kebijakan.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 2,
            ],
            [
                'data' => [
                    'judul_publikasi' => 'Otomatisasi Pengujian Fungsional Aplikasi Web Menggunakan Selenium WebDriver',
                    'abstrak_publikasi' => 'Artikel ini mendemonstrasikan proses otomatisasi pengujian fungsional pada aplikasi web e-commerce menggunakan Selenium WebDriver dengan bahasa pemrograman Python.',
                    'deskripsi_publikasi' => 'Penerapan otomatisasi terbukti dapat mengurangi waktu pengujian secara signifikan dan meningkatkan cakupan pengujian (test coverage) dibandingkan pengujian manual.',
                    'jurnal_prosiding_id' => $jurnalProsidingIds->random(),
                ],
                'dosen_count' => 1,
            ]
        ];

        foreach ($publikasis as $item) {
            $publikasi = Publikasi::updateOrCreate(
                ['judul_publikasi' => $item['data']['judul_publikasi']],
                $item['data']
            );

            // Attach relasi ke Dosen secara acak
            $publikasi->dosens()->sync($dosenIds->random(min($item['dosen_count'], $dosenIds->count()))->all());
        }
    }
}
