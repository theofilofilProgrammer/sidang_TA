@extends('layouts.admin')

@section('title', 'Tambahkan Data Mata Kuliah')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <div class="col-12 px-0 d-flex flex-column mb-4">
            <h3 class="section-title mb-2">TAMBAHKAN DATA MATA KULIAH</h3>
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

        <form method="POST" action="{{ route('matakuliah.store') }}">
            @csrf
            <hr class="batas-form my-4">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kode-matkul">Kode Mata Kuliah</label>
                    <input type="text" class="form-control @error('kode_mk') is-invalid @enderror" id="kode-matkul" name="kode_mk" placeholder="Silahkan mengisi Kode Mata Kuliah" value="{{ old('kode_mk') }}" required>
                    @error('kode_mk') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="nama-matkul">Nama Mata Kuliah</label>
                    <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama-matkul" name="nama_mk" placeholder="Silahkan mengisi Nama Mata Kuliah" value="{{ old('nama_mk') }}" required>
                    @error('nama_mk') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="semester">Semester</label>
                    <select id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror">
                        @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('semester') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="SKSteori">SKS (Teori)</label>
                    <input type="number" id="SKSteori" name="sks_teori" class="form-control @error('sks_teori') is-invalid @enderror" value="{{ old('sks_teori', 2) }}" min="0">
                    @error('sks_teori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="SKSpraktik">SKS (Praktik)</label>
                    <input type="number" id="SKSpraktik" name="sks_praktik" class="form-control @error('sks_praktik') is-invalid @enderror" value="{{ old('sks_praktik', 0) }}" min="0">
                    @error('sks_praktik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="totalSKS">Jumlah SKS</label>
                    <input type="text" id="totalSKS" name="jumlah_sks" class="form-control @error('jumlah_sks') is-invalid @enderror" value="{{ old('jumlah_sks', 2) }}" readonly>
                    @error('jumlah_sks') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-8">
                    <label for="keterangan-matkul">Keterangan</label>
                    <select id="keterangan-matkul" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">
                        <option value="Wajib" {{ old('keterangan') == 'Wajib' ? 'selected' : '' }}>Wajib</option>
                        <option value="Pilihan" {{ old('keterangan') == 'Pilihan' ? 'selected' : '' }}>Pilihan</option>
                        <option value="Tidak Wajib" {{ old('keterangan') == 'Tidak Wajib' ? 'selected' : '' }}>Tidak Wajib</option>
                    </select>
                    @error('keterangan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="d-flex justify-content-center px-2 mt-4">
                <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN</button>
                <button type="reset" class="btn btn-warning col-4 mr-2 py-3">RESET</button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sksTeoriInput = document.getElementById('SKSteori');
    const sksPraktikInput = document.getElementById('SKSpraktik');
    const totalSKSInput = document.getElementById('totalSKS');

    function calculateTotalSKS() {
        const sksTeori = parseInt(sksTeoriInput.value) || 0;
        const sksPraktik = parseInt(sksPraktikInput.value) || 0;
        totalSKSInput.value = sksTeori + sksPraktik;
    }

    calculateTotalSKS();
    sksTeoriInput.addEventListener('input', calculateTotalSKS);
    sksPraktikInput.addEventListener('input', calculateTotalSKS);
});
</script>
@endpush
