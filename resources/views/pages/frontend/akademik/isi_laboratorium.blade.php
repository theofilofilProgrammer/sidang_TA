@extends('layouts.isi_akademik.hal-laboratorium')
@section('title-laboratorium')
Laboratorium | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-laboratorium')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 px-0 mb-0">Halaman Laboratorium</h3>
        </div>
    </div>
</section>

<!-- Hero Program Reguler (sama menyerupai banner) (Halaman Program Reguler) -->
<section class="hero-program-lab-section d-flex align-items-center mx-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Akademik Prodi -->
            <div class="col-12 text-center">
                <h1 class="hero-program-lab-title mb-1">Halaman Laboratorium</h1>
                <h3 class="hero-program-lab-subtitle mb-0">Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak<br>di Kabupaten Sukamara memiliki fasilitas laboratorium modern untuk<br>mendukung kegiatan belajar mengajar.</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (konten kiri : sidebar kiri dan konten kanan : main kontent)-->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content Kanan -->
        <div class="col-lg-12">
            <!-- Daftar Laboratorium -->
            <div class="main-content-card main-content-daftarlab mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 text-left">Daftar Laboratorium</h3>
                <hr class="col-lg-12 col-md-12 px-0">

                <div class="row">
                    <!-- Lab. Pemrograman Lanjut -->
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100" style="background: var(--card-bg);">
                            <img src="images/daftar_lab/lab_pemLanj.jpg" class="card-img-top" alt="Lab. Pemrograman Lanjut">
                            <div class="card-body">
                                <h5 class="card-title text-left">Lab. Pemrograman Lanjut</h5>
                                <p class="card-text text-left">Digunakan untuk pengembangan aplikasi web, mobile, dan proyek-proyek akhir.</p>
                                <p class="card-text-small text-left">Fasilitas: PC high-spec, Monitor Eksternal, Software Development Kits, Kapasitas: 30 mahasiswa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Lab. Multimedia -->
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100" style="background: var(--card-bg);">
                            <img src="images/daftar_lab/lab_multimedia.jpg" class="card-img-top" alt="Lab. Multimedia">
                            <div class="card-body">
                                <h5 class="card-title text-left">Lab. Multimedia</h5>
                                <p class="card-text text-left">Fasilitas untuk praktikum desain grafis, animasi, dan pengolahan citra/video.</p>
                                <p class="card-text-small text-left">Fasilitas: PC Grafis, Wacom Tablet, Software Desain. Kapasitas: 30 mahasiswa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Lab. Jaringan Komputer -->
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100" style="background: var(--card-bg);">
                            <img src="images/daftar_lab/lab_jarkom.jpg" class="card-img-top" alt="Lab. Jaringan Komputer">
                            <div class="card-body">
                                <h5 class="card-title text-left">Lab. Jaringan Komputer</h5>
                                <p class="card-text text-left">Fokus pada praktikum konfigurasi jaringan, administrasi server, dan keamanan jaringan.</p>
                                <p class="card-text-small text-left">Fasilitas: Router, Switch, Server, Komputer Klien., Kapasitas: 30 mahasiswa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Lab. Komputer Dasar -->
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100" style="background: var(--card-bg);">
                            <img src="images/daftar_lab/lab_kjd.jpg" class="card-img-top" alt="Lab. Komputer Dasar">
                            <div class="card-body">
                                <h5 class="card-title text-left">Lab. Komputer Dasar</h5>
                                <p class="card-text text-left">Digunakan untuk praktikum mata kuliah dasar pemrograman dan pengenalan komputer.</p>
                                <p class="card-text-small text-left">Fasilitas: PC, Proyektor, AC. Kapasitas: 40 mahasiswa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
