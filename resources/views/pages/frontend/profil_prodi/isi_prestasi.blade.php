@extends('layouts.isi_profilprodi.prestasi')
@section('title-prestasi')
Akreditasi & Prestasi Penghargaan | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-prestasi')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 px-0 mb-0">Akreditasi & Prestasi Penghargaan</h3>
        </div>
    </div>
</section>

<div class="col-lg-12 px-0">
    <section class="hero-akretPrestasi-section d-flex align-items-center px-0 my-0 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="hero-akretPrestasi-title mb-1">Akreditasi & Prestasi Penghargaan</h1>
                    <h3 class="hero-akretPrestasi-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU</h3>
                    <h3 class="hero-akretPrestasi-subtitle mb-0">Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-akreditasi mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 text-center">Akreditasi Program Studi</h3>
                <div class="row konten-akred m-5 col-lg-11 mx-auto rounded shadow-sm">
                    <div class="col-12 p-5">
                        <img src="{{ asset('images/sertifikat-akreditasi.jpg') }}" alt="Sertifikat Akreditasi" class="img-fluid akreditasi-img mb-4">
                        <p class="akreditasi-text text-justify">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara memiliki status akreditasi <strong>"Baik Sekali"</strong> berdasarkan keputusan Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT).</p>
                        <ul class="list-unstyled akreditasi-list">
                            <li><i class="fas fa-check-circle mr-2 text-success"></i> Nomor SK: 001/SK/BAN-PT/Akred/D3/VI/2025</li>
                            <li><i class="fas fa-check-circle mr-2 text-success"></i> Tanggal SK: 15 Juni 2025</li>
                            <li><i class="fas fa-check-circle mr-2 text-success"></i> Berlaku Hingga: 15 Juni 2030</li>
                        </ul>
                        <p class="akreditasi-text text-justify mb-4">Kami terus berkomitmen untuk mempertahankan dan meningkatkan kualitas pendidikan demi mencapai akreditasi Unggul dan memberikan yang terbaik bagi mahasiswa dan masyarakat.</p>
                        <a href="#" class="btn btn-unduh-sertifikat col-lg-12 d-flex align-items-center justify-content-center">
                            <i class="fas fa-download mr-2"></i> Unduh Sertifikat
                        </a>
                    </div>
                </div>
            </div>

            <div class="main-content-card main-content-prestasi mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 py-5">Daftar Prestasi & Penghargaan</h3>
                <div class="row col-lg-12 px-0 mx-auto">
                    @forelse ($prestasis as $prestasi)
                    <div class="col-12 mb-3 px-0">
                        <div class="prestasi-card d-flex align-items-center p-3 rounded shadow-sm">
                            <img src="{{ asset('storage/' . $prestasi->dokumentasi) }}" alt="{{ $prestasi->judul_prestasi_penghargaan }}" class="prestasi-img mr-3 rounded">
                            <div class="prestasi-content text-left">
                                <h5 class="prestasi-title mb-1">{{ $prestasi->judul_prestasi_penghargaan }}</h5>
                                <p class="prestasi-year mb-1">{{ $prestasi->tahun_prestasi_penghargaan }}</p>
                                <p class="prestasi-snippet mb-1">{{ Str::limit($prestasi->deskripsi_prestasi_penghargaan, 150) }}</p>
                                <a href="{{ route('prestasi.frontend.show', $prestasi->id) }}" class="btn btn-md btn-outline-danger read-more-prestasi">Baca Kisah Lengkap</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 px-0 text-center">
                        <p>Belum ada data prestasi dan penghargaan yang ditambahkan.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
