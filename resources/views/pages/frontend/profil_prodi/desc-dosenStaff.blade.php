@extends('layouts.isi_profilprodi.desc-dosenStaff')
@section('title-desc-dataDosenStaff')
{{ $dosen->nama_dosen }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-desc-dataDosenStaff')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('frontend.dosen.index') }}" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                <i class="fas fa-arrow-left mr-3"></i> Kembali ke halaman Dosen & Staf Pengajar</a>
        </div>
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title ml-4 mb-0">Profil Dosen : {{ $dosen->nama_dosen }}</h3>
        </div>
    </div>
</section>

<section class="main-content-section container my-0 py-0 pb-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content - Profil Dosen Lengkap -->
        <div class="col-lg-12 px-0">
            <div class="main-content-card main-content-dosen-profile mb-5 py-5">
                <div class="d-flex align-items-center col-lg-8 my-5">
                    <div class="image-profilDosen pr-3">
                        @if($dosen->foto_profil_dosen)
                            <img src="{{ asset('storage/' . $dosen->foto_profil_dosen) }}" alt="{{ $dosen->nama_dosen }}" class="dosen-profile-pic rounded-circle mr-4">
                        @else
                            <img src="{{ asset('images/ProfilDosen_AlumniMahasiswa/Dosen/default-avatar.jpg') }}" alt="{{ $dosen->nama_dosen }}" class="dosen-profile-pic rounded-circle mr-4">
                        @endif
                    </div>
                    <div class="col-lg-12 px-5">
                        <h3 class="dosen-profile-name text-light mb-3">{{ $dosen->nama_dosen }}</h3>
                        <table class="table-dosen-biodata col-12">
                            <tr>
                                <td class="info-label text-light">NIDN</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $dosen->nidn }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Jenis Dosen</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $dosen->jenis_dosen }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Bidang Keahlian</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $dosen->bidang_keahlian }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Status Kepegawaian</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $dosen->status_kepegawaian }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Email Dosen</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $dosen->e_mail_dosen }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="row">
                <!-- Kolom Kiri - Detail Pribadi -->
                <div class="col-lg-6 mb-5">
                    <div class="main-content-card main-content-dosen-detail p-4 rounded shadow-sm">
                        <div class="col-lg-12 px-0 py-2">
                            <h4 class="detail-title mb-3 text-left">Detail Pribadi</h4>
                            <table class="table-dosen-biodata">
                                <tr>
                                    <td class="info-label">Tempat, Tanggal Lahir :</td>
                                    <td class="info-titikkoma" style="vertical-align: sub;">:</td>
                                    <td class="info-value">
                                        {{ $dosen->tempat_lahir ?? '-' }},
                                        {{ $dosen->tanggal_lahir ? \Carbon\Carbon::parse($dosen->tanggal_lahir)->format('d F Y') : '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info-label">No. Telepon</td>
                                    <td class="info-titikkoma" style="vertical-align: sub;">:</td>
                                    <td class="info-value">{{ $dosen->no_telp_dosen ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Tempat Tinggal</td>
                                    <td class="info-titikkoma" style="vertical-align: sub;">:</td>
                                    <td class="info-value text-justify">{{ $dosen->tempat_tinggal_dosen ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Visi Dosen</td>
                                    <td class="info-titikkoma" style="vertical-align: sub;">:</td>
                                    <td class="info-value text-justify">{{ $dosen->visi_dosen ?? '-' }}<br><br></td>
                                </tr>
                                <tr>
                                    <td class="info-label">Misi Dosen</td>
                                    <td class="info-titikkoma" style="vertical-align: sub;">:</td>
                                    <td class="info-value text-justify">{{ $dosen->misi_dosen ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan - Pendidikan Terakhir, Bidang Keahlian, Minat Penelitian -->
                <div class="col-lg-6 mb-5">
                    <div class="main-content-card main-content-dosen-education p-4 rounded shadow-sm">
                        <div class="col-lg-12 px-0 py-2">
                            <h4 class="detail-title mb-3 text-left">Pendidikan Terakhir</h4>
                            <table class="table-dosen-biodata mb-4">
                                <tr>
                                    <td class="info-label">Riwayat Pendidikan Terakhir</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $dosen->riwayat_pendidikan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Perguruan Tinggi</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $dosen->perguruan_tinggi ?? '-' }}</td>
                                </tr>
                            </table>

                            <div class="col-lg-12 px-0 py-3">
                                <h5 class="detail-subtitle mb-3 text-left">Bidang Keahlian :</h5>
                                <ul class="list-unstyled text-left mb-4">
                                    <li style="color: var(--text-color);"><i class="fas fa-check-circle mr-2 text-success"></i> {{ $dosen->bidang_keahlian_pendidikan ?? '-' }}</li>
                                </ul>
                            </div>

                            <div class="col-lg-12 px-0 py-3">
                                <h5 class="detail-subtitle mb-3 text-left">Minat Penelitian :</h5>
                                <ul class="list-unstyled text-left">
                                    <li style="color: var(--text-color); text-align: justify;">{{ $dosen->minat_penelitian ?? '-' }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content - Deskripsi Bidang Keahlian Dosen -->
        <div class="col-lg-12">
            <div class="main-content-card main-content-dosen-description p-4 rounded shadow-sm">
                <h3 class="main-content-title text-left col-12 px-0 mb-3">Deskripsi Bidang Keahlian Dosen</h3>
                <p class="main-content-paragraph col-12 px-0 text-justify">{{ $dosen->deskripsi_bidang_keahlian ?? '-' }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
