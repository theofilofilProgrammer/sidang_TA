@extends('layouts.home')
@section('title')
Homepage User | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection
@section('isi-homeUser')
<!-- Hero Banner -->
<section class="hero-banner-section d-flex align-items-center mx-0 my-0 pb-5">
    <div class="hero-content-overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center text-md-left mb-4 mb-md-0">
                    <img src="images/logo_prodiTI.png" alt="Logo D3 Teknologi Informasi" class="img-fluid hero-logo">
                </div>

                <div class="col-md-7 text-center text-md-left">
                    <h1 class="hero-title mb-3 mx-auto">SELAMAT DATANG DI PROGRAM STUDI D3 TEKNOLOGI INFORMASI</h1>
                    <h2 class="hero-subtitle mb-3 mx-auto">PSDKU POLITEKNIK NEGERI PONTIANAK DI KABUPATEN SUKAMARA</h2>
                    <p class="hero-text mb-5 mt-5 mx-auto">
                        Mencetak talenta digital unggul yang siap menghadapi<br>
                        tantangan industri 4.0 dengan pendidikan berkualitas<br>
                        dan inovasi tiada henti.
                    </p>
                    <a href="#jelajahsekarang" class="btn btn-jelajahi-hero btn-lg px-5 py-3 rounded-pill text-white d-block mx-auto">Jelajahi Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-frame">
        <div class="slide-images">
            <div class="img-container"><img src="images/kampusPSDKUPOLNEP_Sukamara.jpg" alt="Kampus PSDKU Polnep Sukamara 1"></div>
            <div class="img-container"><img src="images/banner_PSDKU_sukamara_part2.jpg" alt="Kampus PSDKU Polnep Sukamara 2"></div>
            <div class="img-container"><img src="images/banner_PSDKU_sukamara_part3.jpg" alt="Kampus PSDKU Polnep Sukamara 3"></div>
            <div class="img-container"><img src="images/banner_PSDKU_sukamara_part4.jpg" alt="Kampus PSDKU Polnep Sukamara 4"></div>
            <div class="img-container"><img src="images/banner_PSDKU_sukamara_part5.jpg" alt="Kampus PSDKU Polnep Sukamara 5"></div>
            <div class="img-container"><img src="images/banner_PSDKU_sukamara_part6.jpg" alt="Kampus PSDKU Polnep Sukamara 6"></div>
            <div class="img-container"><img src="images/banner_PSDKU_sukamara_part7.jpg" alt="Kampus PSDKU Polnep Sukamara 7"></div>
            </div>
    </div>
</section>


<!-- d-flex justify-content-between -->
<div class="col-lg-12 px-0" id="jelajahsekarang">
    <section class="main-content-section col-lg-12 col-md-12 container py-5 px-0">
        <div class="main-content-card main-content-deskripsi-utama p-5 shadow-sm">
            <h3 class="main-content-title col-12 px-3 pb-4 text-center">Mengenal Lebih Dekat Program Studi Kami</h3>
            <div class="row rowParagrafdesc col-lg-12 mx-auto">
                <div class="col-12 px-0 text-justify">
                    <p class="main-content-paragraph">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara didirikan dengan visi untuk menjadi pusat pendidikan vokasi unggulan yang menghasilkan tenaga ahli di bidang teknologi informasi yang kompeten, inovatif, dan berdaya saing global.</p>
                    <p class="main-content-paragraph">Kami berkomitmen untuk menyediakan kurikulum yang relevan dengan kebutuhan industri, didukung oleh fasilitas laboratorium modern dan staf pengajar yang berkualitas. Mahasiswa kami tidak hanya dibekali dengan teori, tetapi juga pengalaman praktis melalui proyek-proyek riil, magang industri, dan berbagai kegiatan ekstrakurikuler yang mendukung pengembangan soft skills.</p>
                    <p class="main-content-paragraph">Lulusan kami siap untuk berkontribusi dalam berbagai sektor industri, mulai dari pengembangan perangkat lunak, jaringan komputer, keamanan siber, hingga multimedia dan kreatif. Kami terus berinovasi dan menjalin kerjasama dengan berbagai pihak untuk memastikan relevansi pendidikan kami dengan perkembangan teknologi dan kebutuhan pasar kerja.</p>
                    <p class="main-content-paragraph">Bergabunglah dengan kami dan jadilah bagian dari generasi penerus yang akan membentuk masa depan teknologi informasi di Indonesia.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
