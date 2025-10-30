{{-- filepath: resources/views/admin-nextPage/kegiatan/form-edit-kegiatan.blade.php --}}
@extends('layouts.admin')

@section('title', 'Edit Data Kegiatan : ' . $kegiatan->nama_kegiatan)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <h3 class="section-title mb-4">Edit Data Kegiatan : {{ $kegiatan->nama_kegiatan }}</h3>

        {{-- Menampilkan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <p><strong>Oops!</strong> Ada beberapa masalah dengan input Anda.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('kegiatan.update', $kegiatan->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <hr class="batas-form my-4">
            <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" id="nama_kegiatan" name="nama_kegiatan" placeholder="Silahkan mengisi Judul Kegiatan" value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}" required>
                @error('nama_kegiatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                <input type="text" class="form-control @error('tanggal_kegiatan') is-invalid @enderror" id="tanggal_kegiatan" name="tanggal_kegiatan" placeholder="dd/mm/yyyy" value="{{ old('tanggal_kegiatan', $kegiatan->tanggal_kegiatan) }}" required>
                @error('tanggal_kegiatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi_kegiatan">Deskripsi Kegiatan</label>
                <textarea class="form-control @error('deskripsi_kegiatan') is-invalid @enderror" id="deskripsi_kegiatan" name="deskripsi_kegiatan" rows="3" placeholder="Silahkan mengisi Deskripsi Kegiatan" required>{{ old('deskripsi_kegiatan', $kegiatan->deskripsi_kegiatan) }}</textarea>
                @error('deskripsi_kegiatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="dokumentasi">Dokumentasi (Kosongkan jika tidak ingin diubah)</label>
                @if($kegiatan->dokumentasi)
                    <img src="{{ asset('storage/' . $kegiatan->dokumentasi) }}" alt="Dokumentasi Kegiatan" class="img-thumbnail mt-2 mb-2 d-block" style="max-width: 150px;"/>
                @endif
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('dokumentasi') is-invalid @enderror" id="dokumentasi" name="dokumentasi" accept="image/*">
                    <label class="custom-file-label" for="dokumentasi">Pilih file gambar baru...</label>
                    @error('dokumentasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="d-flex justify-content-center px-2 mt-4">
                <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN PERUBAHAN</button>
                <a href="{{ route('kegiatan.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#tanggal_kegiatan", {
        altInput: true,
        altFormat: "d F Y",
        dateFormat: "Y-m-d",
    });

    document.getElementById('dokumentasi').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const nextSibling = e.target.nextElementSibling;
            nextSibling.innerText = file.name;
        }
    });
</script>
@endpush
