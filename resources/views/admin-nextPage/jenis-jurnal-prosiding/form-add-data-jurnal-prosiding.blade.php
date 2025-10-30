@extends('layouts.admin')

@section('title', 'Tambahkan Data Jurnal / Prosiding')

@section('content')
    <div class="content-wrapper col-lg-10 px-0 mx-4">
        <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
            <h3 class="section-title mb-4">Tambah Data Jurnal / Prosiding</h3>
            <form action="{{ route('jurnal.store') }}" method="POST">
                @csrf
                <hr class="batas-form my-4"> <div class="form-group">
                    <label for="jenis_judul_jurnal_prosiding">Jenis Judul Jurnal & Prosiding</label>
                    <input type="text" class="form-control" id="jenis_judul_jurnal_prosiding" name="jenis_judul_jurnal_prosiding" placeholder="Silahkan mengisi Jenis Judul Jurnal & Prosiding">
                </div>
                <div class="form-group">
                    <label for="tipe_jurnal_prosiding">Tipe Jurnal / Prosiding</label>
                    <select class="form-control" id="tipe_jurnal_prosiding" name="tipe_jurnal_prosiding">
                        <option value="Jurnal">Jurnal</option>
                        <option value="Prosiding">Prosiding</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi_jurnal_prosiding">Deskripsi Jenis Jurnal / Prosiding</label>
                    <textarea class="form-control" id="deskripsi_jurnal_prosiding" name="deskripsi_jurnal_prosiding" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="tahun_jurnal_prosiding">Tahun Jurnal / Prosiding</label>
                    <input type="number" class="form-control" id="tahun_jurnal_prosiding" name="tahun_jurnal_prosiding" value="{{ date('Y') }}" min="1900" max="2100">
                </div>
                <div class="form-group">
                    <label for="issn">ISSN</label>
                    <input type="text" class="form-control" id="issn" name="issn" placeholder="Silahkan mengisi ISSN">
                </div>
                <div class="form-group">
                    <label for="penerbit_jurnal_publikasi">Penerbit Jenis Jurnal / Publikasi</label>
                    <input type="text" class="form-control" id="penerbit_jurnal_publikasi" name="penerbit_jurnal_publikasi" placeholder="Silahkan mengisi Penerbit jurnal / publikasi">
                </div>
                <div class="form-group">
                    <label for="mata_kuliah_ids">Mata Kuliah yang Relevan (Pilih multiple)</label>
                    <select multiple class="form-control" id="mata_kuliah_ids" name="mata_kuliah_ids[]">
                        @foreach ($mata_kuliahs as $matkul)
                            <option value="{{ $matkul->id }}">{{ $matkul->nama_mk }}</option>
                        @endforeach
                    </select>
                    <small id="mataKuliahRelevanHelp" class="form-text text-muted">Tahan Ctrl/Command untuk memilih lebih dari satu mata kuliah.</small>
                </div>
                <div class="form-group">
                    <label for="kunjungi_jurnal_dalam_bentuk_url">Kunjungi Jurnal dalam bentuk url:</label>
                    <input type="url" class="form-control" id="kunjungi_jurnal_dalam_bentuk_url" name="kunjungi_jurnal_dalam_bentuk_url" placeholder="Silahkan mengisi Kunjungi Jurnal (Cth. 'https://e.book.com')">
                </div>

                <div class="d-flex justify-content-center px-2 mt-4">
                    <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN</button>
                    <button type="reset" class="btn btn-warning col-4 mr-2 py-3">RESET</button>
                    <a href="{{ route('jurnal.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
                </div>
            </form>
        </section>
    </div>
@endsection
