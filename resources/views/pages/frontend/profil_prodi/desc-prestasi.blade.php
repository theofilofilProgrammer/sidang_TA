@extends('layouts.isi_profilprodi.desc-prestasi')
@section('title-desc-prestasi')
{{ $prestasi->judul_prestasi_penghargaan }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-desc-prestasi')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 px-0 text-left">
            <h3 class="hero-breadcrumb-title mb-0">Prestasi & Penghargaan : {{ $prestasi->judul_prestasi_penghargaan }}</h3>
        </div>
    </div>
</section>

<section class="hero-penghargaan-section d-flex align-items-center col-lg-12" style="font-family: 'Times New Roman', Times, serif;  position: relative;  height: 600px; background-image: url({{ asset('storage/' . $prestasi->dokumentasi) }}); background-size: cover; background-position: center; background-attachment: fixed; color: white;" alt="{{ $prestasi->judul_prestasi_penghargaan }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="hero-akretPrestasi-title mb-1">{{ $prestasi->judul_prestasi_penghargaan }}</h1>
                <h3 class="hero-akretPrestasi-subtitle mb-0">Program Studi D3 Teknologi Informasi<br>PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-deskripsi-prestasi mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-3 text-left">{{ $prestasi->judul_prestasi_penghargaan }}</h3>
                <div class="mb-4 text-left col-12">
                    <span class="badge badge-success kategori-prestasi">{{ $prestasi->kategori_prestasi_penghargaan }}</span>
                    <p class="small mb-1" style="color: var(--kartu2sm);">Tahun : {{ $prestasi->tahun_prestasi_penghargaan }}</p>
                    <p class="small" style="color: var(--kartu2sm);">Tanggal : {{ $prestasi->created_at->isoFormat('DD MMMM Y') }}</p>
                </div>

                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph">{{ $prestasi->deskripsi_prestasi_penghargaan }}</p>

                        <div class="text-center mt-5">
                            <a href="{{ route('prestasi.frontend.index') }}" class="btn btn-kembali-prestasi d-flex align-items-center justify-content-center">
                                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar Prestasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
