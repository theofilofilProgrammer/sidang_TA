@extends('layouts.isi_profilprodi.mahasiswa')
@section('title-dataMahasiswa')
Mahasiswa | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-datamahasiswa')
<!-- Hero d-flex berisi button Kembali ke halaman Profil Prodi "Kembali ke halaman Profil Prodi" -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 px-0 mb-0">Data Mahasiswa</h3>
        </div>
    </div>
</section>

<!-- Hero Dosen & Staff (sama menyerupai banner) (Halaman Dosen & Staff) -->
<section class="hero-dataMahasiswa-section d-flex align-items-center mx-0 my-0 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Dosen & Staff -->
            <div class="col-12 text-center">
                <h1 class="hero-dataMahasiswa-title mb-1">Data Mahasiswa</h1>
                <h3 class="hero-dataMahasiswa-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU</h3>
                <h3 class="hero-dataMahasiswa-subtitle mb-0">Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (main kontent)-->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content Kanan -->
        <div class="col-lg-12">
            <!-- Main Content - Jenis-Jenis Data Mahasiswa -->
            <div class="main-content-card main-content-dosen-staff mb-5 py-5 p-4 rounded shadow-sm">
                <h3 class="main-content-title text-left mb-4">Data Mahasiswa</h3>

                <!-- Search and Filter Form -->
                <form method="GET" action="{{ route('frontend.mahasiswa.index') }}" class="col-lg-12 px-0">
                    <div class="d-flex justify-content-between align-items-center mb-4 w-100">
                        <div class="col-md-6 mb-3 mb-md-0 px-0">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control" placeholder="Cari nama Mahasiswa / NIM / Mahasiswa Asal dimana ...." aria-label="Cari nama mahasiswa atau mahasiswa asal" aria-describedby="search-button" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="search-button">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0 pl-3">
                            <select name="mahasiswa_asal" class="form-control" onchange="this.form.submit()">
                                <option value="">Pilih Mahasiswa Asal</option>
                                @foreach($mahasiswa_asal_options as $asal)
                                    <option value="{{ $asal }}" {{ request('mahasiswa_asal') == $asal ? 'selected' : '' }}>{{ $asal }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>

                <div class="row col-lg-12 px-0">
                    @forelse($mahasiswas as $mahasiswa)
                        <div class="badan-kartu-mahasiswa col-lg-4 col-md-6 mb-4 px-0">
                            <div class="mahasiswa-card py-5">
                                @if($mahasiswa->foto_profil_mhs)
                                    <img src="{{ asset('storage/' . $mahasiswa->foto_profil_mhs) }}" alt="{{ $mahasiswa->nama_mahasiswa }}" class="mahasiswa-img rounded-circle mb-3">
                                @else
                                    <img src="{{ asset('images/ProfilDosen_AlumniMahasiswa/Jenis_Mahasiswa/default-avatar.jpg') }}" alt="{{ $mahasiswa->nama_mahasiswa }}" class="mahasiswa-img rounded-circle mb-3">
                                @endif
                                <h3 class="mahasiswa-name">{{ $mahasiswa->nama_mahasiswa }}</h3>
                                <h5 class="mahasiswa-info"><strong>NIM : </strong>{{ $mahasiswa->nim }}</h5>
                                <h5 class="mahasiswa-info"><strong>Asal : </strong>{{ $mahasiswa->mahasiswa_asal ?? 'Tidak diketahui' }}</h5>
                                <h4 class="mahasiswa-bio-title">Motivasi</h4>
                                <p class="mahasiswa-bio-text">{{ Str::limit($mahasiswa->motivasi_mahasiswa ?? 'Motivasi belum diisi', 100) }}</p>
                                <a href="{{ route('frontend.mahasiswa.show', $mahasiswa->id) }}" class="btn btn-profil-lengkap mt-auto">Profil Lengkap</a>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-info text-center">
                                <h4>Tidak ada data mahasiswa yang ditemukan</h4>
                                <p>Belum ada data mahasiswa yang tersedia atau tidak ada yang sesuai dengan pencarian Anda.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
