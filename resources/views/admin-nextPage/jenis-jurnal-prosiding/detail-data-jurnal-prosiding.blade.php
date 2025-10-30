@extends('layouts.admin')

@section('title', 'Detail Data Jurnal / Prosiding: ' . $jurnal->jenis_judul_jurnal_prosiding)

@section('content')
    <div class="content-wrapper col-lg-10 px-0 mx-4">
        <section class="detail-dataMahasiswa-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('jurnal.index') }}" class="btn btn-secondary btn-sm back-button px-3 py-2 mr-5"><i class="fas fa-chevron-left pr-3"></i> Kembali</a>
                <h3 class="section-title mb-0">Jenis Judul Jurnal & Prosding : {{ $jurnal->jenis_judul_jurnal_prosiding }}</h3>
            </div>

            <hr class="border border-3 border-dark col-lg-12 col-md-12 px-0">
            <div class="detail-card">
                <div class="row detail-row">
                    <div class="col-12">
                        <h3 class="detail-subtitle text-center pb-5">{{ $jurnal->jenis_judul_jurnal_prosiding }}</h3>
                        <h4 class="detail-subtitle">Tipe Jurnal / Prosiding : </h4>
                        <p class="detail-text">{{ $jurnal->tipe_jurnal_prosiding }}</p>
                    </div>
                    <div class="col-12 mt-3">
                        <h4 class="detail-subtitle">Deskripsi Jenis Jurnal / Prosiding :</h4>
                        <p class="detail-text">{{ $jurnal->deskripsi_jurnal_prosiding }}</p>
                    </div>
                    <div class="col-12 mt-3">
                        <h4 class="detail-subtitle">Tahun Jurnal / Prosiding :</h4>
                        <p class="detail-text">{{ $jurnal->tahun_jurnal_prosiding }}</p>
                    </div>
                    <div class="col-12 mt-3">
                        <h4 class="detail-subtitle">ISSN :</h4>
                        <p class="detail-text">{{ $jurnal->issn ?? 'Tidak tersedia' }}</p>
                    </div>
                    <div class="col-12 mt-3">
                        <h4 class="detail-subtitle">Penerbit :</h4>
                        <p class="detail-text">{{ $jurnal->penerbit_jurnal_publikasi ?? 'Tidak tersedia' }}</p>
                    </div>
                    @if ($jurnal->kunjungi_jurnal_dalam_bentuk_url)
                        <div class="col-12 mt-3">
                            <h4 class="detail-subtitle">Kunjungi Jurnal (Url) :</h4>
                            <p class="detail-text detail-email-coe text-justify"><a href="{{ $jurnal->kunjungi_jurnal_dalam_bentuk_url }}" target="_blank">{{ $jurnal->kunjungi_jurnal_dalam_bentuk_url }}</a></p>
                        </div>
                    @endif
                    <div class="col-12 mt-3">
                        <h4 class="detail-subtitle">Mata Kuliah yang Relevan :</h4>
                        <ul class="detail-list pb-3">
                            @forelse($jurnal->mataKuliahs as $matkul)
                                <li>{{ $matkul->nama_mk }}</li>
                            @empty
                                <li>Tidak ada mata kuliah yang relevan.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('jurnal.edit', $jurnal->id) }}" class="btn btn-info mr-2 edit-data-btn"><i class="fas fa-edit mr-2"></i>EDIT DATA</a>
                    <form action="{{ route('jurnal.destroy', $jurnal->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-data-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mr-2"></i>HAPUS DATA</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
