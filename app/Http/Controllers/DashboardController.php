<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kegiatan;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalDosen = Dosen::count();
        $totalMatakuliah = MataKuliah::count();
        $pengumuman = Pengumuman::latest()->take(6)->get();
        $kegiatan = Kegiatan::latest()->take(6)->get();

        return view('pages.backend.dashboard', compact(
            'totalMahasiswa',
            'totalDosen',
            'totalMatakuliah',
            'pengumuman',
            'kegiatan'
        ));
    }

    public function laporan()
    {
        // Statistik Dosen
        $totalDosen = Dosen::count();

        // Statistik Mahasiswa
        $angkatanMahasiswa = Mahasiswa::selectRaw('SUBSTRING(nim, 1, 4) as angkatan, count(*) as jumlah')
                                    ->groupBy('angkatan')
                                    ->orderBy('angkatan', 'desc')
                                    ->get();

        // Statistik Mata Kuliah
        $matkulWajib = MataKuliah::where('keterangan', 'Wajib')->count();
        $matkulPilihan = MataKuliah::where('keterangan', 'Pilihan')->count();
        $matkulTidakWajib = MataKuliah::where('keterangan', 'Tidak Wajib')->count();

        // Statistik Pengumuman
        $pengumumanPerBulan = Pengumuman::selectRaw('MONTH(tanggal_pengumuman) as bulan, count(*) as jumlah')
                                        ->groupBy('bulan')
                                        ->orderBy('bulan')
                                        ->get();

        // Statistik Kegiatan
        $kegiatanPerBulan = Kegiatan::selectRaw('MONTH(tanggal_kegiatan) as bulan, count(*) as jumlah')
                                    ->groupBy('bulan')
                                    ->orderBy('bulan')
                                    ->get();

        return view('pages.backend.monitoring-laporan', compact(
            'totalDosen',
            'angkatanMahasiswa',
            'matkulWajib',
            'matkulPilihan',
            'matkulTidakWajib',
            'pengumumanPerBulan',
            'kegiatanPerBulan'
        ));
    }
}
