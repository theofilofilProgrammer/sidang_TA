<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Program Studi D3 Teknologi Informasi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS v4.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" xintegrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome (untuk ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Wrapper untuk Header dan Navbar agar bisa sticky bersama -->
    <div class="sticky-header-wrapper">
        <!-- Bagian Header -->
        <header class="header-section">
            <div class="container col-lg-11 d-flex justify-content-between align-items-center px-0">
                <!-- Bagian Kiri Header: Logo -->
                <div class="header-left col-md-3 d-flex align-items-center">
                    <!-- Pastikan path gambar logo_polnep.png sudah benar -->
                    <img src="images/logo_polnep.png" alt="Logo POLNEP" class="logo-polnep">
                </div>

                <!-- Bagian Tengah Header: Judul Program Studi -->
                <div class="header-center text-center mx-auto">
                    <p class="mb-0 text-uppercase header-program-title">Program Studi D3 Teknologi Informasi</p>
                    <p class="mb-0 text-uppercase header-psdku-title">Psdku Politeknik Negeri Pontianak</p>
                    <p class="mb-0 text-uppercase header-location-title">Di Kabupaten Sukamara</p>
                </div>

                <!-- Bagian Kanan Header: Info User dan Tombol Logout -->
                <div class="header-right d-flex align-items-center mx-5">
                    <span class="mr-3 text-white text-user">Dr. Andi Wijaya</span>
                    <!-- Pastikan path gambar Jessica_Jung_W_Korea_October_2024.jpg sudah benar -->
                    <img src="images/Andi_wijaya.jpg" alt="Dr. Andi Wijaya" class="rounded-circle mr-3 profile-pic">
                    <!-- Menggunakan ikon panah ke kanan sesuai gambar, bukan sign-out -->
                    <a href="#" class="text-white logout-icon-link"><i class="fas fa-sign-out-alt text-black"></i></a>
                </div>
            </div>
        </header>
        
        <!-- Bagian Navbar Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar-bg py-0">
            <div class="container">
                <div class="collapse navbar-collapse px-auto" id="navbarNav">
                    <ul class="navbar-nav w-100 justify-content-start">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">HOME</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/profil-prodi">Profil Prodi <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/akademik">Akademik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/riset">Riset</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news&announcement">Berita & Pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/saran">Saran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Breadcrumb -->
    <section class="hero-breadcrumb-section bg-success col-lg-12 px-0 d-flex align-items-center mx-0 my-3">
        <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/home" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Halaman Beranda
                </a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title text-light ml-4 mb-0">Tentang Kami</h3>
            </div>
        </div>
    </section>

    <!-- Hero Banner untuk Deskripsi Utama -->
    <section class="hero-deskripsi-utama-section d-flex align-items-center my-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="hero-deskripsi-utama-title mb-1">Tentang Program Studi D3 Teknologi Informasi</h1>
                    <h3 class="hero-deskripsi-utama-subtitle mb-0">PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Konten Utama -->
    <div class="container col-lg-12 px-0">
        <section class="main-content-section col-lg-12 col-md-12 container my-5">
            <div class="main-content-card main-content-deskripsi-utama mb-4 p-5 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-3 pb-4 text-center">Mengenal Lebih Dekat Program Studi Kami</h3>
                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph text-dark">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara didirikan dengan visi untuk menjadi pusat pendidikan vokasi unggulan yang menghasilkan tenaga ahli di bidang teknologi informasi yang kompeten, inovatif, dan berdaya saing global.</p>
                        <p class="main-content-paragraph text-dark">Kami berkomitmen untuk menyediakan kurikulum yang relevan dengan kebutuhan industri, didukung oleh fasilitas laboratorium modern dan staf pengajar yang berkualitas. Mahasiswa kami tidak hanya dibekali dengan teori, tetapi juga pengalaman praktis melalui proyek-proyek riil, magang industri, dan berbagai kegiatan ekstrakurikuler yang mendukung pengembangan soft skills.</p>
                        <p class="main-content-paragraph text-dark">Lulusan kami siap untuk berkontribusi dalam berbagai sektor industri, mulai dari pengembangan perangkat lunak, jaringan komputer, keamanan siber, hingga multimedia dan kreatif. Kami terus berinovasi dan menjalin kerjasama dengan berbagai pihak untuk memastikan relevansi pendidikan kami dengan perkembangan teknologi dan kebutuhan pasar kerja.</p>
                        <p class="main-content-paragraph text-dark">Bergabunglah dengan kami dan jadilah bagian dari generasi penerus yang akan membentuk masa depan teknologi informasi di Indonesia.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bagian Footer -->
    <footer class="main-footer pt-5">
        <div class="footer-top-section">
            <div class="container col-lg-12">
                <div class="row justify-content-between align-items-center">
                    <!-- Konten Kiri: Logo POLNEP -->
                    <div class="col-md-2 text-center text-md-center mb-4 mb-md-0 footer-col-left">
                        <img src="images/logo_polnep.png" alt="Logo POLNEP" class="footer-logo img-fluid-footer">
                    </div>

                    <!-- Konten Tengah: Judul dan Paragraf -->
                    <div class="col-md-7 mb-4 mb-md-0 footer-col-center">
                        <h5 class="footer-title mb-3">Program Studi Teknologi Informasi di Kampus Politeknik Negeri Pontianak, Kabupaten Sukamara</h5>
                        <p class="footer-text">Lorem ipsum dolor sit amet ut et occaecat culpa ad ullamco aliquip. Pariatur anim laborum ut eu elit in culpa. Voluptate consectetur sunt nulla irure. Ullamco sit est consectetur incididunt do irure mollit ut eiusmod est laborum aliquip occaecat. Aliqua ad dolore excepteur incididunt deserunt. In consequat adipiscing eu enim exercitation quis reprehenderit cupidatat. Voluptate lorem nulla exercitation culpa id id nostrud pariatur occaecat deserunt veniam reprehenderit. Officia sed magna do magna sint nisi duis ut laboris. Esse dolore nulla in minim mollit. Enim amet dolore esse ut duis eu do.</p>
                    </div>

                    <!-- Konten Kanan: Sosial Media -->
                    <div class="col-md-3 footer-col-right">
                        <ul class="list-unstyled footer-contact-list">
                            <li><i class="fas fa-phone footer-icon pr-3"></i> Telp : (0534) XXX XXX</li>
                            <li><i class="fas fa-envelope footer-icon pr-3"></i> Email : ti.sukamara@polnep.ac.id</li>
                            <li><i class="fab fa-whatsapp footer-icon pr-3"></i> Whatsapp : (0534) XXX XXX</li>
                            <li><i class="fab fa-facebook footer-icon pr-3"></i> Facebook : Teknologi Informasi POLNEP</li>
                            <li><i class="fab fa-instagram footer-icon pr-3"></i> Instagram : d3_teknologi_informasi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-section py-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h5 class="footer-copyright mb-0 my-2">© 2025 Program Studi D3 Teknologi Informasi Politeknik Negeri Pontianak PDSKU Sukamara. All rights reserved.</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS, Popper.js, jQuery (wajib untuk fitur Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" xintegrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" xintegrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" xintegrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6Q" crossorigin="anonymous"></script>
    <!-- Javascript (JS) -->
    <!-- <script src="js/main.js"></script> -->
</body>
</html>