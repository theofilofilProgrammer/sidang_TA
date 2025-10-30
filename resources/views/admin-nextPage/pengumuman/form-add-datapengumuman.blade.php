@extends('layouts.admin')

@section('title', 'Tambahkan Data Pengumuman')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <div class="col-12 px-0 d-flex flex-column mb-4">
            <h3 class="section-title mb-2">TAMBAHKAN DATA PENGUMUMAN</h3>
            <h6 class="current-time section-title" style="font-size: 1.5rem;" id="currentTime">{{ now()->format('H:i:s') }}</h6>
        </div>

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

        <form method="POST" action="{{ route('pengumuman.store') }}" enctype="multipart/form-data">
            @csrf
            <hr class="batas-form my-4">
            <div class="form-group">
                <label for="judul_pengumuman">Judul Pengumuman</label>
                <input type="text" class="form-control @error('judul_pengumuman') is-invalid @enderror" id="judul_pengumuman" name="judul_pengumuman" placeholder="Silahkan mengisi Judul Pengumuman" value="{{ old('judul_pengumuman') }}" required>
                @error('judul_pengumuman') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="isi_pengumuman">Isi Pengumuman</label>
                <textarea class="form-control @error('isi_pengumuman') is-invalid @enderror" id="isi_pengumuman" name="isi_pengumuman" rows="3" placeholder="Silahkan mengisi Isi Pengumuman" required>{{ old('isi_pengumuman') }}</textarea>
                @error('isi_pengumuman') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="tanggal_pengumuman">Tanggal Pengumuman</label>
                <input type="text" class="form-control @error('tanggal_pengumuman') is-invalid @enderror" id="tanggal_pengumuman" name="tanggal_pengumuman" placeholder="dd/mm/yyyy" value="{{ old('tanggal_pengumuman') }}" required>
                @error('tanggal_pengumuman') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="dokumen">Dokumen</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('dokumen') is-invalid @enderror" id="dokumen" name="dokumen" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx">
                    <label class="custom-file-label" for="dokumen">Pilih file (pdf, docx, dll.)</label>
                    @error('dokumen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="dokumentasi">Dokumentasi</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('dokumentasi') is-invalid @enderror" id="dokumentasi" name="dokumentasi" accept="image/jpeg,image/png,image/gif,image/svg+xml">
                    <label class="custom-file-label" for="dokumentasi">Pilih file (jpg, png, jpeg, svg)</label>
                    @error('dokumentasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="d-flex justify-content-center px-2 mt-4">
                <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN</button>
                <button type="reset" class="btn btn-warning col-4 mr-2 py-3">RESET</button>
                <a href="{{ route('pengumuman.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#tanggal_pengumuman", {
        altInput: true,
        altFormat: "d F Y",
        dateFormat: "Y-m-d",
    });

    document.getElementById('dokumen').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const nextSibling = e.target.nextElementSibling;
            nextSibling.innerText = file.name;
        }
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
