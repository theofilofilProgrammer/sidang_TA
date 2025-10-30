<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Program Studi D3 Teknologi Informasi</title>
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

    <!-- Breadcrumb -->
    <section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
        <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/profil-prodi" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                    <i class="fas fa-arrow-left mr-3"></i> Kembali ke Halaman Profil Prodi
                </a>
            </div>
            <div class="hero-breadcrumb-title-container col-lg-10 text-left">
                <h3 class="hero-breadcrumb-title ml-4 mb-0">Sejarah Lengkap</h3>
            </div>
        </div>
    </section>

    <!-- Hero Banner untuk Sejarah Lengkap -->
    <section class="hero-sejarah-lengkap-section d-flex align-items-center my-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="hero-sejarah-lengkap-title mb-1">Sejarah Lengkap Program Studi D3 Teknologi Informasi</h1>
                    <h3 class="hero-sejarah-lengkap-subtitle mb-0">PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Konten Utama -->
    <div class="container col-lg-12 px-0">
        <section class="main-content-section col-lg-12 col-md-12 container py-5">
            <div class="main-content-card main-content-sejarah-lengkap mb-4 p-5 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-3 pb-4 text-center">Perjalanan Kami Membangun Masa Depan Teknologi</h3>
                <div class="row col-lg-12 mx-auto">
                    <div class="col-12 px-0 text-justify">
                        <p class="main-content-paragraph">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara memiliki sejarah panjang dalam mencetak talenta-talenta unggul di bidang teknologi informasi. Berawal dari inisiatif untuk memenuhi kebutuhan sumber daya manusia yang kompeten di era digital, program studi ini didirikan pada tahun 2023 sebagai respons terhadap pesatnya perkembangan Teknologi Informasi dan Komunikasi (TIK) di Indonesia, khususnya di Kalimantan Barat.</p>
                        <p class="main-content-paragraph">Pada awal berdirinya, kami fokus pada pengembangan kurikulum yang adaptif dan relevan dengan tuntutan industri. Dengan dukungan penuh dari Politeknik Negeri Pontianak, kami berhasil membangun fasilitas laboratorium yang memadai dan merekrut staf pengajar yang memiliki keahlian dan pengalaman di berbagai bidang TIK. Komitmen kami terhadap pendidikan vokasi yang berkualitas tinggi telah menarik minat banyak calon mahasiswa dari berbagai daerah.</p>
                        <p class="main-content-paragraph">Seiring berjalannya waktu, Program Studi D3 Teknologi Informasi terus berinovasi. Kami memperluas jaringan kerjasama dengan berbagai perusahaan teknologi, lembaga pemerintah, dan komunitas lokal untuk memberikan pengalaman belajar yang lebih komprehensif bagi mahasiswa. Program magang industri, proyek kolaboratif, dan partisipasi dalam kompetisi nasional menjadi bagian integral dari proses pendidikan kami, memastikan lulusan kami tidak hanya menguasai teori, tetapi juga memiliki keterampilan praktis yang siap pakai.</p>
                        <p class="main-content-paragraph">Hingga saat ini, kami bangga dengan ribuan alumni yang telah sukses berkarier di berbagai sektor, baik di tingkat nasional maupun internasional. Mereka adalah bukti nyata dari keberhasilan kami dalam mencetak profesional TIK yang handal dan berdaya saing. Kami akan terus berkomitmen untuk menjadi garda terdepan dalam pendidikan teknologi informasi, beradaptasi dengan perubahan zaman, dan berkontribusi pada kemajuan bangsa.</p>
                    </div>
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
