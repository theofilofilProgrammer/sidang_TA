<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dasar Hukum | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
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
                <h5 class="text-uppercase mb-0">Data Mata Kuliah</h5>
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
            <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
                <h3 class="section-title mb-4">Edit Data Dasar Hukum : Sistem Informasi Absensi Mahasiswa Berbasis Web </h3>
                <form>
                    <hr class="batas-form my-4"> <!-- Garis pemisah -->    
                    <div class="form-group">
                        <label for="judulDasarHukum">Judul Dasar Hukum</label>
                        <input type="text" class="form-control" id="judulDasarHukum" placeholder="Silahkan mengisi Judul Dasar Hukum ...">
                    </div>

                    <div class="form-group">
                        <label for="jenisdasarHukum">Jenis Dasar Hukum : </label>
                        <select id="jenisdasarHukum" class="form-control text-center">
                            <option selected="">HKI</option>
                            <option>Paten</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="judulJenisHukum">Jenis Hukum yang berkaitan dengan Judul :</label>
                        <input type="text" class="form-control" id="judulJenisHukum" placeholder="Silahkan mengisi Jenis hukum yang berkaitan dengan judul">
                    </div>

                    <div class="form-group">
                        <label for="tahunDasar_hukum">Tahun Dasar Hukum : </label>
                        <select id="tahunDasar_hukum" class="form-control text-center">
                            <option selected="">2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nomorpendaftaran">Nomor pendaftaran :</label>
                        <input type="text" class="form-control" id="nomorpendaftaran" placeholder="Silahkan mengisi nomor pendaftaran dasar hukum">
                    </div>

                    <div class="form-group">
                        <label for="penciptaDasarHukum">Anggota Dosen / Pencipta Dasar Hukum (Pilih multiple)</label>
                        <select multiple class="form-control" id="penciptaDasarHukum">
                            <option>Dr. Budi Santoso</option>
                            <option>Ir. Citra Dewi, M.Kom</option>
                            <option>Drs. Anton Wijaya, MT</option>
                            <option>Prof. Dr. Ir. S. Hartono</option>
                            <option>M. Fadli, S.Kom, M.Eng</option>
                            <option>Dyah Ayu, S.Kom, M.TI</option>
                            <option>Dr. Rio Saputra</option>
                        </select>
                        <small id="mataKuliahRelevanHelp" class="form-text text-muted">Tahan Ctrl/Command untuk memilih lebih dari satu dosen.</small>
                    </div>

                    <div class="form-group">
                        <label for="mataKuliahRelevan">Mata Kuliah yang Relevan (Pilih multiple)</label>
                        <select multiple="" class="form-control" id="mataKuliahRelevan">
                            <option>Pancasila</option>
                            <option>Matematika</option>
                            <option>Pengantar Teknologi Informasi</option>
                            <option>Pemrograman Terstruktur</option>
                            <option>Praktikum Pemrograman Terstruktur</option>
                            <option>Paket Program Terapan</option>
                            <option>Praktikum Paket Program Terapan</option>
                            <option>Algoritma Pemrograman</option>
                            <option>Praktikum Algoritma Pemrograman</option>
                            <option>Struktur Data</option>
                            <option>Praktikum Struktur Data</option>
                            <option>Arsitektur Komputer</option>
                            <option>Pemrograman Berorientasi Objek</option>
                            <option>Praktikum Pemrograman Berorientasi Objek</option>
                            <option>Metode Numerik</option>
                            <option>Praktikum Metode Numerik</option>
                            <option>Sistem Operasi</option>
                            <option>Praktikum Sistem Operasi</option>
                            <option>Basis Data</option>
                            <option>Praktikum Basis Data</option>
                            <option>Rekayasa Perangkat Lunak</option>
                            <option>Jaringan Komputer Dasar</option>
                            <option>Praktikum Jaringan Komputer Dasar</option>
                            <option>Pengolahan Citra Digital</option>
                            <option>Praktikum Pengolahan Citra Digital</option>
                        </select>
                        <small id="mataKuliahRelevanHelp" class="form-text text-muted">Tahan Ctrl/Command untuk memilih lebih dari satu mata kuliah.</small>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_Dasarhukum">Deskripsi Dasar Hukum : </label>
                        <textarea class="form-control" id="deskripsi_Dasarhukum" rows="3" placeholder="Silahkan mengisi deskripsi prestasi / Penghargaan"></textarea>
                    </div>

                    <div class="d-flex justify-content-between px-0 mt-4">
                        <a href="#" type="submit" class="btn btn-success col-5 mr-2 py-3" style="font-size: 1.25rem;"><i class="far fa-save mr-2"></i> SIMPAN PERUBAHAN</a>
                        <a href="/data-dasar-hukum" class="btn btn-danger col-5 py-3" style="font-size: 1.25rem;"><i class="far fa-window-close mr-2"></i> BATAL</a>
                    </div>
                </form>
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
</body>
</html>