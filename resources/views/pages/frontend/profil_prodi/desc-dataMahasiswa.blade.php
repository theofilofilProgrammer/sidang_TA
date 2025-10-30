@extends('layouts.isi_profilprodi.desc_mahasiswa')
@section('title-desc-dataMahasiswa')
{{ $mahasiswa->nama_mahasiswa }} | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-desc-datamahasiswa')
<!-- Breadcrumb -->
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="{{ route('frontend.mahasiswa.index') }}" class="btn btn-kembali-halaman d-flex align-items-center justify-content-center">
                <i class="fas fa-arrow-left mr-3"></i> Kembali ke halaman Mahasiswa</a>
        </div>
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title ml-4 mb-0">Profil Mahasiswa : {{ $mahasiswa->nama_mahasiswa }}</h3>
        </div>
    </div>
</section>

<section class="main-content-section container my-0 py-0 pb-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content - Profil Mahasiswa Lengkap -->
        <div class="col-lg-12 px-0">
            <div class="main-content-card main-content-mahasiswa-profile mb-5 py-5">
                <div class="d-flex align-items-center col-lg-8 my-5">
                    <div class="image-profilDosen pr-3">
                        @if($mahasiswa->foto_profil_mhs)
                            <img src="{{ asset('storage/' . $mahasiswa->foto_profil_mhs) }}" alt="{{ $mahasiswa->nama_mahasiswa }}" class="mahasiswa-profile-pic rounded-circle mr-4">
                        @else
                            <img src="{{ asset('images/ProfilDosen_AlumniMahasiswa/Jenis_Mahasiswa/default-avatar.jpg') }}" alt="{{ $mahasiswa->nama_mahasiswa }}" class="mahasiswa-profile-pic rounded-circle mr-4">
                        @endif
                    </div>
                    <div class="col-lg-12 px-5">
                        <h3 class="mahasiswa-profile-name text-light mb-3">{{ $mahasiswa->nama_mahasiswa }}</h3>
                        <table class="table-mahasiswa-biodata col-12">
                            <tr>
                                <td class="info-label text-light">NIM</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $mahasiswa->nim }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Jenis Kelamin</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $mahasiswa->jenis_kelamin ?? 'Tidak diketahui' }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Telp.</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $mahasiswa->no_telp_mahasiswa ?? 'Tidak diketahui' }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Mahasiswa Asal</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $mahasiswa->mahasiswa_asal ?? 'Tidak diketahui' }}</td>
                            </tr>
                            <tr>
                                <td class="info-label text-light">Email Mahasiswa</td>
                                <td class="info-titikkoma text-light">:</td>
                                <td class="info-value text-light">{{ $mahasiswa->email_mahasiswa }}</td>
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
                    <div class="main-content-card main-content-mahasiswa-detail p-4 rounded shadow-sm">
                        <div class="col-lg-12 px-0 py-2">
                            <h4 class="detail-title mb-3 text-left">Detail Pribadi Mahasiswa :</h4>
                            <table class="table-mahasiswa-biodata">
                                <tr>
                                    <td class="info-label" style="width: 45%">Tempat dan tanggal lahir</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">
                                        @if($mahasiswa->tempat_lahir || $mahasiswa->tanggal_lahir)
                                            {{ $mahasiswa->tempat_lahir ?? 'Tidak diketahui' }}{{ $mahasiswa->tanggal_lahir ? ', ' . \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d F Y') : '' }}
                                        @else
                                            Belum diisi
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="info-label">Agama</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->agama_mahasiswa ?? 'Tidak diketahui' }}</td>
                                </tr>
                                <tr style="vertical-align: baseline;">
                                    <td class="info-label">Alamat Lengkap</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value text-justify">{{ $mahasiswa->tinggal_mahasiswa ?? 'Alamat belum diisi' }}</td>
                                </tr>
                            </table>
                            <hr class="my-5 px-0 col-12" style="border: 2px solid var(--akademik-title);">
                            <h4 class="detail-title my-3 text-left">Riwayat Pendidikan :</h4>
                            <table class="table-mahasiswa-biodata">
                                <tr>
                                    <td class="info-label">SD</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value text-justify">{{ $mahasiswa->nama_sekolah_dasar ?? 'Belum diisi' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">SMP</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value text-justify">{{ $mahasiswa->nama_menengah_pertama ?? 'Belum diisi' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">SMA</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value text-justify">{{ $mahasiswa->nama_sekolah_atas ?? 'Belum diisi' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan - Detail Akademik -->
                <div class="col-lg-6 mb-5">
                    <div class="main-content-card main-content-mahasiswa-education p-4 rounded shadow-sm">
                        <div class="col-lg-12 px-0 py-2">
                            <h4 class="detail-title mb-3 text-left">Detail Akademik :</h4>
                            <table class="table-mahasiswa-biodata mb-4">
                                <tr>
                                    <td class="info-label">Semester</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->semester ?? 'Belum diisi' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">IPK</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->ipk ?? 'Belum diisi' }}</td>
                                </tr>
                            </table>

                            <div class="col-lg-12 px-0 py-3">
                                <h5 class="detail-subtitle mb-1 text-left">Motivasi Mahasiswa :</h5>
                                <ul class="list-unstyled text-left mb-4">
                                    <p class="main-content-paragraph text-left" style="font-size: 1.15rem; text-align: justify;">{{ $mahasiswa->motivasi_mahasiswa ?? 'Motivasi belum diisi' }}</p>
                                </ul>
                            </div>
                            <hr class="my-3 px-0 col-12" style="border: 2px solid var(--akademik-title);">
                            <h4 class="detail-title mt-5 mb-2 text-left">Detail Orang Tua Mahasiswa :</h4>
                            <table class="table-mahasiswa-biodata mb-4">
                                <tr>
                                    <td class="info-label">Nama Ayah</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->nama_ayah ?? 'Belum diisi' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Pekerjaan Ayah</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->pekerjaan_ayah ?? 'Belum diisi' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Nama Ibu</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->nama_ibu ?? 'Belum diisi' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Pekerjaan Ibu</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->pekerjaan_ibu ?? 'Belum diisi' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Kolom bawah - "Pekerjaan Bagi Mahasiswa" dan "Deskripsi pekerjaan bagi Mahasiswa" -->
                <div class="col-lg-12 mb-5">
                    <div class="main-content-card main-content-mahasiswa-description p-4 rounded shadow-sm">
                        <div class="col-lg-12 px-0 py-2">
                            <h4 class="main-content-title mb-3 text-left">Informasi Pekerjaan Mahasiswa :</h4>
                            <table class="table-mahasiswa-biodata mb-4">
                                <tr>
                                    <td class="info-label">Pekerjaan Bagi Mahasiswa</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->pekerjaan_bagi_mahasiswa ?? 'Belum memiliki pekerjaan' }}</td>
                                </tr>
                                <tr>
                                    <td class="info-label">Deskripsi pekerjaan bagi Mahasiswa</td>
                                    <td class="info-titikkoma">:</td>
                                    <td class="info-value">{{ $mahasiswa->deskripsi_pekerjaan ?? 'Deskripsi pekerjaan belum diisi' }}</td>
                                </tr>
                            </table>
                            {{-- <div class="col-lg-6 px-0 py-3">
                                <h5 class="detail-subtitle mb-3 text-left font-weight-bold">Pekerjaan Bagi Mahasiswa :</h5>
                                <p class="main-content-paragraph text-left"></p>
                            </div>

                            <div class="col-lg-6 px-0 py-3">
                                <h5 class="detail-subtitle mb-3 text-left">Deskripsi pekerjaan bagi Mahasiswa :</h5>
                                <p class="main-content-paragraph text-left">{{ $mahasiswa->deskripsi_pekerjaan ?? 'Deskripsi pekerjaan belum diisi' }}</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
