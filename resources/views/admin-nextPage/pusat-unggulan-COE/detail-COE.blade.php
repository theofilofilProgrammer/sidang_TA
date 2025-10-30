<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pusat Unggulan (COE) | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style-admin.css">
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
                <div class="header-center text-center mx-3">
                    <p class="mb-0 text-uppercase header-program-title">Program Studi D3 Teknologi Informasi</p>
                    <p class="mb-0 text-uppercase header-psdku-title">Psdku Politeknik Negeri Pontianak</p>
                    <p class="mb-0 text-uppercase header-location-title">Di Kabupaten Sukamara</p>
                </div>

                <!-- Bagian Kanan Header: Info User dan Tombol Logout -->
                <div class="header-right d-flex align-items-center mx-5">
                    <span class="mr-3 text-white text-user">ADMIN</span>
                    <img src="images/Andi_wijaya.jpg" alt="Dr. Andi Wijaya" class="rounded-circle mr-3 profile-pic">
                    <!-- Menggunakan ikon panah ke kanan sesuai gambar, bukan sign-out -->
                    <a href="#" class="text-white logout-icon-link"><i class="fas fa-sign-out-alt text-black"></i></a>
                </div>
            </div>
        </header>        
    </div>

    <div class="d-flex main-content-wrapper">
        <!-- Bagian Sidebar Kiri Menu Admin -->
        <nav class="sidebar-admin">
            <div class="sidebar-header">
                <h5 class="text-uppercase mb-0">Data Mahasiswa</h5>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/home-admin" class="sidebar-item"><i class="fas fa-home sidebar-icon"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#manajemenPenggunaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-item">
                        <i class="fas fa-users sidebar-icon"></i> Manajemen Pengguna
                    </a>
                    <ul class="collapse list-unstyled" id="manajemenPenggunaSubmenu">
                        <li><a href="#" class="sidebar-subitem">Data Mahasiswa</a></li>
                        <li><a href="/data-dosen" class="sidebar-subitem">Data Dosen</a></li>
                        <li><a href="/data-admin" class="sidebar-subitem">Data Admin</a></li>
                        <li><a href="/data-user" class="sidebar-subitem">Data User</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-book-open sidebar-icon"></i> Mata Kuliah</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-bullhorn sidebar-icon"></i> Pengumuman</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-newspaper sidebar-icon"></i> Berita</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-trophy sidebar-icon"></i> Prestasi & Penghargaan</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-globe sidebar-icon"></i> Jaringan Kerjasama & Kemitraan</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-star sidebar-icon"></i> Bidang Unggulan</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-file-alt sidebar-icon"></i> Program Learning Outcome</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-cogs sidebar-icon"></i> Pusat Unggulan (COE)</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-gavel sidebar-icon"></i> Dasar Hukum</a>
                </li>
                <li>
                    <a href="/data-jurnal-prosiding" class="sidebar-item"><i class="fas fa-file-invoice sidebar-icon"></i> Jenis Jurnal / Prosiding</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-file-alt sidebar-icon"></i> Data Publikasi</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-chart-bar sidebar-icon"></i> Laporan & Monitoring</a>
                </li>
            </ul>
        </nav>

        <div class="content-wrapper col-lg-10 px-0 mx-4">
            <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
                <div class="d-flex align-items-center mb-4">
                    <a href="/data-COE" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left"></i> Kembali</a>
                    <h3 class="section-title mb-0">Judul COE : Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0</h3>
                </div>

                <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
                <div class="detail-card">
                    <div class="row detail-row">
                        <div class="col-12 px-0 text-center mb-4">
                            <img src="images/Jenis_pusat_unggulan/COE-1.jpg" alt="Dokumentasi COE" class="img-fluid col-12 px-3 rounded shadow-sm detail-image">
                        </div>
                        <div class="col-12">
                            <h3 class="detail-subtitle text-center py-3">Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0</h3>
                            <h4 class="detail-subtitle">Deskripsi Pusat Unggulan : </h4>
                            <p class="detail-text text-justify">Pusat Keunggulan Teknologi Informasi Berbasis Industri 4.0 (COE Industri 4.0) adalah motor penggerak inovasi di Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak. COE ini berdedikasi pada penelitian dan pengembangan aplikasi serta solusi yang terintegrasi dengan teknologi Industri 4.0, seperti Internet of Things (IoT) untuk sistem monitoring dan kontrol, analisis Big Data untuk pengambilan keputusan cerdas, dan implementasi Kecerdasan Buatan dalam otomatisasi proses. Kami berkomitmen untuk menghasilkan produk dan prototipe yang dapat diterapkan langsung di sektor industri, menjembatani kesenjangan antara riset akademik dan kebutuhan praktis industri.</p>
                        </div>
                        <div class="col-12 mt-3">
                            <h4 class="detail-subtitle">Informasi Kontak : (Email Dosen melalui Ketua Pusat Unggulan COE)</h4>
                            <p class="detail-text detail-email-coe text-justify">siti.nurjanah@polnep.ac.id</p>
                        </div>
                        <div class="col-12 mt-3">
                            <h4 class="detail-subtitle">Proyek Unggulan :</h4>
                            <ul class="detail-list"> 
                                <li>Sistem Monitoring Lingkungan Berbasis IoT</li>
                                <li>Analisis Data Produksi untuk Optimasi Proses</li>
                                <li>Pengembangan Aplikasi VR/AR untuk Pelatihan Industri</li>
                            </ul>
                        </div>
                        <div class="col-12 mt-3">
                            <h4 class="detail-subtitle">Mata Kuliah yang Relevan:</h4>
                            <ul class="detail-list pb-3">
                                <li>Pengantar Teknologi Informasi</li>
                                <li>Basis Data</li>
                                <li>Pemrograman Berorientasi Objek</li>
                                <li>Struktur Data</li>
                                <li>Jaringan Komputer Dasar</li>
                                <li>Jaringan Komputer Lanjutan</li>
                                <li>Pemrograman Web</li>
                                <li>Pemrograman Mobile</li>
                                <li>Rekayasa Perangkat Lunak</li>
                                <li>Sistem Keamanan Informasi</li>
                                <li>Grafika Komputer</li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="/edit-COE" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                        <a href="#" class="btn btn-danger delete-data-btn"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    

    <!-- Bagian Footer -->
    <footer class="main-footer pt-0 mt-0">
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