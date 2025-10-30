<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Keahlian | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
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
                <a href="/kelompok-keahlian" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Kelompok Keahlian
                </a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Jaringan Komputer & Keamanan Siber</h3>
            </div>
        </div>
    </section>

    <!-- Hero Dosen & Staff (sama menyerupai banner) (Halaman Dosen & Staff) -->
     <div class="col-lg-12 px-0">
         <section class="hero-desc-bidang-section ounded d-flex align-items-center my-0">
            <img src="images/jenis_bidang_unggulan/jarkom-keamanan.jpg" class="col-lg-12 rounded px-0 container" alt="Jaringan Komputer & Keamanan Siber">
         </section>
     </div>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container my-5 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-12">
                <!-- Konten Deskripsi Bidang Unggulan -->
                <div class="main-content-card main-content-deskripsi-bidang-unggulan mb-4 p-4 rounded shadow-sm">
                    <h3 class="main-content-title col-12 px-0 text-left">Jaringan Komputer & Keamanan Siber dapat memfokuskan :</h3>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <p class="main-content-paragraph text-justify">Desain, implementasi, dan manajemen infrastruktur jaringan yang aman, termasuk deteksi dan pencegahan serangan siber. Fokus meliputi topologi jaringan, protokol, kriptografi, forensik digital, dan keamanan aplikasi.</p>

                    <h3 class="main-content-title col-12 px-0 text-left">Deskripsi Kelompok Keahlian :</h3>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <p class="main-content-paragraph text-justify">Kelompok Keahlian Jaringan Komputer dan Keamanan Siber mendedikasikan diri pada penelitian dan pengembangan di bidang infrastruktur jaringan modern serta perlindungan sistem dari ancaman siber. Fokus utama kami meliputi arsitektur jaringan masa depan (seperti 5G dan IoT), protokol komunikasi, dan teknik-teknik keamanan siber tingkat lanjut termasuk kriptografi, forensik digital, dan manajemen insiden keamanan. Kami juga berupaya mengembangkan solusi keamanan aplikasi dan cloud yang inovatif untuk menghadapi tantangan keamanan di era digital.</p>

                    <h3 class="main-content-title col-12 px-0 text-left">Mata Kuliah yang Relevan (terkait dengan Bidang keunggulan) :</h3>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <div class="d-flex flex-wrap col-lg-12 px-0 mb-4">
                        <span class="badge badge-primary mr-2 mb-2">Sistem Operasi</span>
                        <span class="badge badge-primary mr-2 mb-2">Jaringan Komputer Dasar</span>
                        <span class="badge badge-primary mr-2 mb-2">Jaringan Komputer Lanjutan</span>
                        <span class="badge badge-primary mb-2">Sistem Keamanan Informasi</span>
                    </div>

                    <h3 class="main-content-title col-12 px-0 text-left">Anggota Tim :</h3>
                    <hr class="col-lg-12 col-md-12 px-0">
                    <ul class="unggulan-list text-left col-lg-12">
                        <li>Prof. Dr. Ir. S. Hartono</li>
                        <li>M. Fadli, S.Kom, M.Eng</li>
                        <li>Dyah Ayu, S.Kom, M.TI</li>
                        <li>Dr. Rio Saputra</li>
                    </ul>
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
