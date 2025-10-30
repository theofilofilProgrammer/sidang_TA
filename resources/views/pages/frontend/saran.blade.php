@extends('layouts.saran')

@section('title-saran')
Saran | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-saran')
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <div class="col-lg-12 px-0">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 px-0">
                    <div class="suggestion-form-container col-lg-12 px-5">
                        <h1 class="suggestion-title my-3 text-center">Berikan Saran Anda</h1>
                        <p class="suggestion-paragraph my-4 text-center">Kami sangat menghargai masukan Anda untuk meningkatkan kualitas layanan dan informasi kami. Masukan Anda adalah kunci bagi peningkatan berkelanjutan Program Studi D3 Teknologi Informasi.</p>

                        @if(session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="suggestion-form col-lg-12 py-5 px-5 my-5 mx-auto justify-content-center" action="{{ route('saran.store') }}" method="POST">
                            @csrf
                            <div class="form-group px-auto">
                                <input type="text" class="form-control py-3 @error('nama_lengkap') is-invalid @enderror" id="fullName" name="nama_lengkap" placeholder="Nama Lengkap (Opsional)" value="{{ old('nama_lengkap') }}">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group px-auto">
                                <input type="email" class="form-control py-3 @error('alamat_email') is-invalid @enderror" id="emailAddress" name="alamat_email" placeholder="Alamat Email (Opsional)" value="{{ old('alamat_email') }}">
                                @error('alamat_email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group px-auto mb-4">
                                <textarea class="form-control py-3 @error('isi_saran') is-invalid @enderror" id="suggestionText" name="isi_saran" rows="6" placeholder="Tuliskan saran atau masukan Anda di sini..." required>{{ old('isi_saran') }}</textarea>
                                @error('isi_saran')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block btn-send-suggestion px-5 py-3 mt-5 col-lg-12 justify-content-center">Kirim Saran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
