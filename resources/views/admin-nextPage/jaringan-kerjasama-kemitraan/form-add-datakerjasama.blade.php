@extends('layouts.admin')

@section('title', 'Tambahkan Data Jaringan Kerja Sama & Kemitraan')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <h3 class="section-title mb-4">Tambah Data Jaringan Kerjasama & Kemitraan</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('jaringan-kerjasama.store') }}" enctype="multipart/form-data">
            @csrf
            <hr class="batas-form my-4">
            <div class="form-group">
                <label for="nama_jaringan_kerjasama">Nama-nama Kemitraan & Jaringan Kerjasama :</label>
                <input type="text" class="form-control @error('nama_jaringan_kerjasama') is-invalid @enderror" id="nama_jaringan_kerjasama" name="nama_jaringan_kerjasama" placeholder="Silahkan mengisi Nama-nama Kemitraan & Jaringan Kerjasama" value="{{ old('nama_jaringan_kerjasama') }}" required>
                @error('nama_jaringan_kerjasama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kemitraan">Jenis Kemitraan :</label>
                <input type="text" class="form-control @error('jenis_kemitraan') is-invalid @enderror" id="jenis_kemitraan" name="jenis_kemitraan" placeholder="Silahkan mengisi Jenis Kemitraan" value="{{ old('jenis_kemitraan') }}">
                @error('jenis_kemitraan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="gambar_perusahaan">Gambar Perusahaan :</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('gambar_perusahaan') is-invalid @enderror" id="gambar_perusahaan" name="gambar_perusahaan" accept="image/jpeg,image/png,image/gif,image/svg+xml">
                    <label class="custom-file-label" for="gambar_perusahaan">Pilih file (jpg, png, jpeg, svg)</label>
                    @error('gambar_perusahaan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="pengertian_jaringan_kerjasama">Pengertian Kemitraan & Jaringan Kerjasama :</label>
                <textarea class="form-control @error('pengertian_jaringan_kerjasama') is-invalid @enderror" id="pengertian_jaringan_kerjasama" name="pengertian_jaringan_kerjasama" rows="6" placeholder="Silahkan mengisi pengertian Kemitraan & jaringan Kerjasama">{{ old('pengertian_jaringan_kerjasama') }}</textarea>
                @error('pengertian_jaringan_kerjasama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="d-flex justify-content-center px-2 mt-4">
                <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN</button>
                <button type="reset" class="btn btn-warning col-4 mr-2 py-3">RESET</button>
                <a href="{{ route('jaringan-kerjasama.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const gambarInput = document.getElementById('gambar_perusahaan');
        gambarInput.addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : 'Pilih file (jpg, png, jpeg, svg)';
            const nextSibling = this.nextElementSibling;
            if (nextSibling && nextSibling.classList.contains('custom-file-label')) {
                nextSibling.innerText = fileName;
            }
        });
    });
</script>
@endpush
