@extends('layouts.admin')

@section('title', 'Tambahkan Data Bidang Unggulan Kami')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <h3 class="section-title mb-4">TAMBAH DATA BIDANG UNGGULAN BARU</h3>
        <form action="{{ route('bidang-unggulan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_bidang_unggulan">Nama Bidang Unggulan</label>
                <input type="text" class="form-control @error('nama_bidang_unggulan') is-invalid @enderror" id="nama_bidang_unggulan" name="nama_bidang_unggulan" placeholder="Silahkan mengisi Nama Bidang Unggulan" value="{{ old('nama_bidang_unggulan') }}">
                @error('nama_bidang_unggulan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="fokus_bidang">Fokus Bidang</label>
                <textarea class="form-control @error('fokus_bidang') is-invalid @enderror" id="fokus_bidang" name="fokus_bidang" rows="3">{{ old('fokus_bidang') }}</textarea>
                @error('fokus_bidang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi_lengkap_bidang">Deskripsi Lengkap Bidang</label>
                <textarea class="form-control @error('deskripsi_lengkap_bidang') is-invalid @enderror" id="deskripsi_lengkap_bidang" name="deskripsi_lengkap_bidang" rows="5">{{ old('deskripsi_lengkap_bidang') }}</textarea>
                @error('deskripsi_lengkap_bidang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gambar_bidang_unggulan">Gambar Bidang Unggulan</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('gambar_bidang_unggulan') is-invalid @enderror" id="gambar_bidang_unggulan" name="gambar_bidang_unggulan" accept="image/jpeg,image/png,image/gif,image/svg+xml">
                        <label class="custom-file-label" for="gambar_bidang_unggulan">Pilih file (jpg, png, jpeg, svg)</label>
                    </div>
                </div>
                @error('gambar_bidang_unggulan')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="dosens">Anggota Dosen (Pilih multiple)</label>
                <select multiple class="form-control @error('dosens') is-invalid @enderror" id="dosens" name="dosens[]">
                    @foreach($dosens as $dosen)
                        <option value="{{ $dosen->id }}" {{ in_array($dosen->id, old('dosens', [])) ? 'selected' : '' }}>{{ $dosen->nama_dosen }}</option>
                    @endforeach
                </select>
                @error('dosens')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <small id="anggotaDosenHelp" class="form-text text-muted">Tahan Ctrl/Command untuk memilih lebih dari satu dosen.</small>
            </div>
            <div class="form-group">
                <label for="mata_kuliahs">Mata Kuliah yang Relevan (Pilih multiple)</label>
                <select multiple class="form-control @error('mata_kuliahs') is-invalid @enderror" id="mata_kuliahs" name="mata_kuliahs[]">
                    @foreach($mataKuliahs as $mk)
                        <option value="{{ $mk->id }}" {{ in_array($mk->id, old('mata_kuliahs', [])) ? 'selected' : '' }}>{{ $mk->nama_mk }}</option>
                    @endforeach
                </select>
                @error('mata_kuliahs')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <small id="mataKuliahRelevanHelp" class="form-text text-muted">Tahan Ctrl/Command untuk memilih lebih dari satu mata kuliah.</small>
            </div>

            <div class="d-flex justify-content-center px-2 mt-4">
                <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN</button>
                <button type="reset" class="btn btn-warning col-4 mr-2 py-3">RESET</button>
                <a href="{{ route('bidang-unggulan.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Untuk input dokumentasi/gambar
            const gambarInput = document.getElementById('gambar_bidang_unggulan');
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
