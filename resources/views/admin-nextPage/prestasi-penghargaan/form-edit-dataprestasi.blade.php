@extends('layouts.admin')

@section('title', 'Edit Data Prestasi & Penghargaan : ' . $prestasi->judul_prestasi_penghargaan)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <h3 class="section-title mb-4">Edit Data Prestasi / Penghargaan : {{ $prestasi->judul_prestasi_penghargaan }}</h3>
        <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <hr class="batas-form my-4">

            <div class="form-group">
                <label for="judul_prestasi_penghargaan">Judul Prestasi / Penghargaan</label>
                <input type="text" name="judul_prestasi_penghargaan" class="form-control @error('judul_prestasi_penghargaan') is-invalid @enderror" id="judul_prestasi_penghargaan" placeholder="Silahkan mengisi Judul Prestasi / Penghargaan" value="{{ old('judul_prestasi_penghargaan', $prestasi->judul_prestasi_penghargaan) }}">
                @error('judul_prestasi_penghargaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kategori_prestasi_penghargaan">Kategori Prestasi / Penghargaan</label>
                <input type="text" name="kategori_prestasi_penghargaan" class="form-control @error('kategori_prestasi_penghargaan') is-invalid @enderror" id="kategori_prestasi_penghargaan" placeholder="Silahkan mengisi kategori Penghargaan" value="{{ old('kategori_prestasi_penghargaan', $prestasi->kategori_prestasi_penghargaan) }}">
                @error('kategori_prestasi_penghargaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tahun_prestasi_penghargaan">Tahun Prestasi / Penghargaan : </label>
                <input type="text" name="tahun_prestasi_penghargaan" class="form-control @error('tahun_prestasi_penghargaan') is-invalid @enderror" id="tahun_prestasi_penghargaan" placeholder="Contoh: 2024" value="{{ old('tahun_prestasi_penghargaan', $prestasi->tahun_prestasi_penghargaan) }}">
                @error('tahun_prestasi_penghargaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi_prestasi_penghargaan">Deskripsi Prestasi / Penghargaan</label>
                <textarea name="deskripsi_prestasi_penghargaan" class="form-control @error('deskripsi_prestasi_penghargaan') is-invalid @enderror" id="deskripsi_prestasi_penghargaan" rows="3" placeholder="Silahkan mengisi deskripsi prestasi / Penghargaan">{{ old('deskripsi_prestasi_penghargaan', $prestasi->deskripsi_prestasi_penghargaan) }}</textarea>
                @error('deskripsi_prestasi_penghargaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="dokumentasi">Dokumentasi Prestasi / Penghargaan : </label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="dokumentasi" class="custom-file-input @error('dokumentasi') is-invalid @enderror" id="dokumentasi" accept="image/jpeg,image/png,image/svg+xml">
                        <label class="custom-file-label" for="dokumentasi">Pilih file (jpg, png, jpeg, svg)</label>
                    </div>
                </div>
                @if ($prestasi->dokumentasi)
                    <small class="form-text text-muted mt-2">Gambar saat ini: <a href="{{ asset('storage/' . $prestasi->dokumentasi) }}" target="_blank">{{ basename($prestasi->dokumentasi) }}</a></small>
                @endif
                @error('dokumentasi')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between px-0 mt-4">
                <button type="submit" class="btn btn-success col-5 mr-2 py-3" style="font-size: 1.25rem;"><i class="far fa-save mr-2"></i> SIMPAN PERUBAHAN</button>
                <a href="{{ route('prestasi.index') }}" class="btn btn-danger col-5 py-3" style="font-size: 1.25rem;"><i class="far fa-window-close mr-2"></i> BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dokumentasiInput = document.getElementById('dokumentasi');
        dokumentasiInput.addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : 'Pilih file (jpg, png, jpeg, svg)';
            const nextSibling = this.nextElementSibling;
            if (nextSibling && nextSibling.classList.contains('custom-file-label')) {
                nextSibling.innerText = fileName;
            }
        });
    });
</script>
@endpush
