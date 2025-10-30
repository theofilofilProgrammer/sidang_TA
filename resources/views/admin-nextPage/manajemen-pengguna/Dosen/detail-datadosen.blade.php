@extends('layouts.admin')

@section('title', 'Detail Data Dosen : ' . $dosen->nama_dosen)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataDosen-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('dosen.index') }}" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali</a>
            <div class="col-8">
                <h3 class="section-title mb-2">Detail Data Dosen : {{ $dosen->nama_dosen }}</h3>
                <h6 class="current-time" style="font-size: 1.5rem;" id="currentTime">13:57:10</h6>
            </div>
        </div>

        <div class="detail-card">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    @if($dosen->foto_profil_dosen)
                        <img src="{{ asset('storage/' . $dosen->foto_profil_dosen) }}" alt="Foto Profil" class="profile-detail-pic mb-3">
                    @else
                        <img src="{{ asset('images/default-profile.png') }}" alt="Foto Profil" class="profile-detail-pic mb-3">
                    @endif
                </div>
                <div class="col-md-9 text-justify">
                    <h4 class="student-name">{{ $dosen->nama_dosen }}</h4>
                    <p class="student-info"><strong>NIDN :</strong> {{ $dosen->nidn }}</p>
                    <p class="student-info"><strong>Jenis Dosen :</strong><br>{{ $dosen->jenis_dosen ?? '-' }}</p>
                    <p class="student-info"><strong>Tempat, Tanggal Lahir :</strong><br>{{ $dosen->tempat_lahir ?? '-' }}, {{ $dosen->tanggal_lahir ? \Carbon\Carbon::parse($dosen->tanggal_lahir)->format('d F Y') : '-' }}</p>
                </div>
            </div>
            <hr class="border border-3 border-dark my-4">
            <div class="row detail-row">
                <div class="col-md-6">
                    <p><strong>Email :</strong><br>{{ $dosen->e_mail_dosen ?? '-' }}</p>
                    <p><strong>No. Telepon :</strong><br>{{ $dosen->no_telp_dosen ?? '-' }}</p>
                    <p><strong>Status Kepegawaian :</strong><br>{{ $dosen->status_kepegawaian ?? '-' }}</p>
                    <p><strong>Bidang Keahlian Utama :</strong><br>{{ $dosen->bidang_keahlian ?? '-' }}</p>
                    <p class="text-justify"><strong>Deskripsi Bidang Keahlian :</strong><br>{{ $dosen->deskripsi_bidang_keahlian ?? '-' }}</p>
                </div>
                <div class="col-md-6">
                    <p class="text-justify"><strong>Tempat Tinggal :</strong><br>{{ $dosen->tempat_tinggal_dosen ?? '-' }}</p>
                    <p class="text-justify"><strong>Visi Dosen :</strong><br>{{ $dosen->visi_dosen ?? '-' }}</p>
                    <p class="text-justify"><strong>Misi Dosen :</strong><br>{{ $dosen->misi_dosen ?? '-' }}</p>
                </div>
            </div>
            <hr class="border border-3 border-dark my-4">
            <h5 class="section-subtitle mb-3">Pendidikan Terakhir : </h5>
            <div class="row detail-row">
                <div class="col-md-6">
                    <p><strong>Riwayat Pendidikan Terakhir :</strong><br>{{ $dosen->riwayat_pendidikan ?? '-' }}</p>
                    <p><strong>Perguruan Tinggi :</strong><br>{{ $dosen->perguruan_tinggi ?? '-' }}</p>
                </div>
                <div class="col-md-6">
                    <p class="text-justify"><strong>Bidang Keahlian Pendidikan :</strong><br>{{ $dosen->bidang_keahlian_pendidikan ?? '-' }}</p>
                    <p class="text-justify"><strong>Minat Penelitian :</strong><br>{{ $dosen->minat_penelitian ?? '-' }}</p>
                </div>
            </div>
            <hr class="border border-3 border-dark my-4">

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
