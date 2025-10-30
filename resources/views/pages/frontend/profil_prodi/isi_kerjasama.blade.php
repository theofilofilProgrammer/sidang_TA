@extends('layouts.isi_profilprodi.kerjasama')
@section('title-kerjaSama')
Kerjasama | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-Kerjasama')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 px-0 mb-0">Jaringan Kerjasama & Kemitraan</h3>
        </div>
    </div>
</section>

<section class="hero-kerjasama-section d-flex align-items-center mx-0 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="hero-kerjasama-title mb-1">Jaringan Kerjasama & Kemitraan</h1>
                <h3 class="hero-kerjasama-subtitle mb-0">Program Studi D3 Teknologi Informasi<br>PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-kerjasama p-5 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-3 pb-4 text-center">Kolaborasi untuk Masa Depan</h3>

                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph text-dark">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara berkomitmen untuk menjalin dan memperluas jaringan kerjasama dengan berbagai pihak, baik dari sektor industri, lembaga pendidikan, maupun instansi pemerintah. Kolaborasi ini bertujuan untuk meningkatkan kualitas pendidikan, relevansi kurikulum, peluang magang dan karir mahasiswa, serta kontribusi nyata bagi masyarakat dan perkembangan teknologi.</p>
                        <p class="main-content-paragraph text-dark">Kami percaya bahwa dengan bersinergi, kami dapat menciptakan ekosistem pendidikan yang lebih dinamis dan adaptif terhadap kebutuhan zaman. Berikut adalah detail kategori kemitraan yang telah kami jalin :</p>
                    </div>
                </div>
            </div>

            {{-- INDUSTRI --}}
            <div class="main-content-card main-content-kerjasama-kategori my-4 p-5 rounded shadow-sm">
                <div class="kerjasama-icon-container col-12 mx-auto d-flex align-items-center">
                    <i class="fas fa-industry h3 icon-pink mr-4"></i>
                    <h4 class="kerjasama-subtitle my-3">Industri</h4>
                </div>
                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph text-dark">Kerjasama dengan perusahaan industri terkemuka untuk magang mahasiswa, rekrutmen lulusan, proyek bersama, dan seminar industri.</p>
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-between px-0">
                        @forelse($industriPartners as $kerjasama)
                            <a href="{{ route('frontend.kerjasama.show', $kerjasama->id) }}" class="kerjasama-logo-card col-5 d-flex flex-column align-items-center justify-content-center px-0 py-5 mx-0 my-3 rounded shadow-sm">
                                <img src="{{ $kerjasama->gambar_perusahaan ? asset('storage/' . $kerjasama->gambar_perusahaan) : asset('images/default-image.png') }}" alt="{{ $kerjasama->nama_jaringan_kerjasama }}" class="img-fluid mb-2">
                                <span class="logo-name">{{ $kerjasama->nama_jaringan_kerjasama }}</span>
                            </a>
                        @empty
                            <p class="text-dark">Tidak ada data kerjasama Industri.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            {{-- PENDIDIKAN --}}
            <div class="main-content-card main-content-kerjasama-kategori mb-4 p-5 rounded shadow-sm">
                <div class="kerjasama-icon-container col-12 mx-auto d-flex align-items-center">
                    <i class="fas fa-graduation-cap h3 icon-blue mr-4"></i>
                    <h4 class="kerjasama-subtitle my-3">Pendidikan</h4>
                </div>
                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph text-dark">Kemitraan dengan institusi pendidikan untuk pertukaran pelajar/dosen, riset kolaboratif, dan pengembangan kurikulum.</p>
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-between px-0">
                        @forelse($pendidikanPartners as $kerjasama)
                            <a href="{{ route('frontend.kerjasama.show', $kerjasama->id) }}" class="kerjasama-logo-card col-5 d-flex flex-column align-items-center justify-content-center px-0 py-5 mx-0 my-3 rounded shadow-sm">
                                <img src="{{ $kerjasama->gambar_perusahaan ? asset('storage/' . $kerjasama->gambar_perusahaan) : asset('images/default-image.png') }}" alt="{{ $kerjasama->nama_jaringan_kerjasama }}" class="img-fluid mb-2">
                                <span class="logo-name">{{ $kerjasama->nama_jaringan_kerjasama }}</span>
                            </a>
                        @empty
                            <p class="text-dark">Tidak ada data kerjasama Pendidikan.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            {{-- PEMERINTAH & LEMBAGA --}}
            <div class="main-content-card main-content-kerjasama-kategori mb-4 p-5 rounded shadow-sm">
                <div class="kerjasama-icon-container col-12 mx-auto d-flex align-items-center">
                    <i class="fas fa-building h3 icon-green mr-4"></i>
                    <h4 class="kerjasama-subtitle my-3">Pemerintah & Lembaga</h4>
                </div>
                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph text-dark">Kolaborasi dengan entitas pemerintah dan organisasi non-profit untuk pengabdian masyarakat, pengembangan aplikasi, dan sertifikasi.</p>
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-between px-0">
                        @forelse($pemerintahLembagaPartners as $kerjasama)
                            <a href="{{ route('frontend.kerjasama.show', $kerjasama->id) }}" class="kerjasama-logo-card col-5 d-flex flex-column align-items-center justify-content-center px-0 py-5 mx-0 my-3 rounded shadow-sm">
                                <img src="{{ $kerjasama->gambar_perusahaan ? asset('storage/' . $kerjasama->gambar_perusahaan) : asset('images/default-image.png') }}" alt="{{ $kerjasama->nama_jaringan_kerjasama }}" class="img-fluid mb-2">
                                <span class="logo-name">{{ $kerjasama->nama_jaringan_kerjasama }}</span>
                            </a>
                        @empty
                            <p class="text-dark">Tidak ada data kerjasama Pemerintah & Lembaga.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            {{-- KOMUNITAS & ASOSIASI --}}
            <div class="main-content-card main-content-kerjasama-kategori mb-4 p-5 rounded shadow-sm">
                <div class="kerjasama-icon-container col-12 mx-auto d-flex align-items-center">
                    <i class="fas fa-user-friends h3 icon-orange mr-4"></i>
                    <h4 class="kerjasama-subtitle my-3">Komunitas & Asosiasi</h4>
                </div>
                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph text-dark">Membangun ekosistem yang kuat melalui kemitraan dengan komunitas dan asosiasi profesional di bidang IT.</p>
                    </div>
                    <div class="col-12 d-flex flex-wrap justify-content-between px-0">
                        @forelse($komunitasAsosiasiPartners as $kerjasama)
                            <a href="{{ route('frontend.kerjasama.show', $kerjasama->id) }}" class="kerjasama-logo-card col-5 d-flex flex-column align-items-center justify-content-center px-0 py-5 mx-0 my-3 rounded shadow-sm">
                                <img src="{{ $kerjasama->gambar_perusahaan ? asset('storage/' . $kerjasama->gambar_perusahaan) : asset('images/default-image.png') }}" alt="{{ $kerjasama->nama_jaringan_kerjasama }}" class="img-fluid mb-2">
                                <span class="logo-name">{{ $kerjasama->nama_jaringan_kerjasama }}</span>
                            </a>
                        @empty
                            <p class="text-dark">Tidak ada data kerjasama Komunitas & Asosiasi.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
