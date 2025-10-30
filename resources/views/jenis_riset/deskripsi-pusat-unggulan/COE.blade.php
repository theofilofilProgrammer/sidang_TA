<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0 | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
    <!-- CSS -->
    @include('includes.frontend.style')
</head>
<body>
    <!-- Wrapper untuk Header dan Navbar agar bisa sticky bersama -->
    <div class="sticky-header-wrapper">
        <div class="sticky-header-wrapper">
        <!-- Bagian Header -->
        @include('includes.frontend.header')

        <!-- Bagian Navbar Menu -->
        @include('includes.frontend.riset.navbar')
    </div>

    <!-- Hero d-flex berisi button Kembali ke halaman Profil Prodi "Kembali ke halaman Profil Prodi" -->
    <section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
        <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/pusat-unggulan-COE" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Pusat Unggulan (COE)</a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0</h3>
            </div>
        </div>
    </section>

    <!-- Hero Dosen & Staff (sama menyerupai banner) (Halaman Dosen & Staff) -->
     <div class="col-lg-12 px-0">
         <section class="hero-desc-pusatCOE-section ounded d-flex align-items-center my-0 px-0">
            <img src="images/Jenis_pusat_unggulan/COE-1.jpg" class="col-lg-12 rounded px-0 container" alt="Jaringan Komputer & Keamanan Siber">
         </section>
     </div>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container my-5 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-12">
                <!-- Konten Deskripsi Pusat Unggulan (Center of Excellence - COE) -->
                <div class="main-content-card main-content-deskripsi-pusat-unggulan-COE mb-4 p-4 rounded shadow-sm">
                    <h3 class="main-content-title col-12 px-0 text-center">Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0</h3>
                    <p class="text-muted small text-left mb-4">Ketua : Dr. Siti Nurjanah</p>

                    <h4 class="main-content-subtitle col-12 px-0 text-left">Deskripsi Pusat Unggulan :</h4>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <p class="main-content-paragraph text-justify">Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0 (COE Industri 4.0) adalah motor penggerak inovasi di Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak. COE ini berdedikasi pada penelitian dan pengembangan aplikasi serta solusi yang terintegrasi dengan teknologi Industri 4.0, seperti Internet of Things (IoT) untuk sistem monitoring dan kontrol, analisis Big Data untuk pengambilan keputusan cerdas, dan implementasi Kecerdasan Buatan dalam otomatisasi proses. Kami berkomitmen untuk menghasilkan produk dan prototipe yang dapat diterapkan langsung di sektor industri, menjembatani kesenjangan antara riset akademik dan kebutuhan praktisi industri.</p>

                    <h4 class="main-content-subtitle col-12 px-0 text-left">Proyek Unggulan :</h4>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <ul class="desc-pusatCOE-list col-12 text-justify">
                        <li>Sistem Monitoring Lingkungan Berbasis IoT</li>
                        <li>Analisis Data Produksi untuk Optimasi Proses</li>
                        <li>Pengembangan Aplikasi VR/AR untuk Pelatihan Industri</li>
                    </ul>

                    <h4 class="main-content-subtitle col-12 px-0 text-left">Mata Kuliah yang Relevan (terkait dengan Bidang keunggulan) :</h4>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <div class="d-flex flex-wrap mb-4">
                        <span class="badge badge-primary mr-2 mb-2">Pengantar Teknologi Informasi</span>
                        <span class="badge badge-primary mr-2 mb-2">Basis Data</span>
                        <span class="badge badge-primary mr-2 mb-2">Pemrograman Berorientasi Objek</span>
                        <span class="badge badge-primary mr-2 mb-2">Struktur Data</span>
                        <span class="badge badge-primary mr-2 mb-2">Jaringan Komputer Dasar</span>
                        <span class="badge badge-primary mr-2 mb-2">Jaringan Komputer Lanjutan</span>
                        <span class="badge badge-primary mr-2 mb-2">Pemrograman Web</span>
                        <span class="badge badge-primary mr-2 mb-2">Pemrograman Mobile</span>
                        <span class="badge badge-primary mr-2 mb-2">Rekayasa Perangkat Lunak</span>
                        <span class="badge badge-primary mr-2 mb-2">Sistem Keamanan Informasi</span>
                        <span class="badge badge-primary mb-2">Grafika Komputer</span>
                    </div>

                    <h4 class="main-content-subtitle col-12 px-0 text-left">Informasi Kontak</h4>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <p class="main-content-paragraph col-12 px-0 text-left mb-0">Email : <a href="mailto:siti.nurjanah@polnep.ac.id" class="text-primary">siti.nurjanah@polnep.ac.id</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Footer -->
    @include('includes.frontend.footer')


    <!-- Bootstrap JS, Popper.js, jQuery (wajib untuk fitur Bootstrap) -->
    @include('includes.frontend.script')
</body>
</html>
