@extends('layouts.profil_prodi_Utama')
@section('title-profil')
Profil Prodi | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection
@section('isi-profilProdiUtama')
<!-- Hero Profil (sama menyerupai banner) (Halaman Prodi Profil) -->
<section class="hero-profil-section d-flex align-items-center mx-0 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Profil Prodi -->
            <div class="col-12 text-center">
                <h1 class="hero-profil-title mb-1">Program Studi D3 Teknologi Informasi</h1>
                <h3 class="hero-profil-subtitle mb-0">PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (konten kiri : sidebar kiri dan konten kanan : main kontent)-->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content Kanan -->
        <div class="col-12">
            <div class="main-content-card main-content-sekilas p-4 mb-5 col-sm-12 rounded shadow-sm">
                <!-- Konten : Sekilas D-III Teknologi Informasi -->
                <h4 class="main-content-title text-left col-12 my-4">Sekilas D-III Teknologi Informasi</h4>
                <p class="main-content-paragraph col-12 my-3">Seiring dengan kemajuan dan perkembangan Teknologi Informasi dan Komunikasi (TIK) di Indonesia pada umumnya dan Kalimantan Barat pada khususnya, serta dalam menghadapi ASEAN Free Trade Area (AFTA), tentunya membutuhkan Sumber Daya Manusia yang mempunyai kompetensi di bidang TIK.</p>
                <p class="main-content-paragraph col-12 my-3">Program Studi D-III Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara adalah program studi yang bertujuan menghasilkan tenaga ahli madya yang kompeten di bidang pengembangan Teknologi Informasi dan Komunikasi, serta berbagai pengalaman bekerja dengan Kementerian Pendidikan Nasional dalam pengembangan aplikasi dan sistem informasi. Lulusan kami siap pakai terutama untuk memenuhi kebutuhan tenaga ahli di bidang TIK pada industri dan pemerintahan.</p>
                <p class="main-content-paragraph col-12 my-3">Lulusan prodi ini yang memiliki peluang karir yang luas di berbagai sektor industri :
                    <ul class="prospek-karir-list mx-3">
                        <li>Computer Technician</li>
                        <li>Network Administrator</li>
                        <li>Web Programmer</li>
                        <li>Robotic Technician</li>
                        <li>System Administrator</li>
                        <li>Digital Entrepreneur/IT Preneur/Technopreneur</li>
                        <li>Network Engineer</li>
                        <li>Cyber Security Specialist</li>
                        <li>Data Center Technician</li>
                        <li>Software Developer</li>
                    </ul>
                </p>
                <a href="/Sejarah-Lengkap" class="btn btn-main-content mx-3 my-3">Baca Sejarah Lengkap</a>
            </div>

            <div class="main-content-card p-4 mb-5 col-sm-12 rounded shadow-sm main-content-why-choose">
                <!-- Konten : Kenapa Harus Pilih D3 Teknologi Informasi Polnep Sukamara? -->
                <h4 class="main-content-title my-5" style="color: var(--text-judul);">Kenapa Harus Pilih D3 Teknologi Informasi Polnep Sukamara?</h4>
                <div class="row w-100 no-gutters my-4">
                    <!-- Card 1: Kurikulum Relevan Industri -->
                    <div class="col-md-6 mb-5">
                        <div class="why-choose-card d-flex align-items-start">
                            <div class="why-choose-icon-container mr-3">
                                <i class="fas fa-lightbulb why-choose-icon icon-yellow"></i> <!-- Menggunakan fas fa-lightbulb -->
                            </div>
                            <div class="why-choose-text-content">
                                <h5 class="why-choose-subtitle" style="color: var(--text-color);">Kurikulum Relevan Industri</h5>
                                <p class="why-choose-paragraph" style="color: var(--text-color);">Dirancang dengan masukan dari industri, memastikan lulusan siap kerja dan adaptif terhadap perkembangan teknologi.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2: Fasilitas Laboratorium Modern -->
                    <div class="col-md-6 mb-5">
                        <div class="why-choose-card d-flex align-items-start">
                            <div class="why-choose-icon-container mr-3">
                                <i class="fas fa-code why-choose-icon text-center icon-blue"></i> <!-- Menggunakan fas fa-code -->
                            </div>
                            <div class="why-choose-text-content">
                                <h5 class="why-choose-subtitle" style="color: var(--text-color);">Fasilitas Laboratorium Modern</h5>
                                <p class="why-choose-paragraph" style="color: var(--text-color);">Dilengkapi dengan perangkat keras dan lunak terbaru untuk praktik langsung dan eksperimen inovatif.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3: Dosen Berpengalaman & Profesional -->
                    <div class="col-md-6 mb-5">
                        <div class="why-choose-card d-flex align-items-start">
                            <div class="why-choose-icon-container mr-3">
                                <i class="fas fa-users why-choose-icon icon-green"></i> <!-- Menggunakan fas fa-users -->
                            </div>
                            <div class="why-choose-text-content">
                                <h5 class="why-choose-subtitle" style="color: var(--text-color);">Dosen Berpengalaman & Profesional</h5>
                                <p class="why-choose-paragraph" style="color: var(--text-color);">Pengajar adalah praktisi dan akademisi yang ahli di bidangnya, siap membimbing Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4: Prospek Karir Luas -->
                    <div class="col-md-6 mb-5">
                        <div class="why-choose-card d-flex align-items-start">
                            <div class="why-choose-icon-container mr-3">
                                <i class="fas fa-chart-line why-choose-icon icon-orange"></i> <!-- Menggunakan fas fa-chart-line -->
                            </div>
                            <div class="why-choose-text-content">
                                <h5 class="why-choose-subtitle" style="color: var(--text-color);">Prospek Karir Luas</h5>
                                <p class="why-choose-paragraph" style="color: var(--text-color);">Lulusan kami banyak dicari oleh perusahaan IT terkemuka dan memiliki peluang besar di berbagai sektor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
