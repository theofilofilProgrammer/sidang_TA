@extends('layouts.pengumuman')
@section('title-pengumuman')
Pengumuman | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection
@section('isi-pengumuman')
<section class="hero-pengumuman-section d-flex align-items-center mx-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="hero-pengumuman-title mb-1">Halaman Pengumuman</h1>
                <h3 class="hero-pengumuman-subtitle mb-0">Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak<br>di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<section class="main-content-section container my-0 py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="news-announcement-header text-center mb-5 mx-auto">
                <h1 class="news-announcement-title">Pengumuman Terbaru</h1>
                <hr class="news-announcement-hr my-3 mx-auto">
                <p class="news-announcement-paragraph text-left my-5 mx-auto">Temukan informasi terkini seputar pengumuman penting, serta berbagai pengumuman acara menarik di Program Studi D3 Teknologi Informasi PDSKU Politeknik Negeri Pontianak di Kabupaten Sukamara.</p>
            </div>
            <div class="main-content-card main-content-semuaPengumuman mb-4 p-4 rounded shadow-sm">
                <h3 class="main-content-title col-12 px-0 text-center">Daftar Lengkap Pengumuman</h3>
                <hr class="mb-4 mt-1 px-0 col-12">
                <form class="row col-lg-12 px-0 mb-4 align-items-center" method="GET" action="{{ route('frontend.pengumuman') }}">
                    <div class="col-md-10 mb-3 mb-md-0 px-0">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" placeholder="Cari judul pengumuman, tahun, atau kata kunci..." value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="search-button">Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 pr-0 pl-3">
                        <select name="tahun_pengumuman" class="form-control" onchange="this.form.submit()">
                            <option value="">Semua Tahun</option>
                            @foreach($tahun_options as $tahun)
                                <option value="{{ $tahun }}" {{ request('tahun_pengumuman') == $tahun ? 'selected' : '' }}>{{ $tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
                <div class="row">
                    @forelse($pengumumans as $pengumuman)
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="daftar-pengumuman-card text-justify">
                            <img src="{{ $pengumuman->dokumentasi ? asset('storage/' . $pengumuman->dokumentasi) : asset('images/default-image.png') }}" class="card-img-top news-card-image" alt="Gambar Pengumuman">
                            <div class="card-body py-2 px-0">
                                <h4 class="daftar-pengumuman-title mt-5">{{ $pengumuman->judul_pengumuman }}</h4>
                                <p class="daftar-pengumuman-tanggal"><strong>Tanggal</strong> : {{ \Carbon\Carbon::parse($pengumuman->tanggal_pengumuman)->format('d F Y') }}</p>
                                <p class="daftar-pengumuman-paragraf">{{ Str::limit($pengumuman->isi_pengumuman, 120) }}</p>
                                <div class="col-lg-12 px-0 d-flex justify-content-between">
                                    <a href="{{ route('frontend.pengumuman.show', $pengumuman->id) }}" class="btn btn-baca-selengkapnya-pengumuman mt-auto">Baca Selengkapnya</a>
                                    @if($pengumuman->dokumen)
                                    <a href="{{ asset('storage/' . $pengumuman->dokumen) }}" target="_blank" class="btn btn-unduh-pengumuman mt-auto">Unduh Dokumen</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">Belum ada data pengumuman.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
