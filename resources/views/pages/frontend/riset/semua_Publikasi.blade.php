@extends('layouts.isi-riset.jurnal-publikasi')
@section('title-jurnalpublikasi')
Semua Publikasi | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-jurnalpublikasi')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('jurnal-publikasi.index') }}" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                <i class="fas fa-arrow-left mr-3"></i> Kembali ke Jurnal & Publikasi</a>
        </div>
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title ml-4 mb-0">Lihat Semua Publikasi</h3>
        </div>
    </div>
</section>

<section class="main-content-section container my-0 p-0 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-semuaPublikasi mb-4 p-4">
                <div class="d-flex justify-content-justify align-items-center mb-4 col-12 px-0">
                    <h3 class="main-content-title mb-0">
                        @if($search)
                            Hasil Pencarian Publikasi
                        @else
                            Daftar Lengkap Publikasi
                        @endif
                    </h3>
                    {{-- <span class="badge badge-info badge-pill">{{ $publikasis->total() }} publikasi</span> --}}
                </div>
                <hr class="mb-4 mt-1 px-0 col-12">
                <p class="main-content-paragraph text-justify">Berikut adalah daftar lengkap publikasi ilmiah yang dihasilkan oleh dosen dan mahasiswa Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara. Publikasi ini mencakup berbagai topik inovatif dan riset terapan di bidang teknologi informasi.</p>

                <div class="card-body col-12 px-0 mb-4">
                    <form method="GET" action="{{ route('semua.publikasi') }}" class="row">
                        <div class="col-md-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input type="text"
                                        class="form-control"
                                        name="search"
                                        value="{{ $search }}"
                                        placeholder="Cari publikasi berdasarkan judul, abstrak, penulis, atau jurnal...">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-search mr-1"></i>Cari
                            </button>
                        </div>
                    </form>
                    @if($search)
                        <div class="mt-3">
                            <small class="text-muted">
                                Menampilkan hasil pencarian untuk: <strong>"{{ $search }}"</strong>
                                <a href="{{ route('semua.publikasi') }}" class="ml-2 text-primary">
                                    <i class="fas fa-times"></i> Hapus filter
                                </a>
                            </small>
                        </div>
                    @endif
                </div>

                @if($publikasis->count() > 0)
                    <div class="row"> {{-- Perbaikan di sini: Tambahkan class `row` untuk menampung kartu --}}
                        @foreach ($publikasis as $publikasi)
                        <div class="col-lg-6 col-md-6 mb-4"> {{-- Perbaikan di sini: Pindahkan kelas col-6 ke div ini --}}
                            <div class="publikasi-card text-justify rounded shadow-sm p-4 border-left border-primary h-100"> {{-- Tambahkan h-100 agar tinggi kartu sama --}}
                                <div class="row">
                                    <div class="col-12">
                                        {{-- Judul Publikasi --}}
                                        <h4 class="publikasi-title mb-2">
                                            <a href="{{ route('desc.jurnalPublikasi', $publikasi->id) }}"
                                               class="text-decoration-none">
                                                {{ $publikasi->judul_publikasi }}
                                            </a>
                                        </h4>
                                        <p class="publikasi-penulis mb-2">
                                            <i class="fas fa-users mr-1"></i>Penulis:
                                            @foreach ($publikasi->dosens as $dosen)
                                                {{ $dosen->nama_dosen }}@if (!$loop->last), @endif
                                            @endforeach
                                        </p>
                                        <p class="publikasi-jenis font-italic mb-2">
                                            <i class="fas fa-book mr-1"></i>Jurnal/Prosiding:
                                            {{ $publikasi->jurnalProsiding->jenis_judul_jurnal_prosiding }}
                                            ({{ \Carbon\Carbon::parse($publikasi->created_at)->year }}) -
                                            {{ $publikasi->jurnalProsiding->tipe_jurnal_prosiding }}
                                        </p>
                                        @if($publikasi->abstrak_publikasi)
                                            <p class="publikasi-abstract mb-3">
                                                {{ Str::limit($publikasi->abstrak_publikasi, 200) }}
                                            </p>
                                        @endif
                                        <div class="col-md-12 px-0 d-flex align-items-between justify-content-between">
                                            <a href="{{ route('desc.jurnalPublikasi', $publikasi->id) }}"
                                            class="btn btn-baca-selengkapnya-daftar mt-auto">Baca Selengkapnya</a>
                                        </div>
                                        {{-- <div class="publikasi-date text-center mt-2">
                                            <small class="text-muted">
                                                <i class="fas fa-calendar mr-1"></i>
                                                {{ \Carbon\Carbon::parse($publikasi->created_at)->format('d M Y') }}
                                            </small>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        {{ $publikasis->links() }}
                    </div>
                @else
                    <div class="text-center py-5">
                        <div class="mb-4">
                            <i class="fas fa-search fa-3x text-muted"></i>
                        </div>
                        <h5 class="text-muted mb-3">
                            @if($search)
                                Tidak ada publikasi yang ditemukan untuk pencarian "{{ $search }}"
                            @else
                                Belum ada publikasi yang tersedia
                            @endif
                        </h5>
                        @if($search)
                            <a href="{{ route('semua.publikasi') }}" class="btn btn-primary">
                                <i class="fas fa-list mr-2"></i>Lihat Semua Publikasi
                            </a>
                        @else
                            <a href="{{ route('jurnal-publikasi.index') }}" class="btn btn-primary">
                                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Jurnal & Publikasi
                            </a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
