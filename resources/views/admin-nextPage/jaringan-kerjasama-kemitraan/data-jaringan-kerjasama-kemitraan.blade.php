@extends('layouts.admin')

@section('title', 'Data Jaringan Kerja Sama & Kemitraan')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">Pengelolaan Data Jaringan Kerjasama & Kemitraan</h3>
        <hr class="col-lg-12 col-md-12 px-0">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('jaringan-kerjasama.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                <i class="fas fa-plus mr-2"></i> Tambahkan Data Jaringan Kerjasama & Kemitraaan
            </a>
        </div>
        <hr class="col-lg-12 col-md-12 px-0">
        <form method="GET" action="{{ route('jaringan-kerjasama.index') }}" class="form-inline">
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
                    <input type="text" name="search" class="form-control" placeholder="Cari Nama Kemitraan / Jenis Kemitraan..." value="{{ request('search') }}">
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
                        <th>Nama-nama Kemitraan & Jaringan Kerjasama</th>
                        <th>Jenis Kemitraan</th>
                        <th>Gambar Perusahaan</th>
                        <th>Pengertian Kemitraan & Jaringan Kerjasama</th>
                        <th class="px-2 col-2">Aksi (Jaringan Kerjasama)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jaringan as $index => $item)
                    <tr>
                        <td>{{ $jaringan->firstItem() + $index }}.</td>
                        <td>{{ $item->nama_jaringan_kerjasama }}</td>
                        <td>{{ $item->jenis_kemitraan }}</td>
                        <td>
                            @if($item->gambar_perusahaan)
                                <img src="{{ asset('storage/' . $item->gambar_perusahaan) }}" alt="Detail" class="detail-pic" style="max-width:80px;">
                            @else
                                <img src="{{ asset('images/default-image.png') }}" alt="Detail" class="detail-pic" style="max-width:80px;">
                            @endif
                        </td>
                        <td>{{ Str::limit($item->pengertian_jaringan_kerjasama, 80) }}</td>
                        <td>
                            <a href="{{ route('jaringan-kerjasama.edit', $item->id) }}" class="btn btn-sm btn-info edit-btn"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('jaringan-kerjasama.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger delete-btn"><i class="fas fa-trash-alt"></i></button>
                            </form>
                            <a href="{{ route('jaringan-kerjasama.show', $item->id) }}" class="btn btn-sm btn-warning info-btn"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Data belum tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- <div class="d-flex justify-content-center">
                {{ $jaringan->appends(request()->query())->links() }}
            </div> --}}
        </div>
    </section>
</div>
@endsection
