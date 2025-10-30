@extends('layouts.isi-riset.jurnal-publikasi.txt')
@extends('layouts.isi-riset.jurnal-publikasi')
@section('title-jurnalpublikasi')
{{ $publikasi->judul_publikasi }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-jurnalpublikasi')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('frontend.publikasi.index') }}" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                <i class="fas fa-arrow-left mr-3"></i> Kembali ke Halaman Publikasi</a>
        </div>
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title ml-4 mb-0">{{ $publikasi->judul_publikasi }}</h3>
        </div>
    </div>
</section>

<section class="main-content-section container my-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content-card main-content-deskripsi-dataPublikasi mb-4 p-4 rounded shadow-sm">
                <h3 class="data-publikasi-title col-12 px-0">{{ $publikasi->judul_publikasi }}</h3>
                <p class="data-publikasi-penulis col-12 px-0"><strong>Penulis :</strong>
                    @foreach($publikasi->dosens as $dosen)
                        {{ $dosen->nama_dosen }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </p>
                <p class="data-publikasi-jurnal col-12 px-0"><strong>Jurnal / Prosiding :</strong> <i>{{ $publikasi->jenis_judul_jurnal_prosiding }} ({{ $publikasi->tahun_publikasi }}) - {{ $publikasi->tipe_jurnal_prosiding }}</i></p>

                <h4 class="data-publikasi-abstrak-title col-12 px-0 mb-0">Abstrak :</h4>
                <hr class="col-lg-12 col-md-12 px-0 mb-0">
                <p class="data-publikasi-abstrak-content col-12 px-0 mt-2">
                    {{ $publikasi->abstrak_publikasi }}
                </p>

                <h4 class="data-publikasi-deskripsi-title col-12 px-0 mb-0">Deskripsi :</h4>
                <hr class="col-lg-12 col-md-12 px-0 mb-0">
                <p class="data-publikasi-deskripsi-content text-justify col-12 px-0 mt-2">
                    {!! nl2br(e($publikasi->deskripsi_publikasi)) !!}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
