@extends('layouts.admin')

@section('title', 'Tambahkan Data Dosen')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <div class="col-12 px-0 d-flex flex-column mb-4">
            <h3 class="section-title mb-2">TAMBAHKAN DATA DOSEN</h3>
            <h6 class="current-time section-title" style="font-size: 1.5rem;" id="currentTime">13:57:10</h6>
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

        <form method="POST" action="{{ route('dosen.store') }}" enctype="multipart/form-data">
            @csrf
            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <h5 class="section-subtitle mb-3">Profil Dosen : </h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nidn">NIDN</label>
                    <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" placeholder="Silahkan mengisi NIDN" value="{{ old('nidn') }}" required>
                    @error('nidn') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="namaDosen">Nama Dosen</label>
                    <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" id="namaDosen" name="nama_dosen" placeholder="Silahkan mengisi Nama Dosen" value="{{ old('nama_dosen') }}" required>
                    @error('nama_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempatLahir" name="tempat_lahir" placeholder="Silahkan mengisi Tempat Lahir" value="{{ old('tempat_lahir') }}">
                    @error('tempat_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggalLahir_dosen">Tanggal Lahir</label>
                    <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggalLahir_dosen" name="tanggal_lahir" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="emailDosen">E-mail Dosen</label>
                    <input type="email" class="form-control @error('e_mail_dosen') is-invalid @enderror" id="emailDosen" name="e_mail_dosen" placeholder="Silahkan mengisi Email Dosen" value="{{ old('e_mail_dosen') }}" required>
                    @error('e_mail_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="noTelpDosen">No. Telp (Dosen)</label>
                    <input type="tel" class="form-control @error('no_telp_dosen') is-invalid @enderror" id="noTelpDosen" name="no_telp_dosen" placeholder="Silahkan mengisi Nomor Telepon Dosen" value="{{ old('no_telp_dosen') }}">
                    @error('no_telp_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="status_kepegawaian">Status Kepegawaian</label>
                <select id="status_kepegawaian" name="status_kepegawaian" class="form-control @error('status_kepegawaian') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Status Kepegawaian</option>
                    <option value="PNS" {{ old('status_kepegawaian') == 'PNS' ? 'selected' : '' }}>PNS</option>
                    <option value="Non-PNS" {{ old('status_kepegawaian') == 'Non-PNS' ? 'selected' : '' }}>Non-PNS</option>
                </select>
                @error('status_kepegawaian') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="bidangKeahlian">Bidang Keahlian</label>
                <input type="text" class="form-control @error('bidang_keahlian') is-invalid @enderror" id="bidangKeahlian" name="bidang_keahlian" placeholder="Silahkan mengisi Bidang Keahlian Dosen" value="{{ old('bidang_keahlian') }}">
                @error('bidang_keahlian') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="deskripsiBKA">Deskripsi Bidang Keahlian Anda :</label>
                <textarea class="form-control @error('deskripsi_bidang_keahlian') is-invalid @enderror" id="deskripsiBKA" name="deskripsi_bidang_keahlian" rows="3" placeholder="Silahkan mengisi deskripsi bidang keahlian">{{ old('deskripsi_bidang_keahlian') }}</textarea>
                @error('deskripsi_bidang_keahlian') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jenis_dosen">Jenis Dosen</label>
                    <select id="jenis_dosen" name="jenis_dosen" class="form-control @error('jenis_dosen') is-invalid @enderror">
                        <option value="" disabled selected>Pilih Jenis Dosen</option>
                        <option value="Dosen Tetap" {{ old('jenis_dosen') == 'Dosen Tetap' ? 'selected' : '' }}>Dosen Tetap</option>
                        <option value="Ketua Program Studi" {{ old('jenis_dosen') == 'Ketua Program Studi' ? 'selected' : '' }}>Ketua Program Studi</option>
                        <option value="Staf Administrasi Akademik" {{ old('jenis_dosen') == 'Staf Administrasi Akademik' ? 'selected' : '' }}>Staf Administrasi Akademik</option>
                        <option value="Staf Laboratorium" {{ old('jenis_dosen') == 'Staf Laboratorium' ? 'selected' : '' }}>Staf Laboratorium</option>
                    </select>
                    @error('jenis_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="fotoProfilDosen">Foto Profil Dosen</label>
                    {{-- Elemen untuk menampilkan preview gambar --}}
                    <img id="fotoProfilPreview" src="#" alt="Preview Foto Profil" class="img-thumbnail mt-2 mb-2" style="display: none; max-width: 150px;"/>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('foto_profil_dosen') is-invalid @enderror" id="fotoProfilDosen" name="foto_profil_dosen" accept="image/*">
                        <label class="custom-file-label" for="fotoProfilDosen">Pilih file gambar...</label>
                        @error('foto_profil_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="tempatTinggalDosen">Tempat Tinggal Dosen</label>
                <textarea class="form-control @error('tempat_tinggal_dosen') is-invalid @enderror" id="tempatTinggalDosen" name="tempat_tinggal_dosen" rows="3" placeholder="Silahkan mengisi Tempat Tinggal Dosen">{{ old('tempat_tinggal_dosen') }}</textarea>
                @error('tempat_tinggal_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <h5 class="section-subtitle mb-3">Pendidikan Terakhir : </h5>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="riwayatPendidikan">Riwayat Pendidikan</label>
                    <input type="text" class="form-control @error('riwayat_pendidikan') is-invalid @enderror" id="riwayatPendidikan" name="riwayat_pendidikan" placeholder="Silahkan mengisi Riwayat Pendidikan" value="{{ old('riwayat_pendidikan') }}">
                    @error('riwayat_pendidikan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="perguruanTinggi">Perguruan Tinggi</label>
                    <input type="text" class="form-control @error('perguruan_tinggi') is-invalid @enderror" id="perguruanTinggi" name="perguruan_tinggi" placeholder="Silahkan Mengisi Perguruan Tinggi" value="{{ old('perguruan_tinggi') }}">
                    @error('perguruan_tinggi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="bidangKeahlianPendidikan">Bidang Keahlian Pendidikan :</label>
                <textarea class="form-control @error('bidang_keahlian_pendidikan') is-invalid @enderror" id="bidangKeahlianPendidikan" name="bidang_keahlian_pendidikan" rows="3" placeholder="Silahkan mengisi Bidang Keahlian Pendidikan">{{ old('bidang_keahlian_pendidikan') }}</textarea>
                @error('bidang_keahlian_pendidikan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="minatPenelitian">Minat Penelitian :</label>
                <textarea class="form-control @error('minat_penelitian') is-invalid @enderror" id="minatPenelitian" name="minat_penelitian" rows="3" placeholder="Silahkan mengisi Minat Penelitian">{{ old('minat_penelitian') }}</textarea>
                @error('minat_penelitian') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <div class="form-group">
                <label for="visiDosen">Visi Dosen :</label>
                <textarea class="form-control @error('visi_dosen') is-invalid @enderror" id="visiDosen" name="visi_dosen" rows="3" placeholder="Silahkan mengisi visi dosen">{{ old('visi_dosen') }}</textarea>
                @error('visi_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="misiDosen">Misi Dosen :</label>
                <textarea class="form-control @error('misi_dosen') is-invalid @enderror" id="misiDosen" name="misi_dosen" rows="3" placeholder="Silahkan mengisi misi dosen">{{ old('misi_dosen') }}</textarea>
                @error('misi_dosen') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex justify-content-center px-2 mt-4">
                <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN</button>
                <button type="reset" class="btn btn-warning col-4 mr-2 py-3">RESET</button>
                <a href="{{ route('dosen.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Flatpickr untuk input tanggal
        flatpickr("#tanggalLahir_dosen", {
            altInput: true, // Tampilkan format yang mudah dibaca pengguna
            altFormat: "d/m/Y", // Format yang dilihat pengguna (contoh: 24/07/2025)
            dateFormat: "m/d/Y", // Format yang dikirim ke server (contoh: 07/24/2025)
        });

        // Script untuk menampilkan nama file pada custom file input
        document.getElementById('fotoProfilDosen').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                // Update label dengan nama file
                const nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = file.name;

                // Tampilkan preview gambar
                const preview = document.getElementById('fotoProfilPreview');
                const reader = new FileReader();

                reader.onload = function(event) {
                    preview.src = event.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endpush
