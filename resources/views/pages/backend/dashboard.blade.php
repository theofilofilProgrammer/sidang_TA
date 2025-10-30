@extends('layouts.admin')
@section('title')
Home-Admin | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection
@section('content')
<div class="content-wrapper content-wrapper col-lg-11 mx-4">
    <section class="homepage-section container col-lg-11 d-flex flex-column py-5 px-3 mx-0 my-5">
        <!-- Teks Selamat Datang, admin dan Waktu (hh:mm:ss) -->
        <div class="welcome-section text-justify container px-0 mx-0 col-lg-12 mb-5">
            <h2 class="welcome-text">SELAMAT DATANG, {{ auth()->user()->name }}</h2>
            <p class="current-time" id="currentTime">12:00:00</p>
        </div>

        <!-- konten Statistik Singkat -->
        <h3 class="section-title mx-0 px-0 col-lg-12">STATISTIK SINGKAT :</h3>
        <div class="short-stats-section container mx-0 py-5 px-5 col-lg-12 mb-5">
            <div class="stats-grid d-flex justify-content-between">
                <div class="stat-card bg-color-blue">
                    <i class="fas fa-user stat-icon"></i>
                    <p class="stat-label">TOTAL MAHASISWA</p>
                    <p class="stat-value">{{ $totalMahasiswa }}</p>
                </div>
                <div class="stat-card bg-color-green">
                    <i class="fas fa-graduation-cap stat-icon"></i>
                    <p class="stat-label">TOTAL DOSEN</p>
                    <p class="stat-value">{{ $totalDosen }}</p>
                </div>
                <div class="stat-card bg-color-pink">
                    <i class="fas fa-list stat-icon"></i>
                    <p class="stat-label">TOTAL MATA KULIAH</p>
                    <p class="stat-value">{{ $totalMatakuliah }}</p>
                </div>
            </div>
            <div class="stat-card stat-card-full-width py-5 my-3 bg-color-purple">
                <div class="col-10 d-flex align-items-center">
                    <i class="fas fa-envelope stat-icon"></i>
                    <p class="stat-label my-0"> PENGUMUMAN TERBARU</p>
                </div>
                <p class="stat-value">3</p>
            </div>
        </div>

        <!-- konten pengumuman -->
        <h3 class="section-title mx-0 px-0 col-lg-12">PENGUMUMAN :</h3>
        <div class="announcement-section container container mx-0 py-5 px-5 col-lg-12 mb-5">
            <div class="announcement-cards-wrapper py-3">
                @foreach($pengumuman as $item)
                <div class="card announcement-card">
                    @if($item->dokumentasi)
                        <img src="{{ asset('storage/' . $item->dokumentasi) }}" class="card-img-top" alt="{{ $item->judul_pengumuman }}">
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->judul_pengumuman }}</h5>
                        <p class="card-subtitle mb-2 text-muted">{{ optional($item->tanggal_pengumuman)->format('d M Y') }}</p>
                        <p class="card-text">{{ Str::limit($item->isi_pengumuman, 120) }}</p>
                        <a href="{{ route('pengumuman.show', $item->id) }}" class="card-link">Lihat Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- konten Berita -->
        <h3 class="section-title mx-0 px-0 col-lg-12">Kegiatan :</h3>
        <div class="news-section container mx-0 py-5 px-5 col-lg-12 mb-5">
            <div class="news-cards-wrapper">
                @foreach($kegiatan as $item)
                <div class="card news-card">
                    @if($item->dokumentasi)
                        <img src="{{ asset('storage/' . $item->dokumentasi) }}" class="card-img-top" alt="{{ $item->nama_kegiatan }}">
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->nama_kegiatan }}</h5>
                        <p class="card-subtitle mb-2 text-muted">{{ optional($item->tanggal_kegiatan)->format('d M Y') }}</p>
                        <p class="card-text">{{ Str::limit($item->deskripsi_kegiatan, 120) }}</p>
                        <a href="{{ route('kegiatan.show', $item->id) }}" class="card-link">Lihat Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@endsection
