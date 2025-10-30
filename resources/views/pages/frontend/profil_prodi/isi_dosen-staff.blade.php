@extends('layouts.isi_profilprodi.dosen-staff')
@section('title-dosenStaff')
Dosen & Staf Pengajar | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-dosenStaff')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 px-0 mb-0">Dosen & Staf Pengajar</h3>
        </div>
    </div>
</section>

<!-- Banner -->
<section class="hero-dosenStaff-section d-flex align-items-center mx-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="hero-dosenStaff-title mb-1">Dosen & Staf Pengajar</h1>
                <h3 class="hero-dosenStaff-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU</h3>
                <h3 class="hero-dosenStaff-subtitle mb-0">Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-dosen-staff mb-5 py-5 p-4 rounded shadow-sm">
                <h3 class="main-content-title text-left mb-4">Tim Pengajar dan Pendukung Kami</h3>
                <form method="GET" action="{{ route('frontend.dosen.index') }}" class="row col-lg-12 px-0 mb-4 align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0 px-0">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" placeholder="Cari nama dosen / jenis dosen...." value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="search-button">Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pr-0 pl-3">
                        <select name="jenis_dosen" class="form-control" onchange="this.form.submit()">
                            <option value="">Pilih Jenis Dosen</option>
                            @foreach($jenis_dosen_options as $jenis)
                                <option value="{{ $jenis }}" {{ request('jenis_dosen') == $jenis ? 'selected' : '' }}>{{ $jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
                <div class="row col-lg-12 px-0">
                    @forelse($dosens as $dosen)
                        <div class="col-lg-4 col-md-6 mb-4 px-0">
                            <div class="dosen-card py-5">
                                @if($dosen->foto_profil_dosen)
                                    <img src="{{ asset('storage/' . $dosen->foto_profil_dosen) }}" alt="{{ $dosen->nama_dosen }}" class="dosen-img rounded-circle mb-3">
                                @else
                                    <img src="{{ asset('images/ProfilDosen_AlumniMahasiswa/Dosen/default-avatar.jpg') }}" alt="{{ $dosen->nama_dosen }}" class="dosen-img rounded-circle mb-3">
                                @endif
                                <h3 class="dosen-name">{{ $dosen->nama_dosen }}</h3>
                                <h5 class="dosen-type">{{ $dosen->jenis_dosen }}</h5>
                                <h5 class="dosen-course pb-5">{{ $dosen->bidang_keahlian }}</h5>
                                <h3 class="dosen-bio-title text-justify">Biografi Singkat</h3>
                                <p class="dosen-bio-text text-justify pb-5">{{ Str::limit($dosen->deskripsi_bidang_keahlian, 100) }}</p>
                                <a href="{{ route('frontend.dosen.show', $dosen->id) }}" class="btn btn-profil-lengkap">Profil Lengkap</a>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-info text-center">
                                <h4>Tidak ada data dosen yang ditemukan</h4>
                                <p>Belum ada data dosen yang tersedia atau tidak ada yang sesuai dengan pencarian Anda.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
