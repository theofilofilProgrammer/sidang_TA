<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Lulusan Detail | Program Studi D3 Teknologi Informasi</title>
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
        @include('includes.frontend.akademik.navbar')
    </div>

    <!-- Breadcrumb -->
    <section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
        <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/akademik" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke halaman Akademik
                </a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Kalender Akademik</h3>
            </div>
        </div>
    </section>

    <!-- Hero Banner Kalender Akademik -->
    <section class="hero-kalender-akademik-section d-flex align-items-center my-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="hero-kalender-akademik-title mb-1">Kalender Akademik</h1>
                    <h3 class="hero-kalender-akademik-subtitle mb-0">Program Studi D3 Teknologi Informasi<br>PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Konten Utama -->
    <div class="container col-lg-12 px-0">
        <section class="main-content-section col-lg-12 col-md-12 container my-5">
            <div class="main-content-card main-content-kalender-akademik mb-4 p-5 rounded shadow-sm">
                <h3 class="main-content-title text-center mb-4">Jadwal Penting Tahun Akademik 2024/2025</h3>
                <p class="main-content-paragraph text-center">Berikut adalah rangkuman jadwal kegiatan akademik penting untuk mahasiswa Program Studi D3 Teknologi Informasi.</p>

                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="card kalender-item-card h-100 shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Semester Ganjil</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-info"></i> <strong>1 - 10 Juli 2024:</strong> Pendaftaran Ulang Mahasiswa Lama</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-info"></i> <strong>12 Agustus 2024:</strong> Awal Perkuliahan</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-info"></i> <strong>25 - 29 November 2024:</strong> Minggu Tenang</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-info"></i> <strong>2 - 13 Desember 2024:</strong> Ujian Akhir Semester (UAS)</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-info"></i> <strong>20 Desember 2024:</strong> Pengumuman Nilai</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card kalender-item-card h-100 shadow-sm">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Semester Genap</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-success"></i> <strong>1 - 10 Januari 2025:</strong> Pendaftaran Ulang Mahasiswa Lama</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-success"></i> <strong>13 Januari 2025:</strong> Awal Perkuliahan</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-success"></i> <strong>12 - 16 Mei 2025:</strong> Minggu Tenang</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-success"></i> <strong>19 - 30 Mei 2025:</strong> Ujian Akhir Semester (UAS)</li>
                                    <li class="text-justify"><i class="fas fa-calendar-alt mr-2 text-success"></i> <strong>6 Juni 2025:</strong> Pengumuman Nilai</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-muted text-center mt-4"><i>*Jadwal dapat berubah sewaktu-waktu. Mohon selalu periksa pengumuman resmi dari Program Studi.</i></p>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-unduh btn-lg rounded-pill shadow-sm">
                        <i class="fas fa-download mr-2"></i> Unduh Kalender Akademik Lengkap (PDF)
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Bagian Footer -->
    @include('includes.frontend.footer')
    <!-- Bootstrap JS, Popper.js, jQuery (wajib untuk fitur Bootstrap) -->
    @include('includes.frontend.script')
</body>
</html>
