@extends('layouts.admin')

@section('title', 'Edit Data Mahasiswa: ' . $mahasiswa->nama_mahasiswa)

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="form-data-section container col-lg-12 d-flex flex-column justify-content-center py-5 px-5 mx-0 my-5">
        <h3 class="section-title mb-4">Edit Data Mahasiswa : {{ $mahasiswa->nama_mahasiswa }}</h3>

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

        <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Silahkan mengisi NIM" value="{{ old('nim', $mahasiswa->nim) }}" required>
                    @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="namaMahasiswa">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror" id="namaMahasiswa" name="nama_mahasiswa" placeholder="Silahkan mengisi Nama Mahasiswa" value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}" required>
                    @error('nama_mahasiswa') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="emailMahasiswa">E-mail Mahasiswa</label>
                    <input type="email" class="form-control @error('email_mahasiswa') is-invalid @enderror" id="emailMahasiswa" name="email_mahasiswa" placeholder="Silahkan mengisi Email" value="{{ old('email_mahasiswa', $mahasiswa->email_mahasiswa) }}" required>
                    @error('email_mahasiswa') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="jenisKelaminMHS">Jenis Kelamin</label>
                    <select id="jenisKelaminMHS" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="Perempuan" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    </select>
                    @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempatLahir" name="tempat_lahir" placeholder="Silahkan mengisi Tempat Lahir" value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}">
                    @error('tempat_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggalLahir_mhs">Tanggal Lahir</label>
                    <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggalLahir_mhs" name="tanggal_lahir" placeholder="dd/mm/yyyy" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}">
                    @error('tanggal_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="mahasiswaAsal">Mahasiswa Asal</label>
                <input type="text" class="form-control @error('mahasiswa_asal') is-invalid @enderror" id="mahasiswaAsal" name="mahasiswa_asal" placeholder="Silahkan mengisi Mahasiswa Berasal dari mana" value="{{ old('mahasiswa_asal', $mahasiswa->mahasiswa_asal) }}">
                @error('mahasiswa_asal') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="tempatTinggalMHS">Tempat Tinggal Mahasiswa</label>
                <textarea class="form-control @error('tinggal_mahasiswa') is-invalid @enderror" id="tempatTinggalMHS" name="tinggal_mahasiswa" rows="3" placeholder="Silahkan mengisi Tempat Tinggal Mahasiswa">{{ old('tinggal_mahasiswa', $mahasiswa->tinggal_mahasiswa) }}</textarea>
                @error('tinggal_mahasiswa') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="agamaMahasiswa">Agama</label>
                    <select id="agamaMahasiswa" name="agama_mahasiswa" class="form-control @error('agama_mahasiswa') is-invalid @enderror">
                        <option value="" disabled>Pilih Agama</option>
                        <option value="Islam" {{ old('agama_mahasiswa', $mahasiswa->agama_mahasiswa) == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen" {{ old('agama_mahasiswa', $mahasiswa->agama_mahasiswa) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katolik" {{ old('agama_mahasiswa', $mahasiswa->agama_mahasiswa) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                        <option value="Hindu" {{ old('agama_mahasiswa', $mahasiswa->agama_mahasiswa) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Buddha" {{ old('agama_mahasiswa', $mahasiswa->agama_mahasiswa) == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Khonghucu" {{ old('agama_mahasiswa', $mahasiswa->agama_mahasiswa) == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                    </select>
                    @error('agama_mahasiswa') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="noTelpMHS">No. Telp Mahasiswa</label>
                    <input type="tel" class="form-control @error('no_telp_mahasiswa') is-invalid @enderror" id="noTelpMHS" name="no_telp_mahasiswa" placeholder="Silahkan mengisi Nomor Telepon" value="{{ old('no_telp_mahasiswa', $mahasiswa->no_telp_mahasiswa) }}">
                    @error('no_telp_mahasiswa') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <h3 style="font-size: 1.35rem; font-weight: bold;">Riwayat Pendidikan :</h3>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nama_sekolah_dasar">Nama Sekolah Dasar</label>
                    <input type="text" class="form-control" id="nama_sekolah_dasar" name="nama_sekolah_dasar" placeholder="Silahkan mengisi Riwayat Pendidikan (SD)" value="{{ old('nama_sekolah_dasar', $mahasiswa->nama_sekolah_dasar) }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="nama_menengah_pertama">Nama Sekolah Menengah Pertama</label>
                    <input type="text" class="form-control" id="nama_menengah_pertama" name="nama_menengah_pertama" placeholder="Silahkan mengisi Riwayat Pendidikan (SMP)" value="{{ old('nama_menengah_pertama', $mahasiswa->nama_menengah_pertama) }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="nama_sekolah_atas">Nama Sekolah Menengah Atas</label>
                    <input type="text" class="form-control" id="nama_sekolah_atas" name="nama_sekolah_atas" placeholder="Silahkan mengisi Riwayat Pendidikan (SMA)" value="{{ old('nama_sekolah_atas', $mahasiswa->nama_sekolah_atas) }}">
                </div>
            </div>
            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <h3 style="font-size: 1.35rem; font-weight: bold;">Detail Akademik :</h3>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="semester">Semester</label>
                    <select id="semester" name="semester" class="form-control form-control-sm px-5">
                        @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ $i }}" {{ old('semester', $mahasiswa->semester) == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="ipk">IPK</label>
                    <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Contoh: 3.75" value="{{ old('ipk', $mahasiswa->ipk) }}">
                </div>
                <div class="form-group col-md-8">
                    <label for="motivasi_mahasiswa">Motivasi Mahasiswa :</label>
                    <textarea class="form-control" id="motivasi_mahasiswa" name="motivasi_mahasiswa" rows="3">{{ old('motivasi_mahasiswa', $mahasiswa->motivasi_mahasiswa) }}</textarea>
                </div>
            </div>

            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <h3 style="font-size: 1.35rem; font-weight: bold;">Detail Orang Tua Mahasiswa :</h3>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="nama_ayah">Nama Ayah :</label>
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Silahkan mengisi Nama Ayah" value="{{ old('nama_ayah', $mahasiswa->nama_ayah) }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah :</label>
                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Silahkan mengisi Pekerjaan Ayah" value="{{ old('pekerjaan_ayah', $mahasiswa->pekerjaan_ayah) }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="nama_ibu">Nama Ibu :</label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Silahkan mengisi Nama Ibu" value="{{ old('nama_ibu', $mahasiswa->nama_ibu) }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu :</label>
                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Silahkan mengisi Pekerjaan Ibu" value="{{ old('pekerjaan_ibu', $mahasiswa->pekerjaan_ibu) }}">
                </div>
            </div>

            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <div class="form-group">
                <label for="fotoProfilMHS">Foto Profil MHS (Kosongkan jika tidak ingin diubah)</label>
                {{-- Elemen untuk menampilkan preview gambar --}}
                @if($mahasiswa->foto_profil_mhs)
                    <img id="fotoProfilPreview" src="{{ asset('storage/' . $mahasiswa->foto_profil_mhs) }}" alt="Preview Foto Profil" class="img-thumbnail mt-2 mb-2 d-block" style="max-width: 150px;"/>
                @else
                    <img id="fotoProfilPreview" src="#" alt="Preview Foto Profil" class="img-thumbnail mt-2 mb-2" style="display: none; max-width: 150px;"/>
                @endif
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('foto_profil_mhs') is-invalid @enderror" id="fotoProfilMHS" name="foto_profil_mhs" accept="image/*">
                    <label class="custom-file-label" for="fotoProfilMHS">Pilih file gambar baru...</label>
                    @error('foto_profil_mhs') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <hr class="batas-form my-4"> <!-- Garis pemisah -->
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="pekerjaan_bagi_mahasiswa">Pekerjaan Bagi Mahasiswa :</label>
                    <input type="text" class="form-control" id="pekerjaan_bagi_mahasiswa" name="pekerjaan_bagi_mahasiswa" placeholder="Silahkan mengisi Pekerjaan (jika ada)" value="{{ old('pekerjaan_bagi_mahasiswa', $mahasiswa->pekerjaan_bagi_mahasiswa) }}">
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsiPekerjaan_mhs">Deskripsi Pekerjaan</label>
                <textarea class="form-control" id="deskripsiPekerjaan_mhs" name="deskripsi_pekerjaan" rows="3">{{ old('deskripsi_pekerjaan', $mahasiswa->deskripsi_pekerjaan) }}</textarea>
            </div>

            <div class="d-flex justify-content-center px-2 mt-4">
                <button type="submit" class="btn btn-success col-4 mr-2 py-3">SIMPAN PERUBAHAN</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger col-4 py-3">BATAL</a>
            </div>
        </form>
    </section>
</div>
@endsection

@push('page-scripts')
{{-- Script untuk Flatpickr dan preview gambar --}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#tanggalLahir_mhs", {
            altInput: true,
            altFormat: "d F Y",
            dateFormat: "Y-m-d",
        });

        document.getElementById('fotoProfilMHS').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
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
