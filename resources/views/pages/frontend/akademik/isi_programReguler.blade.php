@extends('layouts.isi_akademik.programReguler')
@section('title-programReguler')
Program Reguler | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-programReguler')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0  mb-0">Program Reguler</h3>
        </div>
    </div>
</section>

<!-- Hero Program Reguler (sama menyerupai banner) (Halaman Program Reguler) -->
<section class="hero-programReguler-section d-flex align-items-center mx-0 my-0 pb-3">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Akademik Prodi -->
            <div class="col-12 text-center">
                <h1 class="hero-programReguler-title mb-1">Program Reguler D3 Teknologi Informasi</h1>
                <h3 class="hero-programReguler-subtitle mb-0">PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (konten kiri : sidebar kiri dan konten kanan : main kontent)-->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content Kanan -->
        <div class="col-lg-12">
            <!-- Fokus Program Studi -->
            <div class="main-content-card main-content-fokus d-flex mb-5 p-4 rounded shadow-sm">
                <h3 class="main-content-title mb-5 mt-4 col-lg-12">Fokus Program Studi</h3>
                <p class="main-content-paragraph col-lg-12 text-justify">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara berfokus pada pengembangan keahlian praktis di bidang teknologi informasi yang relevan dengan kebutuhan industri. Kurikulum dirancang untuk membekali mahasiswa dengan keterampilan teknis dan soft skill yang kuat, mencakup:</p>
                <ul class="main-content-list col-lg-12 px-3 text-justify">
                    <li><strong>Pengembangan Aplikasi:</strong> Mahasiswa akan belajar merancang, mengembangkan, dan menguji aplikasi berbasis web dan mobile menggunakan teknologi terkini.</li>
                    <li><strong>Jaringan Komputer:</strong> Mempelajari konsep dasar hingga lanjutan dalam merancang, mengimplementasikan, dan mengelola jaringan komputer.</li>
                    <li><strong>Basis Data:</strong> Menguasai perancangan, implementasi, dan administrasi basis data untuk berbagai aplikasi.</li>
                    <li><strong>Keamanan Informasi:</strong> Memahami prinsip-prinsip keamanan siber dan cara melindungi sistem informasi dari ancaman.</li>
                    <li><strong>Sistem Informasi Geografis (SIG):</strong> Pengenalan dan aplikasi SIG untuk analisis data spasial.</li>
                    <li><strong>Internet of Things (IoT):</strong> Mempelajari konsep dan implementasi perangkat IoT.</li>
                </ul>
                <p class="main-content-paragraph col-lg-12 text-left">Kami berkomitmen untuk menghasilkan lulusan yang siap kerja dan mampu beradaptasi dengan cepat terhadap perkembangan teknologi.<br>Fokus ini dirancang untuk memastikan lulusan memiliki keterampilan yang relevan dan dibutuhkan oleh industri teknologi saat ini dan masa depan.</p>

                <p class="main-content-paragraph col-lg-12 text-left">Lulusan Prodi ini memiliki peluang karir yang luas di berbagai sektor industri :
                <ul class="prospek-karir-list px-3">
                    <li>Computer Technician</li>
                    <li>Network Administrator</li>
                    <li>Web Programmer</li>
                    <li>Digital Entrepreneur/IT Preneur/Technopreneur</li>
                    <li>Network Engineer</li>
                    <li>Cyber Security Specialist</li>
                    <li>Data Center Technician</li>
                    <li>Software Developer</li>
                </ul>
                </p>
            </div>

            <!-- Masa Studi dan Beban Belajar -->
            <div class="main-content-card main-content-masa-studi d-flex mb-5 p-4 rounded shadow-sm">
                <h3 class="main-content-title mb-5 mt-4 col-lg-12">Masa Studi dan Beban Belajar</h3>
                <p class="main-content-paragraph col-lg-12 text-justify">Program Studi D3 Teknologi Informasi dirancang untuk diselesaikan dalam waktu 3 tahun (6 semester) dengan total beban belajar 110 SKS.</p>
                <ul class="main-content-list col-lg-12 px-3 text-justify">
                    <li><strong>Masa Studi Normal:</strong> 3 Tahun (6 Semester)</li>
                    <li><strong>Beban Belajar:</strong> {{ $totalSKS }} SKS</li>
                    <li><strong>Struktur Kurikulum:</strong> Terdiri dari mata kuliah teori dan praktikum, serta proyek akhir/magang.</li>
                    <li><strong>Pembelajaran Berbasis Proyek:</strong> Sebagian besar mata kuliah menerapkan pendekatan proyek untuk meningkatkan keterampilan praktis mahasiswa.</li>
                </ul>

                <p class="main-content-paragraph col-lg-12 text-justify">Struktur kurikulum yang ada mencakup :</p>
                <ul class="main-content-list col-lg-12 px-3 text-justify">
                    <li>Mata kuliah teori dan praktikum</li>
                    <li>Kerja praktik / magang industri</li>
                    <li>Proyek akhir atau tugas akhir</li>
                </ul>

                <p class="main-content-paragraph col-lg-12 text-left italic-paragraph">*Pengaturan mata kuliah, masa perkuliahan, dan kalender akademik mengikuti kalender akademik Politeknik Negeri Pontianak.</p>
            </div>

            <!-- Persyaratan Masuk -->
            <div class="main-content-card main-content-persyaratan d-flex mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title mb-5 mt-4 col-lg-12">Persyaratan Masuk</h3>
                <p class="main-content-paragraph col-lg-12 text-justify">Untuk dapat diterima di Program Studi D3 Teknologi Informasi, calon mahasiswa harus memenuhi persyaratan sebagai berikut:</p>
                <ul class="main-content-list col-lg-12 px-3 text-justify">
                    <li>Lulusan SMA/SMK/MA atau sederajat.</li>
                    <li>Memiliki nilai rata-rata rapor yang memenuhi standar yang ditetapkan.</li>
                    <li>Lulus ujian seleksi masuk yang diselenggarakan oleh Politeknik Negeri Pontianak.</li>
                    <li>Sehat jasmani dan rohani.</li>
                    <li>Tidak buta warna (untuk beberapa konsentrasi tertentu).</li>
                </ul>
                <p class="main-content-paragraph col-lg-12 text-left ">Informasi lengkap mengenai persyaratan dan prosedur pendaftaran dapat ditemukan di website PMB (Penerimaan Mahasiswa Baru) Politeknik Negeri Pontianak.</p>
                <div class="col-lg-12 px-0 d-flex justify-content-left">
                    <a href="https://spmb.polnep.ac.id/" class="btn btn-main-content mx-3 my-3">Informasi PMB Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
