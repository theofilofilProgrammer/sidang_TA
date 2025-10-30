@extends('layouts.admin')

@section('title', 'Detail Data Mahasiswa : ' . $mahasiswa->nama_mahasiswa)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali</a>
            <div class="col-8">
                <h3 class="section-title mb-2">Detail Data Mahasiswa : {{ $mahasiswa->nama_mahasiswa }}</h3>
                <h6 class="current-time" style="font-size: 1.5rem;" id="currentTime">13:57:10</h6>
            </div>
        </div>

        <div class="detail-card">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    @if($mahasiswa->foto_profil_mhs)
                        <img src="{{ asset('storage/' . $mahasiswa->foto_profil_mhs) }}" alt="Foto Profil" class="profile-detail-pic mb-3">
                    @else
                        <img src="{{ asset('images/default-profile.png') }}" alt="Foto Profil" class="profile-detail-pic mb-3">
                    @endif
                </div>
                <div class="col-md-9 text-justify">
                    <h4 class="student-name">{{ $mahasiswa->nama_mahasiswa }}</h4>
                    <p class="student-info"><strong>NIM :</strong> {{ $mahasiswa->nim }}</p>
                    <p class="student-info"><strong>Jenis Kelamin :</strong><br>{{ $mahasiswa->jenis_kelamin ?? '-' }}</p>
                    <p class="student-info"><strong>Email Mahasiswa :</strong><br>{{ $mahasiswa->email_mahasiswa }}</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="row detail-row">
                <div class="col-md-6">
                    <p><strong>Agama :</strong><br>{{ $mahasiswa->agama_mahasiswa ?? '-' }}</p>
                    <p><strong>No. Telepon :</strong><br>{{ $mahasiswa->no_telp_mahasiswa ?? '-' }}</p>
                    <p><strong>Tempat, Tanggal Lahir :</strong><br>{{ $mahasiswa->tempat_lahir ?? '-' }}, {{ $mahasiswa->tanggal_lahir ? \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d F Y') : '-' }}</p>
                    <p><strong>Mahasiswa Asal :</strong><br>{{ $mahasiswa->mahasiswa_asal ?? '-' }}</p>
                    <p><strong>Tempat Tinggal :</strong><br>{{ $mahasiswa->tinggal_mahasiswa ?? '-' }}</p>
                    <p><strong>Riwayat Pendidikan :</strong><br>
                        <ul class="main-content-list text-dark">
                            <li>Sekolah Dasar: {{ $mahasiswa->nama_sekolah_dasar ?? '-' }}</li>
                            <li>Sekolah Menengah Pertama: {{ $mahasiswa->nama_menengah_pertama ?? '-' }}</li>
                            <li>Sekolah Menengah Atas: {{ $mahasiswa->nama_sekolah_atas ?? '-' }}</li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-6">
                    <h5><strong>Detail Akademik :</strong></h5>
                    <p><strong>Semester :</strong><br>{{ $mahasiswa->semester ?? '-' }}</p>
                    <p><strong>IPK :</strong><br>{{ $mahasiswa->ipk ?? '-' }}</p>
                    <p><strong>Motivasi Mahasiswa :</strong><br>{{ $mahasiswa->motivasi_mahasiswa ?? '-' }}</p>
                    <hr class="my-4">
                    <h5><strong>Detail Orang Tua Mahasiswa :</strong></h5>
                    <p><strong>Nama Ayah :</strong><br>{{ $mahasiswa->nama_ayah ?? '-' }}</p>
                    <p><strong>Pekerjaan Ayah :</strong><br>{{ $mahasiswa->pekerjaan_ayah ?? '-' }}</p>
                    <p><strong>Nama Ibu :</strong><br>{{ $mahasiswa->nama_ibu ?? '-' }}</p>
                    <p><strong>Pekerjaan Ibu :</strong><br>{{ $mahasiswa->pekerjaan_ibu ?? '-' }}</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="alumni-info pb-5">
                <p><strong>Pekerjaan bagi Mahasiswa :</strong><br>{{ $mahasiswa->pekerjaan_bagi_mahasiswa ?? '-' }}</p>
                <p><strong>Deskripsi pekerjaan bagi Mahasiswa :</strong><br>{{ $mahasiswa->deskripsi_pekerjaan ?? '-' }}</p>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
