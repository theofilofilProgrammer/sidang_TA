@extends('layouts.admin')

@section('title', 'Data Kegiatan')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">DATA KEGIATAN</h3>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <hr class="col-lg-12 col-md-12 px-0">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                <i class="fas fa-plus mr-2"></i> Tambahkan Data Kegiatan
            </a>
        </div>
        <hr class="col-lg-12 col-md-12 px-0">
        <form action="{{ route('kegiatan.index') }}" method="GET" class="form-inline">
            <div class="d-flex justify-content-between align-items-center mb-4 w-100">
                <div class="form-group mb-0 mr-3 d-flex align-items-center">
                    <label for="show" class="mr-2 mb-0">Show</label>
                    <select name="show" id="show" class="form-control form-control-sm px-5" onchange="this.form.submit()">
                        <option value="10" {{ request('show') == 10 ? 'selected' : '' }}>10</option>
                        <option value="20" {{ request('show') == 20 ? 'selected' : '' }}>20</option>
                        <option value="50" {{ request('show') == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('show') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                    <span class="ml-2">entries</span>
                </div>
                <div class="col-md-4 px-0 input-group search-input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari Judul Kegiatan..." value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Deskripsi Kegiatan</th>
                        <th>Dokumentasi</th>
                        <th class="px-5">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kegiatans as $index => $kegiatan)
                        <tr>
                            <td>{{ $kegiatans->firstItem() + $index }}.</td>
                            <td>{{ $kegiatan->nama_kegiatan }}</td>
                            <td>{{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d F Y') }}</td>
                            <td>{{ Str::limit($kegiatan->deskripsi_kegiatan, 80) }}</td>
                            <td>
                                @if($kegiatan->dokumentasi)
                                    <img src="{{ asset('storage/' . $kegiatan->dokumentasi) }}" alt="Dokumentasi" class="table-kegiatan-pic">
                                @else
                                    <span>-</span>
                                @endif
                            </td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" class="d-inline-flex align-items-center">
                                    <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="btn btn-sm btn-warning info-btn"><i class="fas fa-info-circle"></i></a>
                                    <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-sm btn-info edit-btn mx-1"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Kegiatan belum tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- <div class="d-flex justify-content-center">
                {{ $kegiatans->appends(request()->query())->links() }}
            </div> --}}
        </div>
    </section>
</div>
@endsection
