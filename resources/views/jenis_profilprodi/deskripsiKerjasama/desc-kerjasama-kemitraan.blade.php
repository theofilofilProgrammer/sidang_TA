<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransTRACK | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
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
        @include('includes.frontend.profil-prodi.navbar')
    </div>
    <!-- Hero d-flex berisi button Kembali ke halaman Kerjasama dan tulisan "Industri 1 : TransTRACK" -->
    <section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-3">
        <div class="container col-12 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/kerjasama-kemitraan" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke halaman Kerjasama
                </a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Industri 1 : TransTRACK</h3>
            </div>
        </div>
    </section>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container my-5 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content Kiri -->
            <div class="col-lg-8 col-md-12">
                <div class="main-content-card main-content-deskripsi-kerjasama mb-4 p-4 rounded shadow-sm">
                    <!-- Main Konten - Deskripsi Kerjasama industri -->
                    <div class="text-center mb-4">
                        <img src="images/kerjasama/industri/transTRACK.png" alt="TransTRACK Logo" class="img-fluid kerjasama-logo-detail">
                    </div>
                    <h3 class="main-content-title col-12 px-3 text-left">TransTRACK</h3>
                    <div class="row col-lg-12 mx-auto">
                        <div class="col-12 px-0 text-justify">
                            <p class="main-content-paragraph">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.<br>
                            Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat.<br>
                            Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Kiri -->
            <div class="col-lg-4 col-md-12">
                <!-- Pencarian Pengumuman & Berita Terbaru -->
                <div class="sidebar-card news-announce p-4 mb-5 rounded shadow-sm">
                    <h5 class="sidebar-title mt-4 mb-5">Pencarian Pengumuman & Berita Terbaru</h5>
                    <hr class="mb-5 mt-1 px-0 col-12">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Cari Berita atau pengumuman terbaru ...." aria-label="Cari Berita atau pengumuman terbaru" aria-describedby="search-button">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="search-button">Cari</button>
                        </div>
                    </div>
                    <h6 class="latest-posts-subtitle mt-4 mb-3">Postingan Terbaru</h6>
                    <div class="latest-posts-section">
                        <div class="latest-post-card mb-2">
                            <a href="#" class="latest-post-title">Pelatihan Pemrograman Web untuk Mahasiswa Baru</a>
                            <p class="latest-post-date">15 Mei 2025</p>
                        </div>
                        <div class="latest-post-card mb-2">
                            <a href="#" class="latest-post-title">Mahasiswa yang telah lulus mengikuti Program Pertukaran Mahasiswa Merdeka (PMM 4) Tahun 2025</a>
                            <p class="latest-post-date">30 Mei 2025</p>
                        </div>
                        <div class="latest-post-card mb-2">
                            <a href="#" class="latest-post-title">Kunjungan Industri: Belajar Langsung dari Para Profesional IT</a>
                            <p class="latest-post-date">30 Mei 2025</p>
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
