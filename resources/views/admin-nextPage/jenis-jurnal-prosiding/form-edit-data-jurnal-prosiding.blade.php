@extends('layouts.admin')

@section('title', 'Edit Dasar Jurnal / Prosiding: ' . $jurnal->jenis_judul_jurnal_prosiding)

@section('content')
    <div class="content-wrapper col-lg-10 px-0 mx-4">
        <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
            <h3 class="section-title mb-4">Edit Data Jurnal & Prosiding : {{ $jurnal->jenis_judul_jurnal_prosiding }}</h3>
            <form action="{{ route('jurnal.update', $jurnal->id) }}" method="POST">
                @csrf
                @method('PUT')
                <hr class="batas-form my-4"> <div class="form-group">
                    <label for="jenis_judul_jurnal_prosiding">Jenis Judul Jurnal & Prosiding</label>
                    <input type="text" class="form-control" id="jenis_judul_jurnal_prosiding" name="jenis_judul_jurnal_prosiding" value="{{ old('jenis_judul_jurnal_prosiding', $jurnal->jenis_judul_jurnal_prosiding) }}" placeholder="Silahkan mengisi Jenis Judul Jurnal & Prosiding">
                </div>
                <div class="form-group">
                    <label for="tipe_jurnal_prosiding">Tipe Jurnal / Prosiding</label>
                    <select class="form-control" id="tipe_jurnal_prosiding" name="tipe_jurnal_prosiding">
                        <option value="Jurnal" {{ old('tipe_jurnal_prosiding', $jurnal->tipe_jurnal_prosiding) == 'Jurnal' ? 'selected' : '' }}>Jurnal</option>
                        <option value="Prosiding" {{ old('tipe_jurnal_prosiding', $jurnal->tipe_jurnal_prosiding) == 'Prosiding' ? 'selected' : '' }}>Prosiding</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi_jurnal_prosiding">Deskripsi Jenis Jurnal / Prosiding</label>
                    <textarea class="form-control" id="deskripsi_jurnal_prosiding" name="deskripsi_jurnal_prosiding" rows="3">{{ old('deskripsi_jurnal_prosiding', $jurnal->deskripsi_jurnal_prosiding) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tahun_jurnal_prosiding">Tahun Jurnal / Prosiding</label>
                    <input type="number" class="form-control" id="tahun_jurnal_prosiding" name="tahun_jurnal_prosiding" value="{{ old('tahun_jurnal_prosiding', $jurnal->tahun_jurnal_prosiding) }}" min="1900" max="2100">
                </div>
                <div class="form-group">
                    <label for="issn">ISSN</label>
                    <input type="text" class="form-control" id="issn" name="issn" value="{{ old('issn', $jurnal->issn) }}" placeholder="Silahkan mengisi ISSN">
                </div>
                <div class="form-group">
                    <label for="penerbit_jurnal_publikasi">Penerbit Jenis Jurnal / Publikasi</label>
                    <input type="text" class="form-control" id="penerbit_jurnal_publikasi" name="penerbit_jurnal_publikasi" value="{{ old('penerbit_jurnal_publikasi', $jurnal->penerbit_jurnal_publikasi) }}" placeholder="Silahkan mengisi Penerbit jurnal / publikasi">
                </div>
                <div class="form-group">
                    <label for="mata_kuliah_ids">Mata Kuliah yang Relevan (Pilih multiple)</label>
                    <select multiple class="form-control" id="mata_kuliah_ids" name="mata_kuliah_ids[]">
                        @foreach ($mata_kuliahs as $matkul)
                            <option value="{{ $matkul->id }}" {{ in_array($matkul->id, $jurnal->mataKuliahs->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $matkul->nama_mk }}</option>
                        @endforeach
                    </select>
                    <small id="mataKuliahRelevanHelp" class="form-text text-muted">Tahan Ctrl/Command untuk memilih lebih dari satu mata kuliah.</small>
                </div>
                <div class="form-group">
                    <label for="kunjungi_jurnal_dalam_bentuk_url">Kunjungi Jurnal dalam bentuk url:</label>
                    <input type="url" class="form-control" id="kunjungi_jurnal_dalam_bentuk_url" name="kunjungi_jurnal_dalam_bentuk_url" value="{{ old('kunjungi_jurnal_dalam_bentuk_url', $jurnal->kunjungi_jurnal_dalam_bentuk_url) }}" placeholder="Silahkan mengisi Kunjungi Jurnal (Cth. 'https://e.book.com')">
                </div>

                <div class="d-flex justify-content-between px-0 mt-4">
                    <button type="submit" class="btn btn-success col-5 mr-2 py-3" style="font-size: 1.25rem;"><i class="far fa-save mr-2"></i> SIMPAN PERUBAHAN</button>
                    <a href="{{ route('jurnal.index') }}" class="btn btn-danger col-5 py-3" style="font-size: 1.25rem;"><i class="far fa-window-close mr-2"></i> BATAL</a>
                </div>
            </form>
        </section>
    </div>
@endsection
