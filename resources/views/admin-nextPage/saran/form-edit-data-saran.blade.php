@extends('layouts.admin')

@section('title', 'Balas Saran')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <h3 class="section-title mb-4">Balas Saran dari: {{ $saran->nama_lengkap ?? 'Anonim' }}</h3>
        <form action="{{ route('saran.update', $saran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <hr class="batas-form my-4">
            <div class="form-group">
                <label for="isi_saran">Isi Saran</label>
                <textarea class="form-control" id="isi_saran" rows="6" readonly>{{ $saran->isi_saran }}</textarea>
            </div>
            <div class="form-group">
                <label for="balasan_admin">Balasan Admin</label>
                <textarea class="form-control @error('balasan_admin') is-invalid @enderror" id="balasan_admin" name="balasan_admin" rows="6">{{ old('balasan_admin', $saran->balasan_admin) }}</textarea>
                @error('balasan_admin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status Saran</label>
                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                    <option value="Menunggu Balasan" {{ old('status', $saran->status) == 'Menunggu Balasan' ? 'selected' : '' }}>Menunggu Balasan</option>
                    <option value="Sudah Dibalas" {{ old('status', $saran->status) == 'Sudah Dibalas' ? 'selected' : '' }}>Sudah Dibalas</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between px-0 mt-4">
                <button type="submit" class="btn btn-success col-5 mr-2 py-3" style="font-size: 1.25rem;"><i class="far fa-save mr-2"></i> SIMPAN PERUBAHAN</button>
                <a href="{{ route('saran.index') }}" class="btn btn-danger col-5 py-3" style="font-size: 1.25rem;"><i class="far fa-window-close mr-2"></i> BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection
