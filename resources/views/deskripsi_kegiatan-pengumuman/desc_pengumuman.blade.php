<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Nasional Teknologi Informasi | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
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
        @include('includes.frontend.pengumuman.navbar')
    </div>

    <!-- Hero d-flex berisi button Kembali ke halaman Profil Prodi "Kembali ke halaman Profil Prodi" -->
    <section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
        <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/announce" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Halaman Kegiatan</a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Pengumuman : Pembaruan Kurikulum Semester Ganjil</h3>
            </div>
        </div>
    </section>

    <!-- Bagian content (main kontent)-->
    <section class="main-content-section container my-0 mx-auto col-lg-12">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-12">
                <!-- Konten Deskripsi Berita -->
                <div class="main-content-card main-content-deskripsi-news mb-4 p-4 rounded shadow-sm">
                    <!-- Hero Deskripsi news (sama menyerupai banner) (Halaman Dosen & Staff) -->
                    <img src="images/berita/pengumuman/pengumuman-hasil-seleksi-2025.jpg" class="col-lg-12 hero-desc-news-section rounded rounded px-0 container" alt="Jaringan Komputer & Keamanan Siber">
                    <p class="main-content-paragraph text-justify py-2"><strong>Pontianak, 07 Mei 2025 -</strong> Deskripsi tentang pengumuman "Pembaruan Kurikulum Semester Ganjil" yang baru saja diselenggarakan oleh prodi, menghadirkan pembicara ahli dari industri dan akademisi terkemuka. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                    <br>
                    Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien. Donec ut est in lectus consequat consequat.
                    <br>
                    Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis. Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi.
                    <br>
                    Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin semper, ante vitae sollicitudin posuere, metus quam iaculis nibh, vitae scelerisque nunc massa eget pede. Sed velit urna, interdum vel, ultricies vel, faucibus at, quam. Donec elit est, consectetuer eget, consequat quis, tempus quis, wisi. In in nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.
                    <br>
                    Donec ullamcorper fringilla eros. Fusce in sapien eu purus dapibus commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras faucibus condimentum odio. Sed ac ligula. Aliquam at eros. Etiam at ligula et tellus ullamcorper ultrices. In fermentum, lorem non cursus porttitor, diam urna accumsan lacus, sed interdum wisi nibh nec nisl. Ut tincidunt volutpat urna.
                    <br>
                    Mauris eleifend nulla eget mauris. Sed cursus quam id felis. Curabitur posuere quam vel nibh. Cras dapibus dapibus nisl. Vestibulum quis dolor a felis congue vehicula. Maecenas pede purus, tristique ac, tempus eget, egestas quis, mauris. Curabitur non eros. Nullam hendrerit bibendum justo. Fusce iaculis, est quis lacinia pretium, pede metus molestie lacus, at gravida wisi ante at libero.</p>

                    <div class="col-lg-12 px-0 mt-5 d-flex justify-content-center">
                        <a href="#" class="btn btn-unduh-pengumuman mt-auto rounded col-lg-6">Unduh Dokumen</a>
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
