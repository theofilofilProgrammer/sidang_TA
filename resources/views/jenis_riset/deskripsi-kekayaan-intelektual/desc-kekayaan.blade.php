<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C00202301234 - Sistem Informasi Absensi Mahasiswa Berbasis Web | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
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
    <section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-3">
        <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/Kekayaan-intelektual" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Kekayaan Intelektual</a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">C00202301234 - Sistem Informasi Absensi Mahasiswa Berbasis Web</h3>
            </div>
        </div>
    </section>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container my-5 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-12">
                <!-- Konten Deskripsi Kekayaan Intelektual -->
                <div class="main-content-card main-content-deskripsi-kekayaan-intelektual mb-4 p-4 rounded shadow-sm">
                    <h3 class="main-content-title col-12 px-0 text-center">Sistem Informasi Absensi Mahasiswa Berbasis Web</h3>
                    <p class="text-muted medium text-center mb-0">Pencipta / Inventor Dasar hukum : Dra. Annisa Putri, M.Kom, Budi Santoso, S.Kom</p>
                    <p class="text-muted medium text-center font-italic mb-0">HKI (Hak Cipta)</p>
                    <p class="text-muted medium text-center mb-5">Tahun : <strong>2023</strong></p>

                    <h4 class="main-content-subtitle col-12 px-0 text-left">Deskripsi Dasar Hukum :</h4>
                    <hr class="mb-4 mt-1 px-0 col-12">
                    <p class="main-content-paragraph text-justify">Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. Dalam kursus ini saya menghargai tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ini selalu merupakan kelas yang tepat untuk taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos. Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. Dalam kursus ini saya menghargai tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ini selalu merupakan kelas yang tepat untuk taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.</p>

                    <h4 class="main-content-subtitle col-12 px-0 text-left">Mata Kuliah yang Relevan (terkait dengan Bidang keunggulan) :</h4>
                    <hr class="mb-4 mt-1 px-0 col-12">
                    <div class="d-flex col-12 px-0 flex-wrap mb-4">
                        <span class="badge badge-primary mr-2 mb-2">Pengantar Teknologi Informasi</span>
                        <span class="badge badge-primary mr-2 mb-2">Basis Data</span>
                        <span class="badge badge-primary mr-2 mb-2">Pemrograman Web</span>
                        <span class="badge badge-primary mr-2 mb-2">Rekayasa Perangkat Lunak</span>
                        <span class="badge badge-primary mr-2 mb-2">Grafika Komputer</span>
                        <span class="badge badge-primary mb-2">Desain Web</span>
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
