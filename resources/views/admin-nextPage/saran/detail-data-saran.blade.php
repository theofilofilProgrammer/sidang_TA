@extends('layouts.admin')

@section('title', 'Detail Saran')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-saran-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('saran.index') }}" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali</a>
            <h3 class="section-title mb-0">Detail Saran</h3>
        </div>

        <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
        <div class="detail-card">
            <div class="row detail-row">
                <div class="col-12">
                    <h4 class="detail-subtitle">Pengirim: </h4>
                    <p class="detail-text">{{ $saran->nama_lengkap ?? 'Anonim' }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle">Email: </h4>
                    <p class="detail-text">{{ $saran->alamat_email ?? 'Tidak Ada' }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle">Isi Saran: </h4>
                    <p class="detail-text">{{ $saran->isi_saran }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle">Status: </h4>
                    @if ($saran->status == 'Menunggu Balasan')
                        <span class="badge badge-warning">{{ $saran->status }}</span>
                    @else
                        <span class="badge badge-success">{{ $saran->status }}</span>
                    @endif
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle">Balasan Admin: </h4>
                    <p class="detail-text">{{ $saran->balasan_admin ?? 'Belum dibalas' }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('saran.edit', $saran->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-reply mr-2"></i>BALAS / EDIT</a>
            </div>
        </div>
    </section>
</div>
@endsection
