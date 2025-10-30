@extends('layouts.isi_profilprodi.sambutan_kaprodi')
@section('title-profil')
Sambutan Kaprodi | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-sambutanKaprodi')
<!-- Hero d-flex berisi button Kembali ke halaman Profil Prodi "Kembali ke halaman Profil Prodi" -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 px-0 mb-0">Sambutan Ketua Program Studi</h3>
        </div>
    </div>
</section>


<!-- Bagian content (main kontent)-->
<section class="main-content-section container my-0 p-0 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content Kanan -->
        <div class="col-lg-12 px-0">
            <!-- Main Content - profil Sambutan Kepala Program Studi -->
            <div class="main-content-card main-content-sambutan-kaprodi mb-5 py-5 p-4 shadow-sm">
                <div class="d-flex align-items-center justify-content-left mb-4 px-0 py-0 col-lg-12">
                    @if($kaprodi && $kaprodi->foto_profil_dosen)
                        <img src="{{ asset('storage/' . $kaprodi->foto_profil_dosen) }}" alt="Foto Kaprodi" class="img-fluid rounded mr-5 kaprodi-profile-pic">
                    @else
                        <img src="{{ asset('images/ProfilDosen_AlumniMahasiswa/Dosen/default-avatar.jpg') }}" alt="Foto Kaprodi" class="img-fluid rounded mr-5 kaprodi-profile-pic">
                    @endif
                    <div class="text-left px-5 ml-5 col-lg-8">
                        <h4 class="kaprodi-name mb-0">{{ $kaprodi->nama_dosen ?? '-' }}</h4>
                        <p class="kaprodi-title mb-0">Ketua Program Studi D3 Teknologi Informasi</p>
                        <p class="kaprodi-campus mb-0">PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</p>
                    </div>
                </div>
                <div class="col-lg-12 px-0 py-3">
                    <p class="font-italic text-justify mb-3 col-lg-12 px-0">Assalamualaikum Warahmatullahi Wabarakatuh.</p>
                    {{-- Anda bisa menambahkan field sambutan di database, atau tetap hardcode di sini --}}
                    <p class="text-justify mb-3 px-0">
                        {{ $kaprodi->sambutan ?? 'Selamat datang di halaman Program Studi D3 Teknologi Informasi, PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara. Merupakan suatu kehormatan bagi saya untuk menyambut Anda di platform digital kami, sebuah gerbang informasi menuju dunia teknologi yang dinamis dan penuh inovasi. Di era Revolusi Industri 4.0 dan Society 5.0 saat ini, teknologi informasi telah menjadi pilar utama kemajuan di berbagai sektor kehidupan. Kami, Program Studi D3 Teknologi Informasi, berkomitmen penuh untuk mencetak talenta digital yang tidak hanya menguasai teori, namun juga memiliki keterampilan praktis yang adaptif dan relevan dengan kebutuhan industri. Kurikulum kami didesain secara komprehensif, mencakup bidang-bidang krusial seperti pengembangan perangkat lunak, sistem jaringan, keamanan siber, dan analisis data. Kami meyakini bahwa pendidikan vokasi adalah fondasi kuat untuk masa depan yang cerah. Oleh karena itu, kami menyediakan fasilitas laboratorium yang modern dan lengkap, serta didukung oleh tim pengajar yang terdiri dari akademisi dan praktisi berpengalaman. Mereka akan membimbing setiap mahasiswa untuk menjadi individu yang kreatif, inovatif, dan mampu memberikan solusi nyata bagi tantangan teknologi di masa depan. Partisipasi aktif dan umpan balik dari seluruh sivitas akademika, mitra industri, dan masyarakat sangat kami hargai. Bersama-sama, mari kita bangun ekosistem pendidikan yang unggul dan berkelanjutan. Terima kasih atas kunjungan Anda. Semoga informasi yang Anda temukan di sini bermanfaat dan menginspirasi.' }}
                    </p>
                    {{-- ...paragraf lain bisa tetap hardcode atau dari database --}}
                    <p class="font-italic text-justify mb-0 px-0">Wassalamualaikum Warahmatullahi Wabarakatuh.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
