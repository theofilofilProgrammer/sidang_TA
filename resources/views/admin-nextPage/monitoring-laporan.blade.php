<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Publikasi | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style-admin.css">
    <!-- Bootstrap CSS v4.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" xintegrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome (untuk ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- untuk membuat diagram data -->
     <script type="text/javascript" src="js/diagram.js"></script>
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
                    <!-- Pastikan path gambar Jessica_Jung_W_Korea_October_2024.jpg sudah benar -->
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
                        <li><a href="/data-mahasiswa" class="sidebar-subitem">Data Mahasiswa</a></li>
                        <li><a href="/data-dosen" class="sidebar-subitem">Data Dosen</a></li>
                        <li><a href="/data-admin" class="sidebar-subitem">Data Admin</a></li>
                        <li><a href="/data-user" class="sidebar-subitem">Data User</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/data-matkul" class="sidebar-item"><i class="fas fa-book-open sidebar-icon"></i> Mata Kuliah</a>
                </li>
                <li>
                    <a href="/data-pengumuman" class="sidebar-item"><i class="fas fa-bullhorn sidebar-icon"></i> Pengumuman</a>
                </li>
                <li>
                    <a href="/data-berita" class="sidebar-item"><i class="fas fa-newspaper sidebar-icon"></i> Berita</a>
                </li>
                <li>
                    <a href="/data-prestasi-penghargaan" class="sidebar-item"><i class="fas fa-trophy sidebar-icon"></i> Prestasi & Penghargaan</a>
                </li>
                <li>
                    <a href="/data-kerjasama" class="sidebar-item"><i class="fas fa-globe sidebar-icon"></i> Jaringan Kerjasama & Kemitraan</a>
                </li>
                <li>
                    <a href="/data-bidang-unggulan" class="sidebar-item"><i class="fas fa-star sidebar-icon"></i> Bidang Unggulan</a>
                </li>
                <li>
                    <a href="/data-PLO" class="sidebar-item"><i class="fas fa-file-alt sidebar-icon"></i> Program Learning Outcome</a>
                </li>
                <li>
                    <a href="/data-COE" class="sidebar-item"><i class="fas fa-cogs sidebar-icon"></i> Pusat Unggulan (COE)</a>
                </li>
                <li>
                    <a href="/data-dasar-hukum" class="sidebar-item"><i class="fas fa-gavel sidebar-icon"></i> Dasar Hukum</a>
                </li>
                <li>
                    <a href="/data-jurnal-prosiding" class="sidebar-item"><i class="fas fa-file-invoice sidebar-icon"></i> Jenis Jurnal / Prosiding</a>
                </li>
                <li>
                    <a href="/data-publikasi" class="sidebar-item"><i class="fas fa-file-alt sidebar-icon"></i> Data Publikasi</a>
                </li>
                <li>
                    <a href="#" class="sidebar-item"><i class="fas fa-chart-bar sidebar-icon"></i> Laporan & Monitoring</a>
                </li>
            </ul>
        </nav>

        <div class="content-wrapper col-lg-10 px-0 mx-4">
            <section class="monitoring-laporan-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
                <h3 class="section-title mb-4">LAPORAN DAN MONITORING</h3>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-group mb-0 d-flex col-10 px-0 align-items-center">
                        <label for="pilihanLaporan" class="col-2 px-0 mr-0 mb-0">Pilihan Laporan :</label>
                        <select class="form-control" id="pilihanLaporan">
                            <option>Statistik Data Dosen</option>
                            <option>Statistik Data Mahasiswa</option>
                            <option>Statistik Data Mata Kuliah</option>
                            <option>Statistik Data Pengumuman</option>
                            <option>Statistik Data Berita</option>
                            <!-- Tambahkan pilihan laporan lainnya di sini -->
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary generate-report-btn" onclick="drawSelectedChart()">GENERATE LAPORAN</button>
                </div>

                <div class="report-display-area">
                    <h4 class="report-title mb-4">TAMPILAN LAPORAN :</h4>
                    <div class="chart-container">
                        <!-- Div untuk menampilkan chart Google Charts -->
                        <div id="chart_div_dosen" class="chart-placeholder"></div>
                        <div id="chart_div_mahasiswa" class="chart-placeholder" style="display: none;"></div>
                        <div id="chart_div_matkul" class="chart-placeholder" style="display: none;"></div>
                        <div id="chart_div_pengumuman" class="chart-placeholder" style="display: none;"></div>
                        <div id="chart_div_berita" class="chart-placeholder" style="display: none;"></div>
                    </div>

                    <div class="table-responsive mt-5">
                        <!-- Tabel untuk Statistik Data Dosen -->
                        <table class="table table-bordered table-striped data-table" id="data_table_dosen">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Kelamin Data Dosen</th>
                                    <th>Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Pria</td>
                                    <td>60%</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Wanita</td>
                                    <td>40%</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Tabel untuk Statistik Data Mahasiswa -->
                        <table class="table table-bordered table-striped data-table" id="data_table_mahasiswa" style="display: none;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Angkatan</th>
                                    <th>Jumlah Mahasiswa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>2021</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>2022</td>
                                    <td>180</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>2023</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>2024</td>
                                    <td>220</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Tabel untuk Statistik Data Mata Kuliah -->
                        <table class="table table-bordered table-striped data-table" id="data_table_matkul" style="display: none;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Wajib</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Pilihan</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Tidak Wajib</td>
                                    <td>2</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Tabel untuk Statistik Data Pengumuman -->
                        <table class="table table-bordered table-striped data-table" id="data_table_pengumuman" style="display: none;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Bulan</th>
                                    <th>Jumlah Pengumuman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Jan</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Feb</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Mar</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Apr</td>
                                    <td>7</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Tabel untuk Statistik Data Berita -->
                        <table class="table table-bordered table-striped data-table" id="data_table_berita" style="display: none;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kategori</th>
                                    <th>Jumlah Berita</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Akademik</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Kemahasiswaan</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Penelitian</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Umum</td>
                                    <td>8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-success mr-2 export-btn col-6 py-3" id="export_csv_btn" style="display: none;">
                            <i class="fas fa-file-csv mr-2"></i> TOMBOL EXPORT KE CSV
                        </button>
                        <button type="button" class="btn btn-danger export-btn col-6 py-3" id="export_pdf_btn" style="display: none;">
                            <i class="fas fa-file-pdf mr-2"></i> TOMBOL EXPORT KE PDF
                        </button>
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
