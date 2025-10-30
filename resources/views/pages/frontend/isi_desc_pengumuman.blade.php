@extends('layouts.desc_pengumuman')
@section('title-deskripsi-pengumuman')
{{ $pengumuman->judul_pengumuman }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection
@section('desc-isi-pengumuman')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('frontend.pengumuman') }}" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                <i class="fas fa-arrow-left mr-3"></i> Kembali ke Halaman Pengumuman</a>
        </div>
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title ml-4 mb-0">Pengumuman : {{ $pengumuman->judul_pengumuman }}</h3>
        </div>
    </div>
</section>

<section class="main-content-section container my-0 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-deskripsi-news mb-4 p-4 rounded shadow-sm">
                <img src="{{ $pengumuman->dokumentasi ? asset('storage/' . $pengumuman->dokumentasi) : asset('images/default-image.png') }}" class="col-lg-12 hero-desc-news-section rounded px-0 container" alt="{{ $pengumuman->judul_pengumuman }}">
                <p class="main-content-paragraph text-justify col-12 px-0 py-2">
                    <strong>{{ \Carbon\Carbon::parse($pengumuman->tanggal_pengumuman)->format('d F Y') }} -</strong>
                    {{ $pengumuman->isi_pengumuman }}
                </p>
                @if($pengumuman->dokumen)
                <a href="{{ asset('storage/' . $pengumuman->dokumen) }}" target="_blank" class="btn btn-info mt-3">
                    <i class="fas fa-file-pdf mr-2"></i>Unduh Dokumen
                </a>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
