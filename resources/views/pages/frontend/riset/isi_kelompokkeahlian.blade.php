@extends('layouts.isi-riset.kelompokKeahlian')
@section('title-kelompokKeahlian')
Kelompok Keahlian | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-kelompokKeahlian')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 mb-0">Kelompok Keahlian Riset</h3>
        </div>
    </div>
</section>

<div class="col-lg-12 mx-0 px-0">
    <section class="hero-kelRiset-section d-flex align-items-center my-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="hero-kelRiset-title mb-1">Halaman Kelompok Keahlian Riset</h1>
                    <h3 class="hero-kelRiset-subtitle mb-0">Fokus Penelitian Dosen dan Mahasiswa</h3>
                    <h3 class="hero-kelRiset-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak<br>di Kabupaten Sukamara</h3>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-bidang-unggulan mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 text-left">Bidang Unggulan Kami</h3>
                <hr class="col-lg-12 col-md-12 px-0">
                <p class="main-content-paragraph text-left col-12 px-0 mb-3">Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara memiliki berbagai kelompok keahlian yang menjadi tulang punggung kegiatan riset dan pengembangan ilmu pengetahuan. Setiap kelompok beranggotakan dosen-dosen ahli dan melibatkan mahasiswa dalam berbagai proyek inovatif.</p>
                <p class="main-content-paragraph text-left col-12 px-0">Kolaborasi riset lintas disiplin dan kerja sama dengan industri menjadi fokus utama untuk menghasilkan solusi teknologi yang relevan dan berdampak positif bagi masyarakat.</p>

                <div class="row my-5 col-lg-12 px-0 mx-0">
                    @foreach($bidangUnggulans as $bidangUnggulan)
                    <div class="col-12 mb-3 px-0">
                        <div class="bidang-unggulan-card d-flex align-items-center p-0 rounded shadow-sm">
                            <div class="bidang-unggulan-img mr-3 py-0">
                                @if($bidangUnggulan->gambar_bidang_unggulan)
                                    <img src="{{ asset('storage/' . $bidangUnggulan->gambar_bidang_unggulan) }}" alt="{{ $bidangUnggulan->nama_bidang_unggulan }}" class="foto-bidang-unggulan">
                                @else
                                    <img src="{{ asset('images/placeholder.jpg') }}" alt="Gambar default" class="foto-bidang-unggulan">
                                @endif
                            </div>
                            <div class="bidang-unggulan-content text-justify py-3 px-3">
                                <h5 class="bidang-unggulan-title mb-1">{{ $bidangUnggulan->nama_bidang_unggulan }}</h5>
                                <p class="bidang-unggulan-snippet mb-1">Fokus : {{ $bidangUnggulan->fokus_bidang }}</p>
                                <p class="bidang-unggulan-snippet font-italic mb-1">Anggota :
                                    @foreach($bidangUnggulan->dosens as $dosen)
                                        {{ $dosen->nama_dosen }}{{ !$loop->last ? ', ' : '' }}
                                    @endforeach
                                </p>
                                <div class="col-lg-12 px-0 pt-5 d-flex justify-content-end">
                                    <a href="{{ route('frontend.bidangunggulan.show', $bidangUnggulan->id) }}" class="btn btn-md btn-outline-primary pelajarilebih-lanjut">Pelajari Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
