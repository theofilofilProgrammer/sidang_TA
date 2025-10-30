@extends('layouts.admin')

@section('title', 'Data Bidang Unggulan Kami')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-mahasiswa-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">Pengelolaan Bidang Unggulan Kami</h3>
        <hr class="col-lg-12 col-md-12 px-0">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('bidang-unggulan.create') }}" class="btn btn-primary add-data-btn px-5 py-3">
                <i class="fas fa-plus mr-2"></i> Tambah Bidang Unggulan Baru
            </a>

            <div class="d-flex align-items-center">
                <form action="{{ route('bidang-unggulan.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control mr-2" placeholder="Cari Nama Bidang atau Fokus" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </form>
            </div>
        </div>
        <hr class="col-lg-12 col-md-12 px-0">

        <div class="table-responsive">
            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th class="align-middle text-center">No.</th>
                        <th class="align-middle">Nama Bidang</th>
                        <th class="align-middle">Fokus</th>
                        <th class="align-middle">Deskripsi Lengkap Bidang</th>
                        <th class="align-middle text-center col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bidangUnggulans as $bidangUnggulan)
                    <tr>
                        <td class="text-center">{{ $loop->iteration + $bidangUnggulans->perPage() * ($bidangUnggulans->currentPage() - 1) }}</td>
                        <td>{{ $bidangUnggulan->nama_bidang_unggulan }}</td>
                        <td>{{ $bidangUnggulan->fokus_bidang }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($bidangUnggulan->deskripsi_lengkap_bidang, 100, '...') }}</td>
                        <td class="text-center">
                            <a href="{{ route('bidang-unggulan.edit', $bidangUnggulan->id) }}" class="btn btn-sm btn-info edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('bidang-unggulan.show', $bidangUnggulan->id) }}" class="btn btn-sm btn-warning info-btn" title="Detail"><i class="fas fa-info-circle"></i></a>
                            <form action="{{ route('bidang-unggulan.destroy', $bidangUnggulan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data bidang unggulan yang ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $bidangUnggulans->links() }}
        </div>
    </section>
</div>
@endsection
