<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JaringanKerjasama;

class JaringanKerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partnerships = [
            // Data dari seeder yang sudah ada
            // [
            //     'nama_jaringan_kerjasama' => 'TransTRACK',
            //     'jenis_kemitraan' => 'Industri',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasama' => 'TransTRACK adalah perusahaan teknologi yang bergerak di bidang sistem tracking dan monitoring. Kerjasama ini meliputi program magang mahasiswa, pengembangan proyek bersama, dan penyediaan teknologi terkini untuk mendukung pembelajaran di Program Studi D3 Teknologi Informasi.',
            // ],
            // [
            //     'nama_jaringan_kerjasama' => 'Biofarma',
            //     'jenis_kemitraan' => 'Industri',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasama' => 'PT Bio Farma (Persero) adalah perusahaan farmasi milik negara yang bergerak dalam bidang vaksin dan produk biologi. Kerjasama meliputi pengembangan sistem informasi kesehatan dan pelatihan teknologi untuk mahasiswa.',
            // ],
            // [
            //     'nama_jaringan_kerjasama' => 'Telkom Indonesia',
            //     'jenis_kemitraan' => 'Industri',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasama' => 'PT Telkom Indonesia adalah perusahaan telekomunikasi terbesar di Indonesia. Kerjasama mencakup program sertifikasi, magang, dan pengembangan infrastruktur teknologi informasi.',
            // ],
            // [
            //     'nama_jaringan_kerjasama' => 'Telkom University',
            //     'jenis_kemitraan' => 'Pendidikan',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasama' => 'Telkom University adalah universitas swasta yang fokus pada teknologi dan bisnis. Kerjasama meliputi pertukaran mahasiswa, penelitian kolaboratif, dan pengembangan kurikulum berbasis industri.',
            // ],
            // [
            //     'nama_jaringan_kerjasama' => 'Institut Teknologi Bandung',
            //     'jenis_kemitraan' => 'Pendidikan',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasamas' => 'ITB adalah institusi pendidikan tinggi teknik terkemuka di Indonesia. Kerjasama mencakup program transfer kredit, penelitian bersama, dan pengembangan sumber daya manusia.',
            // ],
            // [
            //     'nama_jaringan_kerjasama' => 'BRIN',
            //     'jenis_kemitraan' => 'Pemerintah & Lembaga',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasama' => 'Badan Riset dan Inovasi Nasional (BRIN) adalah lembaga pemerintah yang mengelola riset dan inovasi nasional. Kerjasama meliputi program penelitian, pengembangan teknologi, dan pelatihan riset untuk mahasiswa dan dosen.',
            // ],
            // [
            //     'nama_jaringan_kerjasama' => 'KOMINFO',
            //     'jenis_kemitraan' => 'Pemerintah & Lembaga',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasama' => 'Kementerian Komunikasi dan Informatika adalah kementerian yang mengatur bidang komunikasi dan informatika di Indonesia. Kerjasama mencakup program sertifikasi digital, pelatihan keamanan siber, dan pengembangan aplikasi e-government.',
            // ],
            // [
            //     'nama_jaringan_kerjasama' => 'Cyberlympics',
            //     'jenis_kemitraan' => 'Komunitas & Asosiasi',
            //     'gambar_perusahaan' => null,
            //     'pengertian_jaringan_kerjasama' => 'Cyberlympics adalah komunitas yang fokus pada kompetisi keamanan siber dan teknologi informasi. Kerjasama meliputi pelatihan cybersecurity, kompetisi programming, dan workshop teknologi terkini.',
            // ],

            // Data baru dari query INSERT INTO
            [
                'nama_jaringan_kerjasama' => 'Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Sukamara',
                'jenis_kemitraan' => 'Magang Mahasiswa, Penelitian Bersama',
                'gambar_perusahaan' => 'images/partners/diskominfo_sukamara.png',
                'pengertian_jaringan_kerjasama' => 'Kerjasama dalam bidang pengembangan sistem informasi pemerintah daerah dan keamanan siber.',
            ],
            [
                'nama_jaringan_kerjasama' => 'PT. Telkom Indonesia, Tbk',
                'jenis_kemitraan' => 'Rekrutmen Lulusan, Kuliah Tamu',
                'gambar_perusahaan' => 'images/partners/telkom.png',
                'pengertian_jaringan_kerjasama' => 'Kemitraan strategis untuk penyediaan infrastruktur telekomunikasi dan pengembangan talenta digital.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Microsoft Indonesia',
                'jenis_kemitraan' => 'Sertifikasi Profesional, Pengembangan Kurikulum',
                'gambar_perusahaan' => 'images/partners/microsoft.png',
                'pengertian_jaringan_kerjasama' => 'Program kerjasama untuk sertifikasi keahlian Microsoft (Azure, Office 365) bagi mahasiswa dan dosen.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Oracle Academy',
                'jenis_kemitraan' => 'Pelatihan dan Sertifikasi',
                'gambar_perusahaan' => 'images/partners/oracle.png',
                'pengertian_jaringan_kerjasama' => 'Akses gratis ke materi pembelajaran, kurikulum, dan software Oracle untuk keperluan edukasi, khususnya database dan Java.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Cisco Networking Academy',
                'jenis_kemitraan' => 'Pelatihan dan Sertifikasi',
                'gambar_perusahaan' => 'images/partners/cisco.png',
                'pengertian_jaringan_kerjasama' => 'Program untuk mempelajari dasar-dasar jaringan komputer dan persiapan sertifikasi CCNA.',
            ],
            [
                'nama_jaringan_kerjasama' => 'PT. GoTo Gojek Tokopedia Tbk',
                'jenis_kemitraan' => 'Magang Mahasiswa (MBKM)',
                'gambar_perusahaan' => 'images/partners/goto.png',
                'pengertian_jaringan_kerjasama' => 'Kesempatan magang bagi mahasiswa di bidang pengembangan perangkat lunak, data science, dan produk digital.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Bank Pembangunan Daerah Kalimantan Tengah',
                'jenis_kemitraan' => 'Pengembangan Aplikasi, Magang',
                'gambar_perusahaan' => 'images/partners/bank_kalteng.png',
                'pengertian_jaringan_kerjasama' => 'Kerjasama dalam digitalisasi layanan perbankan dan program magang di divisi IT.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Badan Siber dan Sandi Negara (BSSN)',
                'jenis_kemitraan' => 'Workshop Keamanan Siber',
                'gambar_perusahaan' => 'images/partners/bssn.png',
                'pengertian_jaringan_kerjasama' => 'Edukasi dan workshop mengenai kesadaran keamanan siber.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Asosiasi Pendidikan Tinggi Informatika dan Komputer (APTIKOM)',
                'jenis_kemitraan' => 'Pengembangan Kurikulum, Seminar',
                'gambar_perusahaan' => 'images/partners/aptikom.png',
                'pengertian_jaringan_kerjasama' => 'Keanggotaan asosiasi untuk sinkronisasi kurikulum dengan standar nasional.',
            ],
            [
                'nama_jaringan_kerjasama' => 'PT. Traveloka Indonesia',
                'jenis_kemitraan' => 'Rekrutmen Lulusan',
                'gambar_perusahaan' => 'images/partners/traveloka.png',
                'pengertian_jaringan_kerjasama' => 'Penyaluran lulusan terbaik untuk berkarir di industri teknologi pariwisata.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Bukalapak',
                'jenis_kemitraan' => 'Kuliah Tamu, Magang',
                'gambar_perusahaan' => 'images/partners/bukalapak.png',
                'pengertian_jaringan_kerjasama' => 'Berbagi pengetahuan dari praktisi industri e-commerce dan kesempatan magang.',
            ],
            [
                'nama_jaringan_kerjasama' => 'Dinas Pendidikan dan Kebudayaan Kabupaten Sukamara',
                'jenis_kemitraan' => 'Pengabdian Masyarakat',
                'gambar_perusahaan' => 'images/partners/dikbud_sukamara.png',
                'pengertian_jaringan_kerjasama' => 'Program pengabdian masyarakat oleh mahasiswa dan dosen untuk digitalisasi sekolah.',
            ],
        ];

        foreach ($partnerships as $partnership) {
            JaringanKerjasama::create($partnership);
        }
    }
}
