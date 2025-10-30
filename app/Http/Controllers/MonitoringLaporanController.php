<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Pengumuman;
use App\Models\Kegiatan; // Assuming Berita was meant to be Kegiatan based on other controllers
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MonitoringLaporanController extends Controller
{
    public function index()
    {
        // Statistik Dosen berdasarkan jenis dosen (bukan jenis kelamin)
        $dosenJenisDosen = \App\Models\Dosen::select('jenis_dosen', DB::raw('count(*) as jumlah'))
            ->whereNotNull('jenis_dosen')
            ->groupBy('jenis_dosen')
            ->get();
        $totalDosen = $dosenJenisDosen->sum('jumlah');

        $dosenStats = [];
        foreach ($dosenJenisDosen as $data) {
            $percentage = $totalDosen > 0 ? ($data->jumlah / $totalDosen) * 100 : 0;
            $dosenStats[$data->jenis_dosen] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // Untuk chart, kita gunakan jenis kelamin mahasiswa sebagai alternatif untuk dosen
        $dosenJenisKelamin = \App\Models\Mahasiswa::select('jenis_kelamin', DB::raw('count(*) as jumlah'))
            ->whereNotNull('jenis_kelamin')
            ->groupBy('jenis_kelamin')
            ->get();

        // Statistik Mahasiswa berdasarkan angkatan (tahun dibuat)
        $angkatanMahasiswa = \App\Models\Mahasiswa::selectRaw('YEAR(created_at) as angkatan, COUNT(*) as jumlah')
            ->groupBy('angkatan')->orderBy('angkatan')->get();
        $totalMahasiswa = $angkatanMahasiswa->sum('jumlah');
        $mahasiswaStats = [];
        foreach ($angkatanMahasiswa as $data) {
            $percentage = $totalMahasiswa > 0 ? ($data->jumlah / $totalMahasiswa) * 100 : 0;
            $mahasiswaStats[$data->angkatan] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // Statistik Mata Kuliah berdasarkan semester
        $matkulSemester = \App\Models\MataKuliah::select('semester', DB::raw('count(*) as jumlah'))
            ->whereNotNull('semester')
            ->groupBy('semester')
            ->orderBy('semester')
            ->get();
        $totalMatkul = $matkulSemester->sum('jumlah');
        $matkulStats = [];
        foreach ($matkulSemester as $data) {
            $percentage = $totalMatkul > 0 ? ($data->jumlah / $totalMatkul) * 100 : 0;
            $matkulStats["Semester " . $data->semester] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // Individual mata kuliah counts for backward compatibility (berdasarkan keterangan)
        $matkulKeterangan = \App\Models\MataKuliah::selectRaw('keterangan, COUNT(*) as jumlah')
            ->whereNotNull('keterangan')
            ->groupBy('keterangan')->get();
        $matkulWajib = $matkulKeterangan->where('keterangan', 'Wajib')->first()->jumlah ?? 0;
        $matkulPilihan = $matkulKeterangan->where('keterangan', 'Pilihan')->first()->jumlah ?? 0;
        $matkulTidakWajib = $matkulKeterangan->where('keterangan', 'Tidak Wajib')->first()->jumlah ?? 0;

        // Statistik Pengumuman per bulan
        $pengumumanPerBulan = \App\Models\Pengumuman::select(
            DB::raw('MONTH(created_at) as bulan'),
            DB::raw('count(*) as jumlah')
        )
        ->groupBy('bulan')
        ->orderBy('bulan')
        ->get();

        // Statistik Berita per kategori (jika ada model Berita)
        $beritaPerKategori = collect(); // Empty collection if no Berita model
        try {
            if (class_exists('\App\Models\Kegiatan')) { // Changed from Berita to Kegiatan
                $beritaPerKategori = \App\Models\Kegiatan::select('nama_kegiatan as kategori', DB::raw('count(*) as jumlah')) // Using nama_kegiatan as category
                    ->whereNotNull('nama_kegiatan')
                    ->groupBy('nama_kegiatan')
                    ->orderBy('kategori')
                    ->get();
            }
        } catch (\Exception $e) {
            // Model tidak ada, gunakan collection kosong
        }

        // Statistik Kegiatan berdasarkan tahun
        $kegiatanTahun = \App\Models\Kegiatan::selectRaw('YEAR(tanggal_kegiatan) as tahun, COUNT(*) as jumlah')
            ->whereNotNull('tanggal_kegiatan')
            ->groupBy('tahun')->orderBy('tahun')->get();
        $totalKegiatan = $kegiatanTahun->sum('jumlah');
        $kegiatanStats = [];
        foreach ($kegiatanTahun as $data) {
            $percentage = $totalKegiatan > 0 ? ($data->jumlah / $totalKegiatan) * 100 : 0;
            $kegiatanStats[$data->tahun] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // Statistik Jaringan Kerjasama berdasarkan tahun
        $jaringanKerjasamaTahun = \App\Models\JaringanKerjasama::selectRaw('YEAR(created_at) as tahun, COUNT(*) as jumlah')
            ->groupBy('tahun')->orderBy('tahun')->get();
        $totalJaringanKerjasama = $jaringanKerjasamaTahun->sum('jumlah');
        $jaringanKerjasamaStats = [];
        foreach ($jaringanKerjasamaTahun as $data) {
            $percentage = $totalJaringanKerjasama > 0 ? ($data->jumlah / $totalJaringanKerjasama) * 100 : 0;
            $jaringanKerjasamaStats[$data->tahun] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // NEW: Statistik Jaringan Kerjasama berdasarkan jenis kemitraan (PIE CHART)
        $jaringanKerjasamaJenis = \App\Models\JaringanKerjasama::select(
            DB::raw('CASE
                WHEN jenis_kemitraan LIKE "%Magang%" THEN "Magang"
                WHEN jenis_kemitraan LIKE "%Rekrutmen%" THEN "Rekrutmen"
                WHEN jenis_kemitraan LIKE "%Pelatihan%" THEN "Pelatihan"
                WHEN jenis_kemitraan LIKE "%Pengembangan%" THEN "Pengembangan"
                WHEN jenis_kemitraan LIKE "%Sertifikasi%" THEN "Sertifikasi"
                WHEN jenis_kemitraan LIKE "%Kuliah Tamu%" THEN "Kuliah Tamu"
                WHEN jenis_kemitraan LIKE "%Workshop%" THEN "Workshop"
                WHEN jenis_kemitraan LIKE "%Pengabdian%" THEN "Pengabdian"
                ELSE "Lainnya"
            END as jenis_kemitraan'),
            DB::raw('count(*) as jumlah')
        )
        ->whereNotNull('jenis_kemitraan')
        ->groupBy('jenis_kemitraan')
        ->get();
        $totalJaringanKerjasamaJenis = $jaringanKerjasamaJenis->sum('jumlah');
        $jaringanKerjasamaJenisStats = [];
        foreach ($jaringanKerjasamaJenis as $data) {
            $percentage = $totalJaringanKerjasamaJenis > 0 ? ($data->jumlah / $totalJaringanKerjasamaJenis) * 100 : 0;
            $jaringanKerjasamaJenisStats[$data->jenis_kemitraan] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // NEW: Statistik Mahasiswa berdasarkan pola NIM (PIE CHART)
        $mahasiswaNimPatterns = \App\Models\Mahasiswa::selectRaw('
            CASE
                WHEN nim LIKE "320221400%" THEN "320221400 (TI)"
                WHEN nim LIKE "320221401%" THEN "320221401 (SI)"
                WHEN nim LIKE "320221610%" THEN "320221610 (MI)"
                WHEN nim LIKE "320221611%" THEN "320221611 (TK)"
                WHEN nim LIKE "320221612%" THEN "320221612 (RPL)"
                ELSE "Lainnya"
            END as nim_pattern,
            COUNT(*) as jumlah
        ')
        ->whereNotNull('nim')
        ->groupBy('nim_pattern')
        ->get();
        $totalMahasiswaNim = $mahasiswaNimPatterns->sum('jumlah');
        $mahasiswaNimStats = [];
        foreach ($mahasiswaNimPatterns as $data) {
            $percentage = $totalMahasiswaNim > 0 ? ($data->jumlah / $totalMahasiswaNim) * 100 : 0;
            $mahasiswaNimStats[$data->nim_pattern] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // Statistik Saran berdasarkan tahun
        $saranTahun = \App\Models\Saran::selectRaw('YEAR(created_at) as tahun, COUNT(*) as jumlah')
            ->groupBy('tahun')->orderBy('tahun')->get();
        $totalSaran = $saranTahun->sum('jumlah');
        $saranStats = [];
        foreach ($saranTahun as $data) {
            $percentage = $totalSaran > 0 ? ($data->jumlah / $totalSaran) * 100 : 0;
            $saranStats[$data->tahun] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        // NEW: Statistik Saran berdasarkan status (PIE CHART)
        $saranStatus = \App\Models\Saran::select(
            DB::raw('CASE
                WHEN status = "Belum Diproses" THEN "Belum Diproses"
                WHEN status = "Sedang Diproses" THEN "Sedang Diproses"
                WHEN status = "Selesai Diproses" THEN "Selesai Diproses"
                WHEN status = "Ditolak" THEN "Ditolak"
                ELSE "Status Lainnya"
            END as status'),
            DB::raw('count(*) as jumlah')
        )
        ->whereNotNull('status')
        ->groupBy('status')
        ->get();
        $totalSaranStatus = $saranStatus->sum('jumlah');
        $saranStatusStats = [];
        foreach ($saranStatus as $data) {
            $percentage = $totalSaranStatus > 0 ? ($data->jumlah / $totalSaranStatus) * 100 : 0;
            $saranStatusStats[$data->status] = [ 'jumlah' => $data->jumlah, 'persentase' => round($percentage, 2) ];
        }

        return view('pages.backend.monitoring-laporan', compact(
            'dosenJenisKelamin',
            'dosenStats',
            'angkatanMahasiswa',
            'mahasiswaStats',
            'matkulStats',
            'matkulWajib',
            'matkulPilihan',
            'matkulTidakWajib',
            'pengumumanPerBulan',
            'beritaPerKategori',
            'kegiatanStats',
            'kegiatanTahun',
            'jaringanKerjasamaStats',
            'jaringanKerjasamaTahun',
            'jaringanKerjasamaJenis',
            'jaringanKerjasamaJenisStats',
            'mahasiswaNimPatterns',
            'mahasiswaNimStats',
            'saranStats',
            'saranTahun',
            'saranStatus',
            'saranStatusStats'
        ));
    }
}
