@extends('layouts.isi_profilprodi.desc-kerjasama-kemitraan')
@section('title-desc-kerjasama-kemitraan')
{{ $kerjasama->nama_jaringan_kerjasama }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-desc-kerjasama-kemitraan')
    <!-- Hero d-flex berisi button Kembali ke halaman Kerjasama dan tulisan "Industri 1 : TransTRACK" -->
    <section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0 pb-3">
        <div class="container col-12 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/jaringan-kerjasama-kemitraan" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke halaman Kerjasama
                </a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title col-11 ml-4 mb-0">{{ $kerjasama->jenis_kemitraan }} : {{ $kerjasama->nama_jaringan_kerjasama }}</h3>
            </div>
        </div>
    </section>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container py-5 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content Kiri -->
            <div class="col-lg-12">
                <div class="main-content-card main-content-deskripsi-kerjasama mb-4 p-4 rounded shadow-sm">
                    <!-- Main Konten - Deskripsi Kerjasama industri -->
                    <div class="text-center mb-4">
                        <img src="{{ $kerjasama->gambar_perusahaan ? asset('storage/' . $kerjasama->gambar_perusahaan) : asset('images/default-image.png') }}" alt="{{ $kerjasama->nama_jaringan_kerjasama }} Logo" class="img-fluid kerjasama-logo-detail" style="max-width: 30rem;">
                    </div>
                    <h3 class="main-content-title col-12 px-3 text-left">{{ $kerjasama->nama_jaringan_kerjasama }}</h3>
                    <div class="row col-lg-12 mx-auto">
                        <div class="col-12 px-0 text-justify">
                            <p class="main-content-paragraph">
                                @if($kerjasama->pengertian_jaringan_kerjasama)
                                    {!! nl2br(e($kerjasama->pengertian_jaringan_kerjasama)) !!}
                                @else
                                    <em>Deskripsi untuk kerjasama dengan {{ $kerjasama->nama_jaringan_kerjasama }} belum tersedia. Silakan hubungi admin untuk informasi lebih lanjut.</em>
                                @endif
                            </p>

                            @if($kerjasama->jenis_kemitraan)
                            <div class="mt-4">
                                <h5><strong>Jenis Kemitraan:</strong></h5>
                                <p class="main-content-paragraph">{{ $kerjasama->jenis_kemitraan }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
