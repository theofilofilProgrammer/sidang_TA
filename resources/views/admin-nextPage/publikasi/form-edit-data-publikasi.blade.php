@extends('layouts.admin')

@section('title', 'Edit Data Publikasi: ' . $publikasi->judul_publikasi)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <h3 class="section-title mb-4">Edit Data Publikasi: {{ $publikasi->judul_publikasi }}</h3>
        <form action="{{ route('publikasi.update', $publikasi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <hr class="batas-form my-4">
            <div class="form-group">
                <label for="judul_publikasi">Judul Publikasi</label>
                <input type="text" class="form-control" id="judul_publikasi" name="judul_publikasi" value="{{ old('judul_publikasi', $publikasi->judul_publikasi) }}" required>
            </div>
            <div class="form-group">
                <label for="abstrak_publikasi">Abstrak</label>
                <textarea class="form-control" id="abstrak_publikasi" name="abstrak_publikasi" rows="4">{{ old('abstrak_publikasi', $publikasi->abstrak_publikasi) }}</textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi_publikasi">Deskripsi Lengkap (Opsional)</label>
                <textarea class="form-control" id="deskripsi_publikasi" name="deskripsi_publikasi" rows="4">{{ old('deskripsi_publikasi', $publikasi->deskripsi_publikasi) }}</textarea>
            </div>
            <div class="form-group">
                <label for="jurnal_prosiding_id">Jenis Judul Jurnal & Prosiding</label>
                <select class="form-control" id="jurnal_prosiding_id" name="jurnal_prosiding_id" required>
                    <option value="">-- Pilih Jurnal / Prosiding --</option>
                    @foreach ($jurnalProsidings as $jurnal)
                        <option value="{{ $jurnal->id }}" {{ old('jurnal_prosiding_id', $publikasi->jurnal_prosiding_id) == $jurnal->id ? 'selected' : '' }}>
                            {{ $jurnal->jenis_judul_jurnal_prosiding }} ({{$jurnal->tipe_jurnal_prosiding}})
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dosen_ids">Anggota Dosen / Pencipta Publikasi (Pilih multiple)</label>
                <select multiple class="form-control" id="dosen_ids" name="dosen_ids[]" required>
                    @php
                        $selectedDosenIds = old('dosen_ids', $publikasi->dosens->pluck('id')->toArray());
                    @endphp
                    @foreach ($dosens as $dosen)
                        <option value="{{ $dosen->id }}" {{ in_array($dosen->id, $selectedDosenIds) ? 'selected' : '' }}>
                            {{ $dosen->nama_dosen }}
                        </option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Tahan Ctrl/Command untuk memilih lebih dari satu dosen.</small>
            </div>

            <div class="d-flex justify-content-between px-0 mt-4">
                <button type="submit" class="btn btn-success col-5 mr-2 py-3" style="font-size: 1.25rem;"><i class="far fa-save mr-2"></i> SIMPAN PERUBAHAN</button>
                <a href="{{ route('publikasi.index') }}" class="btn btn-danger col-5 py-3" style="font-size: 1.25rem;"><i class="far fa-window-close mr-2"></i> BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection
