@extends('layouts.isi_akademik.program-lo')
@section('title-plo')
Program Learning Outcome (PLO) | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-plo')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 px-0 mb-0">Program Learning Outcome (PLO)</h3>
        </div>
    </div>
</section>

<!-- Hero Program Reguler (sama menyerupai banner) (Halaman Program Reguler) -->
<section class="hero-program-lo-section d-flex align-items-center mx-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Akademik Prodi -->
            <div class="col-12 text-center">
                <h1 class="hero-program-lo-title mb-1">Program Learning Outcome (PLO)</h1>
                <h3 class="hero-program-lo-subtitle mb-0">Capaian Pembelajaran Lulusan D3 Teknologi Informasi</h3>
                <h3 class="hero-program-lo-subtitle mb-0">PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (konten kiri : sidebar kiri dan konten kanan : main kontent)-->
<section class="main-content-section container my-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Sidebar Kiri -->
        <div class="col-lg-4 col-md-12">
            <!-- Konten : Informasi Terkait -->
            <div class="sidebar-card sidebar-info-akademik col-lg-12 p-4 mb-4 rounded shadow-sm">
                <h5 class="sidebar-title col-lg-12 mb-4 px-0">Informasi Akademik Lainnya</h5>
                <div class="list-group list-group-flush px-0 py-3 col-lg-12">
                    <a href="/program-reguler" class="list-group-item list-group-item-action d-flex align-items-center px-2 py-4 mb-2 rounded shadow-sm">
                        <i class="fas fa-calendar-alt mr-3 icon-red"></i>
                        <span class="font-weight-bold">Program Reguler</span>
                    </a>
                    <a href="/strukturKurikulum" class="list-group-item list-group-item-action d-flex align-items-center px-2 py-4 mb-2 rounded shadow-sm">
                        <i class="fas fa-book mr-3 icon-green"></i>
                        <span class="font-weight-bold">Struktur Kurikulum</span>
                    </a>
                    <a href="/profil-lulusanProdi" class="list-group-item list-group-item-action d-flex align-items-center px-2 py-4 mb-2 rounded shadow-sm">
                        <i class="fas fa-user-graduate mr-3 icon-orange"></i>
                        <span class="font-weight-bold">Profil Lulusan</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content Kanan -->
        <div class="col-lg-8 col-md-12">
            <!-- Capaian Pembelajaran Lulusan -->
            <div class="main-content-card main-content-cpl mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 text-left">Capaian Pembelajaran Lulusan</h3>
                <p class="main-content-paragraph text-left">Program Learning Outcome (PLO) atau Capaian Pembelajaran Lulusan (CPL) adalah serangkaian kompetensi yang mencakup pengetahuan, keterampilan, dan sikap yang diharapkan dimiliki oleh setiap mahasiswa setelah menyelesaikan studi di Program Studi D3 Teknologi Informasi. PLO ini dirancang untuk memastikan bahwa lulusan kami tidak hanya siap secara teknis, tetapi juga memiliki etika profesional, kemampuan kerja tim, dan kemauan untuk belajar seumur hidup, sehingga mampu bersaing dan memberikan kontribusi positif di dunia kerja global.</p>

                <div id="accordion" class="cpl-accordion col-12 px-0">
                    <!-- Collapsible Group Item #1: CPL-01: Keterampilan Rekayasa (Engineering Skills) -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link d-flex justify-content-between align-items-center w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    CPL-01: Keterampilan Rekayasa (Engineering Skills)
                                    <i class="fas fa-chevron-down chevron-icon"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body text-left">
                                <p class="font-italic">Mampu menerapkan pengetahuan, teknik, keterampilan, dan perangkat modern matematika, sains, engineering, dan teknologi untuk menyelesaikan masalah-masalah rekayasa secara luas pada bidang keahliannya.</p>
                                <ul>
                                    <li>Menguasai konsep teoritis sains-rekayasa (engineering-sciences), prinsip-prinsip rekayasa (engineering principles), dan perancangan rekayasa yang diperlukan untuk analisis dan perancangan sistem, proses, produk, atau komponen perangkat keras dan lunak komputer.</li>
                                    <li>Mampu mengidentifikasi, menganalisis, dan menyelesaikan masalah rekayasa pada sistem perangkat keras dan lunak komputer melalui penerapan prinsip-prinsip keteknikan.</li>
                                </ul>
                                <p class="font-weight-bold">Mata kuliah yang relevan :</p>
                                <ul>
                                    <li>Matematika</li>
                                    <li>Pengantar Teknologi Informasi</li>
                                    <li>Pemrograman Terstruktur</li>
                                    <li>Praktikum Pemrograman Terstruktur</li>
                                    <li>Algoritma Pemrograman</li>
                                    <li>Praktikum Algoritma Pemrograman</li>
                                    <li>Struktur Data</li>
                                    <li>Praktikum Struktur Data</li>
                                    <li>Arsitektur Komputer</li>
                                    <li>Pemrograman Berorientasi Objek</li>
                                    <li>Praktikum Pemrograman Berorientasi Objek</li>
                                    <li>Metode Numerik</li>
                                    <li>Praktikum Metode Numerik</li>
                                    <li>Sistem Operasi</li>
                                    <li>Praktikum Sistem Operasi</li>
                                    <li>Basis Data</li>
                                    <li>Praktikum Basis Data</li>
                                    <li>Rekayasa Perangkat Lunak</li>
                                    <li>Jaringan Komputer Dasar</li>
                                    <li>Pengolahan Citra Digital</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Group Item #2: CPL-02: Analisis dan Perancangan Eksperimen -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link d-flex justify-content-between align-items-center w-100 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    CPL-02: Analisis dan Perancangan Eksperimen
                                    <i class="fas fa-chevron-down chevron-icon"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body text-left">
                                <p class="font-italic">Mampu merancang dan melaksanakan eksperimen, serta menganalisis dan menafsirkan data untuk meningkatkan proses.</p>
                                <ul>
                                    <li>Mampu merancang dan merealisasikan antarmuka antara perangkat keras, perangkat lunak, dan pengguna (user).</li>
                                    <li>Mampu merancang, merealisasikan, dan melakukan eksperimen pada sistem perangkat keras dan lunak komputer serta menganalisis dan menginterpretasikan hasilnya.</li>
                                </ul>
                                <p class="font-weight-bold">Mata kuliah yang relevan :</p>
                                <ul>
                                    <li>Statistika dan Probabilitas</li>
                                    <li>Praktikum Pemrograman Terstruktur</li>
                                    <li>Praktikum Algoritma Pemrograman</li>
                                    <li>Praktikum Basis Data</li>
                                    <li>Praktikum Struktur Data</li>
                                    <li>Praktikum Pemrograman Berorientasi Objek</li>
                                    <li>Pemrograman Visual</li>
                                    <li>Praktikum Pemrograman Visual</li>
                                    <li>Desain Web</li>
                                    <li>Pemrograman Mobile</li>
                                    <li>Praktikum Jaringan Komputer Dasar/Lanjut</li>
                                    <li>Praktikum Grafika Komputer</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Group Item #3: CPL-03: Kerja Tim dan Komunikasi -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link d-flex justify-content-between align-items-center w-100 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    CPL-03: Kerja Tim dan Komunikasi
                                    <i class="fas fa-chevron-down chevron-icon"></i>
                                </button>
                            <h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body text-left">
                                <p class="font-italic">Mampu berfungsi secara efektif sebagai anggota atau pemimpin dalam tim teknis dan mampu berkomunikasi secara efektif.</p>
                                <ul>
                                    <li>Memiliki kemampuan berkomunikasi yang efektif baik lisan maupun tulisan.</li>
                                    <li>Mampu bekerja dalam tim multidisiplin atau multikultur.</li>
                                </ul>
                                <p class="font-weight-bold">Mata kuliah yang relevan :</p>
                                <ul>
                                    <li>Bahasa Indonesia</li>
                                    <li>Bahasa Inggris</li>
                                    <li>Organisasi dan Manajemen</li>
                                    <li>Magang Mahasiswa</li>
                                    <li>Sidang Tugas Akhir</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Group Item #4: CPL-04: Etika Profesional dan Tanggung Jawab Sosial -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link d-flex justify-content-between align-items-center w-100 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    CPL-04: Etika Profesional dan Tanggung Jawab Sosial
                                    <i class="fas fa-chevron-down chevron-icon"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body text-left">
                                <p class="font-italic">Mampu menerapkan etika profesi dan memiliki tanggung jawab sosial terkait dengan bidang keahliannya.</p>
                                <ul>
                                    <li>Memahami kebutuhan akan kemampuan pengembangan diri secara berkelanjutan (long-life learning).</li>
                                    <li>Memahami tanggung jawab profesi dan etika.</li>
                                    <li>Memahami isu-isu kontemporer yang relevan.</li>
                                </ul>
                                <p class="font-weight-bold">Mata kuliah yang relevan :</p>
                                <ul>
                                    <li>Pancasila</li>
                                    <li>Kewarganegaraan</li>
                                    <li>Agama</li>
                                    <li>Etika Profesi</li>
                                    <li>Kewirausahaan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Group Item #5: CPL-05: Penguasaan Bidang Keahlian Spesifik -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link d-flex justify-content-between align-items-center w-100 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    CPL-05: Penguasaan Bidang Keahlian Spesifik
                                    <i class="fas fa-chevron-down chevron-icon"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body text-left">
                                <p class="font-italic">Mampu mengaplikasikan pengetahuan dan keterampilan dalam bidang-bidang spesifik seperti Jaringan, IoT, dan Robotika.</p>
                                <ul>
                                    <li>Mampu merancang, mengimplementasikan, dan mengelola infrastruktur jaringan komputer yang aman dan andal.</li>
                                    <li>Mampu mengembangkan solusi berbasis Internet of Things (IoT) dari perancangan perangkat hingga aplikasi.</li>
                                    <li>Mampu merancang, membangun, dan memprogram sistem robotika untuk berbagai keperluan otomasi.</li>
                                </ul>
                                <p class="font-weight-bold">Mata kuliah yang relevan :</p>
                                <ul>
                                    <li>Jaringan Komputer Dasar</li>
                                    <li>Praktikum Jaringan Komputer Dasar</li>
                                    <li>Jaringan Komputer Lanjut</li>
                                    <li>Praktikum Jaringan Komputer Lanjut</li>
                                    <li>Sistem Keamanan Informasi</li>
                                    <li>Praktikum Sistem Keamanan Informasi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
