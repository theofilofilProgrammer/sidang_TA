@extends('layouts.isi-riset.pusat-unggulan')
@section('title-pusatUnggulan')
Pusat Unggulan (Center of Excellence - COE) | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-pusatUnggulan')
<!-- Hero d-flex berisi button Kembali ke halaman Profil Prodi "Kembali ke halaman Profil Prodi" -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 mb-0">Pusat Unggulan (Center of Excellence - COE)</h3>
        </div>
    </div>
</section>

<!-- Hero Dosen & Staff (sama menyerupai banner) (Halaman Dosen & Staff) -->
<div class="col-lg-12 px-0">
    <section class="hero-pusat-coe-section d-flex align-items-center my-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Konten Hero Dosen & Staff -->
                <div class="col-12 text-center">
                    <h1 class="hero-pusat-coe-title mb-1">Pusat Unggulan (Center of Excellence - COE)</h1>
                    <h4 class="hero-pusat-coe-subtitle mb-0">Pengembangan Inovasi & Riset Strategis Program Studi</h4>
                    <h3 class="hero-pusat-coe-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak<br>di Kabupaten Sukamara</h3>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Bagian content (main kontent)-->
<section class="main-content-section container my-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-12">
            <div class="main-content-card main-content-fokus-pusatUnggulan mb-4 p-4 rounded shadow-sm">
                <!-- Main Kontent - Bidang Unggulan Kami -->
                <h3 class="main-content-title col-12 px-0 text-left">Fokus Pusat Unggulan Kami</h3>
                <hr class="col-lg-12 col-md-12 px-0">
                <p class="main-content-paragraph text-left mb-3">Pusat Unggulan (Center of Excellence/COE) merupakan wadah strategis bagi Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara untuk mengembangkan riset inovatif dan kolaboratif. COE berfungsi sebagai episentrum penelitian yang berorientasi pada pemecahan masalah industri dan kontribusi nyata bagi masyarakat, dengan fokus pada bidang-bidang strategis yang relevan dengan perkembangan teknologi terkini.
                <br>
                <br>
                Melalui COE, kami berupaya menciptakan ekosistem riset yang kondusif, mendorong publikasi ilmiah berkualitas tinggi, serta menghasilkan produk dan solusi inovatif yang dapat dihilirkan ke industri dan masyarakat.</p>
                <div class="row my-5 col-lg-12 d-flex justify-content-between px-0 mx-0">
                    <!-- Kartu 1: Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0 -->
                    <div class="col-lg-6 col-md-2 px-0 mb-4">
                        <div class="pusatCOE-card">
                            <div class="pusatCOE-img">
                                <img src="images/Jenis_pusat_unggulan/COE-1.jpg" alt="Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0" class="img-fluid">
                            </div>
                            <div class="pusatCOE-content p-3">
                                <h5 class="pusatCOE-title text-justify">Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0</h5>
                                <p class="pusatCOE-description">Berfokus pada penelitian dan pengembangan solusi teknologi yang relevan dengan kebutuhan industri di era Revolusi Industri 4.0, seperti IoT, Big Data, dan Kecerdasan Buatan.</p>
                                <h6 class="pusatCOE-subtitle text-justify">Proyek Unggulan :</h6>
                                <ul class="pusatCOE-list text-justify px-3">
                                    <li>Sistem Monitoring Lingkungan Berbasis IoT</li>
                                    <li>Analisis Data Produksi untuk Optimasi Proses</li>
                                    <li>Pengembangan Aplikasi VR/AR untuk Pelatihan Industri</li>
                                </ul>
                                <p class="pusatCOE-ketua text-justify mb-5">Ketua : Dr. Siti Nurjanah</p>
                                <a href="/deskripsi-pusatUnggulanCOE" class="btn btn-primary btn-lihat-detail">Lihat Detail COE</a>
                            </div>
                        </div>
                    </div>
                    <!-- Kartu 2: Pusat Keunggulan Keamanan Siber & Forensik Digital -->
                    <div class="col-lg-6 col-md-2 px-0 mb-4">
                        <div class="pusatCOE-card">
                            <div class="pusatCOE-img">
                                <img src="images/Jenis_pusat_unggulan/COE-2.jpg" alt="Pusat Keunggulan Keamanan Siber & Forensik Digital" class="img-fluid">
                            </div>
                            <div class="pusatCOE-content p-3">
                                <h5 class="pusatCOE-title text-justify">Pusat Keunggulan Keamanan Siber & Forensik Digital</h5>
                                <p class="pusatCOE-description">Mendedikasikan diri pada riset dan pengembangan inovasi di bidang keamanan siber, deteksi ancaman, dan forensik digital untuk melindungi aset digital.</p>
                                <h6 class="pusatCOE-subtitle text-justify">Proyek Unggulan :</h6>
                                <ul class="pusatCOE-list text-justify px-3">
                                    <li>Sistem Deteksi Intrusi Berbasis AI</li>
                                    <li>Analisis Malware dan Reverse Engineering</li>
                                    <li>Pengembangan Metode Forensik Digital untuk Mobile Devices</li>
                                </ul>
                                <p class="pusatCOE-ketua text-justify mb-5">Ketua : Prof. Dr. Ir. Joko Susilo</p>
                                <a href="#" class="btn btn-primary btn-lihat-detail">Lihat Detail COE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
