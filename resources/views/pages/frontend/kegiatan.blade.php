@extends('layouts.kegiatan')
@section('title-kegiatan')
Kegiatan | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection
@section('isi-kegiatan')
<!-- Hero Kegiatan (sama menyerupai banner) (Halaman Berita & Pengumuman) -->
<section class="hero-kegiatan-section d-flex align-items-center mx-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Berita & Pengumuman -->
            <div class="col-12 text-center">
                <h1 class="hero-kegiatan-title mb-1">Halaman Kegiatan</h1>
                <h3 class="hero-kegiatan-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak<br>di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (main kontent)-->
<section class="main-content-section container my-0 py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-12">
            <!-- Pengumuman Terbaru -->
            <div class="news-announcement-header text-center my-4 mx-auto">
                <h1 class="news-announcement-title">Kegiatan Terbaru</h1>
                <hr class="news-announcement-hr my-3 mx-auto">
                <p class="news-announcement-paragraph text-left my-5 mx-auto">Temukan informasi terkini seputar kegiatan akademik, prestasi mahasiswa dan dosen, serta berbagai acara menarik di Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara.</p>
            </div>

            <div class="main-content-card main-content-semuaBerita mb-4 p-4 rounded shadow-sm">
                <!-- Main Konten - Platform Berita Kami dan jenis-jenis kartu Jurnal & Prosiding Kami -->
                <h3 class="main-content-title col-12 px-0 text-left">Daftar Lengkap Kegiatan</h3>
                <hr class="mb-4 mt-1 px-0 col-12">
                <p class="archive-paragraph text-left my-0 col-log-12 mx-auto">Halaman ini berisi arsip lengkap semua Kegiatan yang telah dipublikasikan oleh Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara. Gunakan filter di bawah untuk menemukan informasi yang Anda cari.</p>
                <form class="col-12 py-3" method="GET" action="{{ route('frontend.kegiatan') }}">
                    <div class="row col-lg-12 px-0 align-items-center">
                        <div class="col-md-10 mb-3 mb-md-0 px-0">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control"
                                    placeholder="Cari judul kegiatan, tahun, atau kata kunci..."
                                    aria-label="Cari judul, atau kata kunci..."
                                    value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="search-button">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 pr-0 pl-3">
                            <select name="tahun_kegiatan" class="form-control" onchange="this.form.submit()">
                                <option value="">Semua Tahun</option>
                                @foreach($tahun_options as $tahun)
                                    <option value="{{ $tahun }}" {{ request('tahun_kegiatan') == $tahun ? 'selected' : '' }}>{{ $tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>

                <div class="row">
                    @forelse($kegiatans as $kegiatan)
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="daftar-berita-card text-justify">
                            <img src="{{ $kegiatan->dokumentasi ? asset('storage/' . $kegiatan->dokumentasi) : asset('images/default-image.png') }}" class="card-img-top news-card-image" alt="Gambar Kegiatan">
                            <div class="card-body py-5">
                                <h4 class="daftar-berita-title">{{ $kegiatan->nama_kegiatan }}</h4>
                                <p class="daftar-berita-tanggal"><strong>Tanggal</strong> : {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d F Y') }}</p>
                                <p class="daftar-berita-paragraf">{{ Str::limit($kegiatan->deskripsi_kegiatan, 120) }}</p>
                                <a href="{{ route('frontend.kegiatan.show', $kegiatan->id) }}" class="btn btn-baca-selengkapnya-berita mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">Belum ada data kegiatan.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
