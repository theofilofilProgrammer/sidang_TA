@extends('layouts.admin')

@section('title', 'Detail Data Prestasi & Penghargaan : ' . $prestasi->judul_prestasi_penghargaan)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('prestasi.index') }}" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali</a>
            <h3 class="section-title mb-0">{{ $prestasi->judul_prestasi_penghargaan }}</h3>
        </div>

        <div class="detail-card">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    @if ($prestasi->dokumentasi)
                        <img src="{{ asset('storage/' . $prestasi->dokumentasi) }}" alt="{{ $prestasi->judul_prestasi_penghargaan }}" class="img-fluid rounded shadow-sm detail-image">
                    @else
                        <span class="text-muted">Tidak ada dokumentasi.</span>
                    @endif
                </div>
            </div>
            <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
            <div class="row detail-row">
                <div class="col-12">
                    <h4 class="detail-subtitle-pengumuman">Judul Prestasi & Penghargaan :</h4>
                    <p class="detail-text">{{ $prestasi->judul_prestasi_penghargaan }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Deskripsi Prestasi :</h4>
                    <p class="detail-text">{{ $prestasi->deskripsi_prestasi_penghargaan }}</p>
                </div>
                <div class="col-md-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Kategori :</h4>
                    <p class="detail-text">{{ $prestasi->kategori_prestasi_penghargaan }}</p>
                </div>
                <div class="col-md-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Tahun Prestasi / Penghargaan :</h4>
                    <p class="detail-text">{{ $prestasi->tahun_prestasi_penghargaan }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
