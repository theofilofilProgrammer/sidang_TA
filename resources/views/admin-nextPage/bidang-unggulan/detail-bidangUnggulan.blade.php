@extends('layouts.admin')

@section('title', 'Detail Data Bidang Unggulan Kami : ' . $bidangUnggulan->nama_bidang_unggulan)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('bidang-unggulan.index') }}" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left"></i> Kembali</a>
            <h3 class="section-title mb-0">Bidang Unggulan : {{ $bidangUnggulan->nama_bidang_unggulan }}</h3>
        </div>

        <div class="detail-card">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    @if($bidangUnggulan->gambar_bidang_unggulan)
                        <img src="{{ asset('storage/' . $bidangUnggulan->gambar_bidang_unggulan) }}" alt="Gambar Bidang Unggulan" class="img-fluid rounded shadow-sm detail-image">
                    @else
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="Gambar Tidak Tersedia" class="img-fluid rounded shadow-sm detail-image">
                    @endif
                </div>
            </div>
            <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
            <div class="row detail-row pb-5">
                <div class="col-12">
                    <h4 class="detail-subtitle-pengumuman">Nama Bidang : </h4>
                    <p class="detail-text">{{ $bidangUnggulan->nama_bidang_unggulan }}</p>
                </div>
                <div class="col-md-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Fokus pada Bidang Unggulan :</h4>
                    <p class="detail-text">{{ $bidangUnggulan->fokus_bidang }}</p>
                </div>
                <div class="col-12 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Deskripsi Lengkap Bidang : </h4>
                    <p class="detail-text">{{ $bidangUnggulan->deskripsi_lengkap_bidang }}</p>
                </div>
                <div class="col-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Anggota Dosen : </h4>
                    <ul class="main-content-list text-dark">
                        @forelse($bidangUnggulan->dosens as $dosen)
                            <li>{{ $dosen->nama_dosen }}</li>
                        @empty
                            <li>Tidak ada dosen yang terkait.</li>
                        @endforelse
                    </ul>
                </div>
                <div class="col-6 mt-3">
                    <h4 class="detail-subtitle-pengumuman">Mata Kuliah yang Relevan : </h4>
                    <ul class="main-content-list text-dark">
                        @forelse($bidangUnggulan->mataKuliahs as $mataKuliah)
                            <li>{{ $mataKuliah->nama_mk }}</li>
                        @empty
                            <li>Tidak ada mata kuliah yang terkait.</li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('bidang-unggulan.edit', $bidangUnggulan->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                <form action="{{ route('bidang-unggulan.destroy', $bidangUnggulan->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-data-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
