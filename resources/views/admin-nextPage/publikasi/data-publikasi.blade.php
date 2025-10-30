@extends('layouts.admin')

@section('title', 'Data Publikasi')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">Pengelolaan Data Publikasi</h3>
        <hr class="col-lg-12 col-md-12 px-0">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('publikasi.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                <i class="fas fa-plus mr-2"></i> Tambah Data Publikasi
            </a>
        </div>
        <hr class="col-lg-12 col-md-12 px-0">

        <form action="{{ route('publikasi.index') }}" method="GET" class="form-inline">
            <div class="d-flex justify-content-between align-items-center mb-4 w-100">
                <div class="form-group mb-0 mr-3 d-flex align-items-center">
                    <label for="show" class="mr-2 mb-0">Show</label>
                    <select name="show" id="show" class="form-control form-control-sm" onchange="this.form.submit()">
                        <option value="10" {{ request('show', 10) == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request('show') == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request('show') == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('show') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                    <span class="ml-2">entries</span>
                </div>
                <div class="col-md-4 px-0 input-group search-input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari Judul, Abstrak, Penulis..." value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th class="align-middle">No.</th>
                        <th class="align-middle">Judul Publikasi</th>
                        <th class="align-middle">Abstrak Publikasi</th>
                        <th class="align-middle">Dosen Penulis</th>
                        <th class="align-middle">Jenis Judul Jurnal & Prosiding</th>
                        <th class="align-middle px-2 col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        @forelse($daftarPublikasi as $index => $publikasi)
                            <tr>
                                <td>{{ $daftarPublikasi->firstItem() + $index }}</td>
                                <td>{{ $publikasi->judul_publikasi }}</td>
                                <td>{{ Str::limit($publikasi->abstrak_publikasi, 150) }}</td>
                                <td>
                                    @forelse($publikasi->dosens as $dosen)
                                        {{ $dosen->nama_dosen }}<br>
                                    @empty
                                        N/A
                                    @endforelse
                                </td>
                                <td>{{ $publikasi->jurnalProsiding?->jenis_judul_jurnal_prosiding ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('publikasi.show', $publikasi->id) }}" class="btn btn-sm btn-warning info-btn" title="Detail"><i class="fas fa-info-circle"></i></a>
                                    <a href="{{ route('publikasi.edit', $publikasi->id) }}" class="btn btn-sm btn-info edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('publikasi.destroy', $publikasi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger delete-btn" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data publikasi.</td>
                            </tr>
                        @endforelse
                    </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $daftarPublikasi->links() }}
        </div>
    </section>
</div>
@endsection
