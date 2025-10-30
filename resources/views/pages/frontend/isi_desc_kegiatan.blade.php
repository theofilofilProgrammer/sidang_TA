@extends('layouts.desc_kegiatan')
@section('title-deskripsi-kegiatan')
{{ $kegiatan->nama_kegiatan }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection
@section('desc-isi-kegiatan')
<!-- Hero d-flex berisi button Kembali ke halaman Profil Prodi "Kembali ke halaman Profil Prodi" -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('frontend.kegiatan') }}" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                <i class="fas fa-arrow-left mr-3"></i> Kembali ke Halaman Kegiatan</a>
        </div>
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title ml-4 mb-0">Kegiatan : {{ $kegiatan->nama_kegiatan }}</h3>
        </div>
    </div>
</section>

<!-- Bagian content (main kontent)-->
<section class="main-content-section container my-0 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-12">
            <!-- Konten Deskripsi Berita -->
            <div class="main-content-card main-content-deskripsi-news mb-4 p-4 rounded shadow-sm">
                <!-- Hero Deskripsi news (sama menyerupai banner) (Halaman Dosen & Staff) -->
                <img src="{{ $kegiatan->dokumentasi ? asset('storage/' . $kegiatan->dokumentasi) : asset('images/default-image.png') }}" class="col-lg-12 hero-desc-news-section rounded rounded px-0 container" alt="{{ $kegiatan->nama_kegiatan }}">
                <p class="main-content-paragraph text-justify py-2 col-lg-12 px-0">
                    <strong>{{ $kegiatan->tempat ?? 'Pontianak' }}, {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d F Y') }} -</strong>
                    {{ $kegiatan->deskripsi_kegiatan }}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
