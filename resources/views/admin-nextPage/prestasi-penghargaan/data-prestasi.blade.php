@extends('layouts.admin')

@section('title', 'Data Prestasi & Penghargaan')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">Pengelolaan Data Prestasi & Penghargaan</h3>
        <hr class="col-lg-12 col-md-12 px-0">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('prestasi.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                <i class="fas fa-plus mr-2"></i> Tambahkan Data Prestasi / Penghargaan
            </a>
        </div>
        <hr class="col-lg-12 col-md-12 px-0">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-group mb-0 mr-3 d-flex align-items-center">
                <label for="showEntries" class="mr-2 mb-0">Show</label>
                <select id="showEntries" class="form-control form-control-sm px-5" onchange="window.location.href = this.value">
                    <option value="{{ route('prestasi.index', ['show' => 10, 'search' => request('search')]) }}" @if(request('show') == 10) selected @endif>10</option>
                    <option value="{{ route('prestasi.index', ['show' => 20, 'search' => request('search')]) }}" @if(request('show') == 20) selected @endif>20</option>
                    <option value="{{ route('prestasi.index', ['show' => 50, 'search' => request('search')]) }}" @if(request('show') == 50) selected @endif>50</option>
                    <option value="{{ route('prestasi.index', ['show' => 100, 'search' => request('search')]) }}" @if(request('show') == 100) selected @endif>100</option>
                </select>
                <span class="ml-2">entries</span>
            </div>
            <form action="{{ route('prestasi.index') }}" method="GET" class="col-md-4 input-group search-input-group">
                <input type="hidden" name="show" value="{{ request('show', 10) }}">
                <input type="text" name="search" class="form-control" placeholder="Cari judul prestasi / kategori / tahun ..." value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th class="align-middle">No.</th>
                        <th class="align-middle">Judul Prestasi / Penghargaan</th>
                        <th class="align-middle">Kategori</th>
                        <th class="align-middle">Tahun</th>
                        <th class="align-middle">Deskripsi Singkat</th>
                        <th class="align-middle">Dokumentasi</th>
                        <th class="align-middle px-2 col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($prestasis as $prestasi)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $prestasi->judul_prestasi_penghargaan }}</td>
                        <td class="align-middle">{{ $prestasi->kategori_prestasi_penghargaan }}</td>
                        <td class="align-middle">{{ $prestasi->tahun_prestasi_penghargaan }}</td>
                        <td class="align-middle">{{ Str::limit($prestasi->deskripsi_prestasi_penghargaan, 50) }}</td>
                        <td class="align-middle text-center">
                            @if ($prestasi->dokumentasi)
                                <img src="{{ asset('storage/' . $prestasi->dokumentasi) }}" alt="{{ $prestasi->judul_prestasi_penghargaan }}" class="detail-pic">
                            @else
                                <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('prestasi.edit', $prestasi->id) }}" class="btn btn-sm btn-info edit-btn"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('prestasi.destroy', $prestasi->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger delete-btn"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            <a href="{{ route('prestasi.show', $prestasi->id) }}" class="btn btn-sm btn-warning info-btn"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data prestasi/penghargaan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{ $prestasis->links() }}
        </div>
    </section>
</div>
@endsection
