@extends('layouts.admin')

@section('title', 'Data Pengumuman')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">PENGELOLAAN PENGUMUMAN</h3>
        <hr class="col-lg-12 col-md-12 px-0">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('pengumuman.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                <i class="fas fa-plus mr-2"></i> Tambahkan pengumuman
            </a>
        </div>
        <hr class="col-lg-12 col-md-12 px-0">
        <form action="{{ route('pengumuman.index') }}" method="GET" class="form-inline">
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
                    <input type="text" name="search" class="form-control" placeholder="Cari judul pengumuman ..." value="{{ request('search') }}">
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
                        <th class="align-middle">Judul Pengumuman</th>
                        <th class="align-middle">Isi Pengumuman</th>
                        <th class="align-middle">Dokumen</th>
                        <th class="align-middle">Dokumentasi / Gambaran</th>
                        <th class="align-middle">Tgl pengumuman</th>
                        <th class="align-middle px-2 col-2">Aksi (Pengumuman)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengumumans as $index => $pengumuman)
                        <tr>
                            <td>{{ $pengumumans->firstItem() + $index }}.</td>
                            <td>{{ $pengumuman->judul_pengumuman }}</td>
                            <td>{{ Str::limit($pengumuman->isi_pengumuman, 80) }}</td>
                            <td>
                                @if($pengumuman->dokumen)
                                    <a href="{{ asset('storage/' . $pengumuman->dokumen) }}" class="text-dark" target="_blank">
                                        <i class="fas fa-file-alt"></i><br>Lihat Dokumen
                                    </a>
                                @else
                                    <span>-</span>
                                @endif
                            </td>
                            <td>
                                @if($pengumuman->dokumentasi)
                                    <img src="{{ asset('storage/' . $pengumuman->dokumentasi) }}" alt="Detail" class="detail-pic">
                                @else
                                    <span>-</span>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($pengumuman->tanggal_pengumuman)->format('d F Y') }}</td>
                            <td>
                                <a href="{{ route('pengumuman.edit', $pengumuman->id) }}" class="btn btn-sm btn-info edit-btn"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger delete-btn"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                <a href="{{ route('pengumuman.show', $pengumuman->id) }}" class="btn btn-sm btn-warning info-btn"><i class="fas fa-info-circle"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Pengumuman belum tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $pengumumans->appends(request()->query())->links() }}
            </div>
        </div>
    </section>
</div>
@endsection
