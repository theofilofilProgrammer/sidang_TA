@extends('layouts.isi-riset.jurnal-publikasi')
@section('title-jurnalpublikasi')
Jurnal & Publikasi | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-jurnalpublikasi')
<!-- Hero d-flex berisi button Kembali ke halaman Profil Prodi "Kembali ke halaman Profil Prodi" -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0">Jurnal & Publikasi</h3>
        </div>
    </div>
</section>

<!-- Hero Dosen & Staff (sama menyerupai banner) (Halaman Dosen & Staff) -->
<div class="col-lg-12 px-0">
    <section class="hero-jurnalpublik-section d-flex align-items-center my-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Konten Hero Dosen & Staff -->
                <div class="col-12 text-center">
                    <h1 class="hero-jurnalpublik-title mb-1">Halaman Jurnal & Publikasi</h1>
                    <h4 class="hero-jurnalpublik-subtitle mb-0">Karya Ilmiah Dosen dan Mahasiswa</h4>
                    <h3 class="hero-jurnalpublik-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak<br>di Kabupaten Sukamara</h3>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Bagian content (main kontent)-->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-12">
            <div class="main-content-card main-content-jurnalpublikasi mb-4 p-4 rounded shadow-sm">
                <!-- Main Konten - Platform Publikasi Kami dan jenis-jenis kartu Jurnal & Prosiding Kami -->
                <h3 class="main-content-title col-12 px-0 text-left">Platform Publikasi Kami</h3>
                <hr class="mb-4 mt-1 px-0 col-12">
                <p class="main-content-paragraph text-justify">Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara berkomitmen untuk menyebarkan hasil-hasil riset dan inovasi melalui publikasi ilmiah berkualitas. Kami memiliki beberapa platform jurnal dan prosiding untuk mendukung ekosistem penelitian.<br>
                <br>
                Dosen dan mahasiswa aktif dalam mempublikasikan karya-karya terbaik mereka di jurnal nasional maupun internasional, serta melalui seminar dan konferensi yang kami selenggarakan.
                </p>

                <h3 class="main-content-title col-12 px-0 mt-4 text-left">Jurnal & Prosiding Kami</h3>
                <hr class="mb-4 mt-1 px-0 col-12">
                <div class="row my-5 col-lg-12 px-0 mx-0">
                    <!-- Jenis Kartu Jurnal & Prosiding Kami -->
                    @foreach ($jurnals as $jurnal)
                    <div class="col-12 mb-3 px-0">
                        <div class="jurnal-prosiding-card d-flex align-items-center p-0 rounded shadow-sm">
                            <div class="jurnal-prosiding-content text-justify py-3 px-3">
                                <h4 class="jurnal-prosiding-title mb-2">{{ $jurnal->jenis_judul_jurnal_prosiding }}</h4>
                                <p class="jurnal-prosiding-paragraf mb-2">{{ $jurnal->deskripsi_jurnal_prosiding }}</p>
                                <p class="jurnal-prosiding-issn mb-2">{{ $jurnal->issn }}</p>
                                <p class="jurnal-prosiding-penerbit mb-3">Penerbit : {{ $jurnal->penerbit_jurnal_publikasi }}</p>
                                <div class="d-flex flex-wrap mb-3">
                                    @foreach ($jurnal->mataKuliahs as $matkul)
                                        <span class="badge badge-secondary mr-2 mb-2">{{ $matkul->nama_mk }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ $jurnal->kunjungi_jurnal_dalam_bentuk_url }}" class="btn btn-primary col-3 btn-sm kunjungi-jurnal-btn" target="_blank">Kunjungi Jurnal <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="main-content-card main-content-publikasiTerbaru mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 text-left">Publikasi Terbaru</h3>
                <hr class="col-lg-12 col-md-12 px-0">
                <div class="row justify-content-center">
                    @foreach ($publikasiTerbaru as $publikasi)
                    <div class="col-12 mb-4">
                        <div class="publikasi-card text-justify rounded shadow-sm p-4">
                            <h4 class="publikasi-title mb-2">{{ $publikasi->judul_publikasi }}</h4>
                            <p class="publikasi-penulis text-muted mb-2">Penulis :
                                @foreach ($publikasi->dosens as $dosen)
                                    {{ $dosen->nama_dosen }}@if (!$loop->last),@endif
                                @endforeach
                            </p>
                            <p class="publikasi-jenis font-italic mb-3">Jurnal / Prosiding : {{ $publikasi->jurnalProsiding->jenis_judul_jurnal_prosiding }} ({{ \Carbon\Carbon::parse($publikasi->created_at)->year }}) - {{ $publikasi->jurnalProsiding->tipe_jurnal_prosiding }}</p>
                            <a href="{{ route('desc.jurnalPublikasi', $publikasi->id) }}" class="btn btn-sm btn-outline-success read-morePublikasi-btn mr-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center col-lg-12 px-0 mt-5">
                    <a href="{{ route('semua.publikasi') }}" class="btn_SemuaPublikasi col-lg-12 btn-lg px-5 py-3 d-block rounded">Lihat Semua Publikasi</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
