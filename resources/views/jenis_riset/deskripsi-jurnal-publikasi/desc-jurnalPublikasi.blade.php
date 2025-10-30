<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Sistem Informasi Pengelolaan UKM Berbasis Cloud | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
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
                <a href="/semua-publikasi" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Halaman Publikasi</a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Implementasi Sistem Informasi Pengelolaan UKM Berbasis Cloud</h3>
            </div>
        </div>
    </section>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container my-5 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-12">
                <!-- Konten Deskripsi Publikasi -->
                <div class="main-content-card main-content-deskripsi-dataPublikasi mb-4 p-4 rounded shadow-sm">
                    <h3 class="data-publikasi-title col-12 px-0">Implementasi Sistem Informasi Pengelolaan UKM Berbasis Cloud</h3>
                    <p class="data-publikasi-penulis col-12 px-0"><strong>Penulis :</strong> Ahmad Rahmawati, S.S.T, M.Cs, Budi Setiawan, S.T, M.T</p>
                    <p class="data-publikasi-jurnal col-12 px-0"><strong>Jurnal / Prosiding :</strong> <i>Jurnal Sistem Teknologi Informasi (JITS) (2024) - Jurnal</i></p>

                    <h4 class="data-publikasi-abstrak-title col-12 px-0 mb-0">Abstrak :</h4>
                    <hr class="col-lg-12 col-md-12 px-0 mb-0">
                    <p class="data-publikasi-abstrak-content col-12 px-0 mt-2">
                        Penelitian ini membahas perancangan dan implementasi sistem informasi berbasis cloud untuk mengelola usaha kecil menengah (UKM). Sistem ini dirancang untuk meningkatkan efisiensi operasional dan aksesibilitas data bagi pelaku UKM.
                    </p>

                    <h4 class="data-publikasi-deskripsi-title col-12 px-0 mb-0">Deskripsi :</h4>
                    <hr class="col-lg-12 col-md-12 px-0 mb-0">
                    <p class="data-publikasi-deskripsi-content text-justify col-12 px-0 mt-2">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. Dalam kursus ini saya menghargai tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ini selalu merupakan kelas yang tepat untuk taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
                    </p>
                    <p class="data-publikasi-deskripsi-content text-justify col-12 px-0">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. Dalam kursus ini saya menghargai tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ini selalu merupakan kelas yang tepat untuk taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
                    </p>
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
