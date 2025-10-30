<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Semua Publikasi | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
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
                <a href="/jurnal-&-publikasi" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Jurnal & Publikasi
                </a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Lihat Semua Publikasi</h3>
            </div>
        </div>
    </section>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container my-5 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-12">
                <div class="main-content-card main-content-semuaPublikasi mb-4 p-4 rounded shadow-sm">
                    <!-- Main Konten - Platform Publikasi Kami dan jenis-jenis kartu Jurnal & Prosiding Kami -->
                    <h3 class="main-content-title col-12 px-0 text-left">Daftar Lengkap Publikasi</h3>
                    <hr class="mb-4 mt-1 px-0 col-12">
                    <p class="main-content-paragraph text-justify">Berikut adalah daftar lengkap publikasi ilmiah yang dihasilkan oleh dosen dan mahasiswa Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara. Publikasi ini mencakup berbagai topik inovatif dan riset terapan di bidang teknologi informasi.</p>

                    <div class="row col-lg-12 px-0 mb-4 align-items-center">
                        <div class="col-md-8 mb-3 mb-md-0 px-0">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Cari nama, atau Angkatan ...." aria-label="Cari nama dosen atau jenis dosen" aria-describedby="search-button">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="search-button">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 pr-0 pl-3">
                            <select id="tahun_publikasi" class="form-control">
                                <option value="">Semua Tahun</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        </div>
                        <div class="col-md-2 pr-0 pl-3">
                            <select id="jenis_publikasi" class="form-control">
                                <option value="">Semua Jenis</option>
                                <option value="Jurnal">Jurnal</option>
                                <option value="Prosiding">Prosiding</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Card 1: Implementasi Sistem Informasi Pengelolaan UKM Berbasis Cloud -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Implementasi Sistem Informasi Pengelolaan UKM Berbasis Cloud</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : A. Rahmawati, B. Setiawan</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Jurnal Teknologi Informasi (2024) - Jurnal</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Penelitian ini membahas perancangan dan implementasi sistem informasi berbasis cloud untuk mengelola usaha kecil menengah (UKM). Sistem ini dirancang untuk meningkatkan efisiensi operasional dan aksesibilitas data bagi pelaku UKM.</p>
                                <a href="/deskripsi-publikasi" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 2: Analisis Keamanan Jaringan IoT pada Smart Home -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Analisis Keamanan Jaringan IoT pada Smart Home</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : C. Putra, D. Lestari</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Jurnal Jaringan Komputer (2023) - Jurnal</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Studi ini menganalisis kerentanan keamanan pada implementasi Jaringan Internet of Things (IoT) di lingkungan smart home dan mengusulkan mitigasi yang relevan.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 3: Pengembangan Aplikasi Mobile untuk Panduan Wisata Sukamara -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Pengembangan Aplikasi Mobile untuk Panduan Wisata Sukamara</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : C. Susanto, F. Amelia</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Prosiding SenaTI (2023) - Prosiding</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Aplikasi mobile ini dirancang untuk menyediakan informasi pariwisata dan panduan perjalanan di Kabupaten Sukamara, memudahkan wisatawan dalam menjelajahi berbagai lokasi.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 4: Perancangan Sistem Rekomendasi Film Menggunakan Collaborative Filtering -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Perancangan Sistem Rekomendasi Film Menggunakan Collaborative Filtering</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : G. Wijaya, H. Puspita</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Jurnal Teknologi Informasi (2024) - Jurnal</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Penelitian ini merancang sistem rekomendasi film berbasis collaborative filtering untuk memberikan saran film yang personal kepada pengguna berdasarkan preferensi dan riwayat tontonan.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 5: Studi Komparatif Algoritma Klasifikasi untuk Deteksi Penyakit Tanaman Padi -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Studi Komparatif Algoritma Klasifikasi untuk Deteksi Penyakit Tanaman Padi</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : I. Cahyono, J. Pratama</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Prosiding SenaTI (2022) - Prosiding</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Studi ini membandingkan kinerja beberapa algoritma klasifikasi untuk deteksi penyakit tanaman padi pada citra daun, memberikan rekomendasi metode terbaik.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 6: Implementasi VPN (Virtual Private Network) untuk Keamanan Komunikasi Data Perusahaan -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Implementasi VPN (Virtual Private Network) untuk Keamanan Komunikasi Data Perusahaan</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : K. Akbar, L. Mardiana</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Jurnal Jaringan Komputer (2024) - Jurnal</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Penelitian ini membahas implementasi dan pengujian Virtual Private Network (VPN) untuk mengamankan komunikasi data antar cabang perusahaan, meningkatkan privasi dan integritas data.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 7: Analisis Sentimen Ulasan Produk E-commerce Menggunakan Naive Bayes Classifier -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Analisis Sentimen Ulasan Produk E-commerce Menggunakan Naive Bayes Classifier</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : M. Cahyadi, N. Wijayanti</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Jurnal Teknologi Informasi (2023) - Jurnal</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Penelitian ini menerapkan Naive Bayes Classifier untuk melakukan analisis sentimen terhadap ulasan produk pada platform e-commerce, membantu perusahaan memahami persepsi pelanggan.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 8: Pengembangan Sistem Pengendalian Irigasi Otomatis Berbasis Mikrokontroler -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Pengembangan Sistem Pengendalian Irigasi Otomatis Berbasis Mikrokontroler</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : O. Pratama, P. Utami</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Prosiding SenaTI (2022) - Prosiding</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Studi ini merancang dan mengimplementasikan sistem irigasi lahan pertanian menggunakan mikrokontroler dan sensor kelembaban tanah, mengoptimalkan penggunaan air.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Card 9: Forensik Digital pada Perangkat Mobile Android untuk Investigasi Cybercrime -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="daftar-publikasi-card text-justify">
                                <h4 class="daftar-publikasi-title">Forensik Digital pada Perangkat Mobile Android untuk Investigasi Cybercrime</h4>
                                <p class="daftar-publikasi-meta"><strong>Penulis</strong> : Q. Ramadhan, R. Indah</p>
                                <p class="daftar-publikasi-meta font-italic"><strong>Jurnal / Prosiding</strong> : Jurnal Jaringan Komputer (2023) - Jurnal</p>
                                <p class="daftar-publikasi-abstrak"><strong>Abstrak</strong> : Studi ini membahas teknik forensik digital untuk melakukan investigasi pada perangkat mobile Android dalam kasus cybercrime.</p>
                                <a href="#" class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
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
