@extends('layouts.admin')

@section('title', 'Detail Publikasi: ' . $publikasi->judul_publikasi)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('publikasi.index') }}" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali</a>
            <h3 class="section-title mb-0">Detail Publikasi: {{ $publikasi->judul_publikasi }}</h3>
        </div>

        <div class="detail-card">
            <div class="row detail-row">
                <div class="col-12">
                    <h1 class="detail-subtitle text-center">{{ $publikasi->judul_publikasi }}</h1>
                </div>
                <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
                <div class="col-12 mt-3 px-0">
                    <h4 class="detail-subtitle">Abstrak Publikasi:</h4>
                    <p class="detail-text text-justify">{{ $publikasi->abstrak_publikasi ?? 'Tidak tersedia' }}</p>
                </div>
                <div class="col-12 mt-3 px-0">
                    <h4 class="detail-subtitle">Deskripsi Publikasi:</h4>
                    <p class="detail-text text-justify">{{ $publikasi->deskripsi_publikasi ?? 'Tidak tersedia' }}</p>
                </div>
                <div class="col-12 mt-3 px-0">
                    <h4 class="detail-subtitle">Pencipta Publikasi:</h4>
                    <ul class="detail-list pb-3">
                        @forelse($publikasi->dosens as $dosen)
                            <li>{{ $dosen->nama_dosen }}</li>
                        @empty
                            <li>Tidak ada data penulis.</li>
                        @endforelse
                    </ul>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle">Jenis Judul Jurnal & Prosiding:</h4>
                    <p class="detail-text">
                        {{ $publikasi->jurnalProsiding?->jenis_judul_jurnal_prosiding ?? 'Tidak tersedia' }}
                        ({{ $publikasi->jurnalProsiding?->tipe_jurnal_prosiding ?? 'N/A' }})
                    </p>
                    @if($publikasi->jurnalProsiding?->kunjungi_jurnal_dalam_bentuk_url)
                        <a href="{{ $publikasi->jurnalProsiding->kunjungi_jurnal_dalam_bentuk_url }}" target="_blank" class="btn btn-sm btn-info">Kunjungi Jurnal</a>
                    @endif
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('publikasi.edit', $publikasi->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                <form action="{{ route('publikasi.destroy', $publikasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
