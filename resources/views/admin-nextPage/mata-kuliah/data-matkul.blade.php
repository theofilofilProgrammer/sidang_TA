{{-- filepath: resources/views/admin-nextPage/mata-kuliah/data-matkul.blade.php --}}
@extends('layouts.admin')

@section('title', 'Data Mata Kuliah')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">PENGELOLAAN MATA KULIAH</h3>
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
            <a href="{{ route('matakuliah.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                <i class="fas fa-plus mr-2"></i> Tambahkan Mata Kuliah
            </a>
        </div>
        <hr class="col-lg-12 col-md-12 px-0">
        <form action="{{ route('matakuliah.index') }}" method="GET" class="form-inline">
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
                    <input type="text" name="search" class="form-control" placeholder="Cari Kode/Nama Mata Kuliah..." value="{{ request('search') }}">
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
                        <th class="align-middle">No.</th>
                        <th class="align-middle">Kode Mata Kuliah</th>
                        <th class="align-middle">Nama Mata Kuliah</th>
                        <th class="align-middle">Semester</th>
                        <th class="align-middle">SKS (Teori)</th>
                        <th class="align-middle">SKS (Praktik)</th>
                        <th class="align-middle">Total SKS</th>
                        <th class="align-middle">Keterangan</th>
                        <th class="align-middle px-2 col-2">Aksi (Matkul)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mataKuliahs as $index => $mk)
                        <tr>
                            <td>{{ $mataKuliahs->firstItem() + $index }}.</td>
                            <td>{{ $mk->kode_mk }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td>{{ $mk->semester }}</td>
                            <td>{{ $mk->sks_teori }}</td>
                            <td>{{ $mk->sks_praktik }}</td>
                            <td>{{ $mk->jumlah_sks }}</td>
                            <td>{{ $mk->keterangan }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapus data ini?');" action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline-flex align-items-center">
                                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-info edit-btn mx-1"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">Data Mata Kuliah belum tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- <div class="d-flex justify-content-center">
                {{ $mataKuliahs->appends(request()->query())->links() }}
            </div> --}}
        </div>
    </section>
</div>
@endsection
