@extends('layouts.isi-riset.kelompokKeahlian')
@section('title-kelompokKeahlian')
{{ $bidangUnggulan->nama_bidang_unggulan }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-kelompokKeahlian')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('frontend.kelompokkeahlian.index') }}" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                <i class="fas fa-arrow-left mr-3"></i> Kembali ke Kelompok Keahlian
            </a>
        </div>
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title ml-4 mb-0">{{ $bidangUnggulan->nama_bidang_unggulan }}</h3>
        </div>
    </div>
</section>

<div class="col-lg-12 px-0">
    <section class="hero-desc-bidang-section ounded d-flex align-items-center my-0">
        @if($bidangUnggulan->gambar_bidang_unggulan)
            <img src="{{ asset('storage/' . $bidangUnggulan->gambar_bidang_unggulan) }}" class="col-lg-12 rounded px-0 container" alt="{{ $bidangUnggulan->nama_bidang_unggulan }}">
        @else
            <img src="{{ asset('images/placeholder.jpg') }}" class="col-lg-12 rounded px-0 container" alt="Gambar default">
        @endif
    </section>
</div>

<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-deskripsi-bidang-unggulan mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 text-left">{{ $bidangUnggulan->nama_bidang_unggulan }} dapat memfokuskan :</h3>
                <hr class="col-lg-12 col-md-12 px-0">
                <p class="main-content-paragraph text-justify col-lg-12 px-0">{{ $bidangUnggulan->fokus_bidang }}</p>

                <h3 class="main-content-title col-12 px-0 text-left">Deskripsi Kelompok Keahlian :</h3>
                <hr class="col-lg-12 col-md-12 px-0">
                <p class="main-content-paragraph text-justify col-lg-12 px-0">{!! nl2br(e($bidangUnggulan->deskripsi_lengkap_bidang)) !!}</p>

                <h3 class="main-content-title col-12 px-0 text-left">Mata Kuliah yang Relevan (terkait dengan Bidang keunggulan) :</h3>
                <hr class="col-lg-12 col-md-12 px-0">
                <div class="d-flex flex-wrap col-lg-12 px-0 mb-4">
                    @foreach($bidangUnggulan->mataKuliahs as $matakuliah)
                        <span class="badge badge-primary mr-2 mb-2">{{ $matakuliah->nama_mk }}</span>
                    @endforeach
                </div>

                <h3 class="main-content-title col-12 px-0 text-left">Anggota Tim :</h3>
                <hr class="col-lg-12 col-md-12 px-0">
                <ul class="unggulan-list text-left col-lg-12">
                    @foreach($bidangUnggulan->dosens as $dosen)
                        <li>{{ $dosen->nama_dosen }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
