{{-- filepath: resources/views/admin-nextPage/kegiatan/detail-kegiatan.blade.php --}}
@extends('layouts.admin')

@section('title', 'Detail Data Kegiatan : ' . $kegiatan->nama_kegiatan)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('kegiatan.index') }}" class="btn btn-secondary d-flex align-items-center btn-sm back-button px-3 py-2 mr-5">
                <i class="fas fa-chevron-left pr-3"></i> Kembali
            </a>
            <h3 class="section-title mb-0">Detail Data Kegiatan : {{ $kegiatan->nama_kegiatan }}</h3>
        </div>

        <div class="detail-card">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    @if($kegiatan->dokumentasi)
                        <img src="{{ asset('storage/' . $kegiatan->dokumentasi) }}" alt="Dokumentasi Kegiatan" class="img-fluid detail-image col-12 px-0">
                    @else
                        <img src="{{ asset('images/default-image.png') }}" alt="Dokumentasi Kegiatan" class="img-fluid detail-image col-12 px-0">
                    @endif
                </div>
            </div>
            <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
            <div class="row detail-row">
                <div class="col-12">
                    <h4 class="detail-subtitle-pengumuman">Judul Kegiatan :</h4>
                    <p class="detail-text">{{ $kegiatan->nama_kegiatan }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Deskripsi Kegiatan :</h4>
                    <p class="detail-text">{{ $kegiatan->deskripsi_kegiatan }}</p>
                </div>
                <div class="col-md-12 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Tanggal Kegiatan :</h4>
                    <p class="detail-text">{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d F Y') }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
