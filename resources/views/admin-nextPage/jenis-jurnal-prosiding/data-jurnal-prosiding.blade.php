@extends('layouts.admin')

@section('title', 'Data Jurnal / Prosiding')

@section('content')
    <div class="content-wrapper col-lg-10 px-0 mx-4">
        <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
            <h3 class="section-title mb-4">Pengelolaan Jenis Jurnal / Prosiding</h3>
            <hr class="col-lg-12 col-md-12 px-0">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="{{ route('jurnal.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                    <i class="fas fa-plus mr-2"></i> Tambah Jenis Jurnal / Prosiding
                </a>
                <div class="d-flex align-items-center">
                    <div class="mr-3">
                        <form action="{{ route('jurnal.index') }}" method="GET" class="d-flex align-items-center">
                            <label for="show" class="mr-2">Show</label>
                            <select name="show" id="show" class="form-control" onchange="this.form.submit()">
                                <option value="10" {{ request('show') == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('show') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('show') == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ request('show') == 100 ? 'selected' : '' }}>100</option>
                            </select>
                        </form>
                    </div>
                    <form action="{{ route('jurnal.index') }}" method="GET" class="d-flex align-items-center">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari Judul, Penerbit..." value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="col-lg-12 col-md-12 px-0">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped data-table">
                    <thead>
                        <tr>
                            <th class="align-middle">No.</th>
                            <th class="align-middle">Jenis Judul Jurnal & Prosiding</th>
                            <th class="align-middle">Tipe</th>
                            <th class="align-middle">Tahun</th>
                            <th class="align-middle">Penerbit</th>
                            <th class="align-middle px-2 col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jurnals as $jurnal)
                            <tr>
                                <td>{{ $loop->iteration + $jurnals->perPage() * ($jurnals->currentPage() - 1) }}</td>
                                <td>{{ $jurnal->jenis_judul_jurnal_prosiding }}</td>
                                <td>{{ $jurnal->tipe_jurnal_prosiding }}</td>
                                <td>{{ $jurnal->tahun_jurnal_prosiding }}</td>
                                <td>{{ $jurnal->penerbit_jurnal_publikasi }}</td>
                                <td>
                                    <a href="{{ route('jurnal.edit', $jurnal->id) }}" class="btn btn-sm btn-info edit-btn"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('jurnal.show', $jurnal->id) }}" class="btn btn-sm btn-warning info-btn"><i class="fas fa-info-circle"></i></a>
                                    <form action="{{ route('jurnal.destroy', $jurnal->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data jurnal / prosiding.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- <div class="d-flex justify-content-center">
                {{ $jurnals->links('pagination::bootstrap-4') }}
            </div> --}}
        </section>
    </div>
@endsection
