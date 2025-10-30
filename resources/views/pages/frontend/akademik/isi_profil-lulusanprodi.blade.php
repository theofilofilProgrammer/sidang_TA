@extends('layouts.isi_akademik.profil-lulusanprodi')
@section('title-lulusanProdi')
Laboratorium | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-lulusanProdi')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 mb-0">Profil Lulusan</h3>
        </div>
    </div>
</section>

<!-- Hero Program Reguler (sama menyerupai banner) (Halaman Program Reguler) -->
<section class="hero-profilLulusanProdi-section d-flex align-items-center mx-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Akademik Prodi -->
            <div class="col-12 text-center">
                <h1 class="hero-profilLulusanProdi-title mb-1">Profil Lulusan Program Studi</h1>
                <h3 class="hero-profilLulusanProdi-subtitle mb-0">D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (konten kiri : sidebar kiri dan konten kanan : main kontent)-->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content Kanan -->
        <div class="col-lg-12">
            <!-- Fokus Program Studi -->
            <div class="main-content-card main-content-fokus d-flex mb-5 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-lg-12 px-0 text-left">Profil Kompetensi Lulusan</h3>
                <p class="main-content-paragraph text-left">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara menyiapkan lulusan yang kompeten dan siap bersaing dalam dunia kerja. Setiap profil lulusan memiliki serangkaian kompetensi, keahlian, dan potensi karir yang mendalam.</p>

                <!-- Kartu 1: Profesional di Bidang Teknologi Komputer -->
                <div class="col-12 profile-lulusan-card align-items-start mb-3">
                    <div class="profile-lulusan-icon-container justify-content-start col-lg-12">
                        <i class="fas fa-laptop profile-lulusan-icon icon-blue mr-4"></i>
                        <h4 class="profile-lulusan-subtitle my-3">1. Profesional di Bidang Teknologi Komputer</h4>
                    </div>
                    <div class="profile-lulusan-text-content px-3 my-3">
                        <ul class="profile-lulusan-list px-3">
                            <li>Lulusan ini mampu memiliki kemampuan dalam mengidentifikasi dan memecahkan permasalahan sistem komputer, baik dari sisi perangkat lunak maupun perangkat keras. Mereka memahami penggunaan perangkat-perangkat keras komputer, merancang perangkat keras, melakukan instalasi sistem operasi dan aplikasi, melakukan instalasi sistem jaringan lokal (LAN), serta pengujian kinerja komponen-komponen komputer.</li>
                            <li>Mampu menjadi teknisi komputer, teknisi jaringan (Network Specialist, Jaringan Komputer, Jaringan Programmer), Embedded System, dan IoT Engineer.</li>
                            <li>Lulusan memiliki kemampuan sebagai teknisi siber yang kompeten dalam mengidentifikasi, mencegah, dan menangani serangan siber terhadap sistem komputer dan jaringan.</li>
                            <li>Dapat bersertifikasi nasional (BNSP) di bidang ini.</li>
                        </ul>
                    </div>
                </div>

                <!-- Kartu 2: Praktisi Bidang Teknologi Komputer -->
                <div class="col-12 profile-lulusan-card align-items-start mb-3">
                    <div class="profile-lulusan-icon-container justify-content-start col-lg-12">
                        <i class="fas fa-tools profile-lulusan-icon icon-orange mr-4"></i>
                        <h4 class="profile-lulusan-subtitle my-3">2. Praktisi Bidang Teknologi Komputer</h4>
                    </div>
                    <div class="profile-lulusan-text-content px-3 my-3">
                        <ul class="profile-lulusan-list px-3">
                            <li>Lulusan ini memiliki kemampuan dalam pengembangan perangkat lunak (software development) dan aplikasi berbasis web atau mobile, merancang basis data, serta mengelola sistem informasi secara efektif.</li>
                            <li>Memiliki kemampuan untuk menerapkan algoritma, teori, dan data dalam merumuskan penyelesaian masalah di bidang Teknologi Informasi.</li>
                            <li>Mampu menjadi asisten peneliti, perancang sistem, atau staf IT di perusahaan maupun instansi pemerintah.</li>
                        </ul>
                    </div>
                </div>

                <!-- Kartu 3: Lulusan Bidang Teknologi Komputer -->
                <div class="col-12 profile-lulusan-card align-items-start mb-3">
                    <div class="profile-lulusan-icon-container justify-content-start col-lg-12">
                        <i class="fas fa-lightbulb profile-lulusan-icon icon-yellow mr-4"></i>
                        <h4 class="profile-lulusan-subtitle my-3">3. Lulusan Bidang Teknologi Komputer</h4>
                    </div>
                    <div class="profile-lulusan-text-content px-3 my-3">
                        <p class="profile-lulusan-paragraph px-3">Lulusan memiliki kemampuan sebagai agen perubahan yang inovatif di bidang teknologi dan mampu beradaptasi dengan perkembangan terbaru. Mereka dapat memulai startup teknologi, mengembangkan solusi baru, atau meningkatkan efisiensi proses bisnis menggunakan teknologi informasi.</p>
                        <ul class="profile-lulusan-list px-3">
                            <li>Mampu beradaptasi dengan teknologi baru.</li>
                            <li>Berinovasi dalam menciptakan solusi teknologi.</li>
                            <li>Mampu berkomunikasi dan bekerja sama secara efektif dalam tim multidisiplin.</li>
                        </ul>
                    </div>
                </div>

                <p class="main-content-paragraph text-left mt-4">Dengan kombinasi antara teori yang kuat, keterampilan praktis, dan mindset inovatif, lulusan D3 Teknologi Informasi siap menjadi profesional yang dapat berkontribusi pada kemajuan teknologi di Indonesia.</p>
            </div>
        </div>
    </div>
</section>
@endsection
