@extends('layouts.admin')

@section('title', 'Detail Data Jaringan Kerja Sama & Kemitraan : ' . $jaringan->nama_jaringan_kerjasama)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('jaringan-kerjasama.index') }}" class="btn btn-secondary d-flex align-items-center btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali</a>
            <h3 class="section-title mb-0">Detail Data Jaringan Kerjasama : {{ $jaringan->nama_jaringan_kerjasama }}</h3>
        </div>
        <div class="detail-card">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    @if($jaringan->gambar_perusahaan)
                        <img src="{{ asset('storage/' . $jaringan->gambar_perusahaan) }}" alt="Gambar Perusahaan" class="img-fluid rounded shadow-sm detail-image" style="max-width:220px;">
                    @else
                        <img src="{{ asset('images/default-image.png') }}" alt="Gambar Perusahaan" class="img-fluid rounded shadow-sm detail-image" style="max-width:220px;">
                    @endif
                </div>
            </div>
            <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
            <div class="row detail-row">
                <div class="col-md-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Nama Kemitraan:</h4>
                    <p class="detail-text">{{ $jaringan->nama_jaringan_kerjasama }}</p>
                </div>
                <div class="col-md-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Jenis Kemitraan:</h4>
                    <p class="detail-text">{{ $jaringan->jenis_kemitraan }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Pengertian Kemitraan & Jaringan Kerjasama:</h4>
                    <p class="detail-text">{{ $jaringan->pengertian_jaringan_kerjasama }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('jaringan-kerjasama.edit', $jaringan->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" action="{{ route('jaringan-kerjasama.destroy', $jaringan->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
