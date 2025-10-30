@extends('layouts.admin')

@section('title', 'Detail Data Pengumuman : ' . $pengumuman->judul_pengumuman)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary d-flex align-items-center btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali
            </a>
            <h3 class="section-title mb-0">Detail Data Pengumuman : {{ $pengumuman->judul_pengumuman }}</h3>
        </div>

        <div class="detail-card">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    @if($pengumuman->dokumentasi)
                        <img src="{{ asset('storage/' . $pengumuman->dokumentasi) }}" alt="Dokumentasi Pengumuman" class="img-fluid rounded shadow-sm detail-image">
                    @else
                        <img src="{{ asset('images/default-image.png') }}" alt="Dokumentasi Pengumuman" class="img-fluid rounded shadow-sm detail-image">
                    @endif
                </div>
            </div>
            <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
            <div class="row detail-row">
                <div class="col-12">
                    <h4 class="detail-subtitle-pengumuman">Judul Pengumuman:</h4>
                    <p class="detail-text">{{ $pengumuman->judul_pengumuman }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Isi Pengumuman:</h4>
                    <p class="detail-text">{{ $pengumuman->isi_pengumuman }}</p>
                </div>
                <div class="col-md-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Dokumen:</h4>
                    <p class="detail-text">
                        @if($pengumuman->dokumen)
                            <a href="{{ asset('storage/' . $pengumuman->dokumen) }}" target="_blank" class="text-info">
                                <i class="fas fa-file-pdf mr-2"></i>Lihat Dokumen (PDF)
                            </a>
                        @else
                            <span>-</span>
                        @endif
                    </p>
                </div>
                <div class="col-md-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Tanggal Pengumuman:</h4>
                    <p class="detail-text">{{ \Carbon\Carbon::parse($pengumuman->tanggal_pengumuman)->format('d F Y') }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('pengumuman.edit', $pengumuman->id) }}" class="btn btn-info mr-2 edit-data-btn">
                    <i class="fas fa-edit mr-2"></i>EDIT DATA
                </a>
                <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn">
                        <i class="fas fa-trash-alt mr-2"></i>HAPUS DATA
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
