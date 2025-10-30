@extends('layouts.admin')

@section('title', 'Data Saran')

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="data-saran-section container col-lg-12 d-flex flex-column justify-content-center px-0 py-5 mx-0 my-5">
        <h3 class="section-title mb-4">Pengelolaan Data Saran</h3>
        <hr class="col-lg-12 col-md-12 px-0">

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
                        <th class="align-middle">Nama Pengirim</th>
                        <th class="align-middle">Isi Saran</th>
                        <th class="align-middle">Status</th>
                        <th class="align-middle px-2 col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sarans as $saran)
                    <tr>
                        <td>{{ $loop->iteration + $sarans->firstItem() - 1 }}</td>
                        <td>{{ $saran->nama_lengkap ?? 'Anonim' }}</td>
                        <td>{{ Str::limit($saran->isi_saran, 150) }}</td>
                        <td>
                            @if ($saran->status == 'Menunggu Balasan')
                                <span class="badge badge-warning">{{ $saran->status }}</span>
                            @else
                                <span class="badge badge-success">{{ $saran->status }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('saran.edit', $saran->id) }}" class="btn btn-sm btn-info edit-btn" title="Balas/Edit"><i class="fas fa-reply"></i></a>
                            <a href="#" class="btn btn-sm btn-danger delete-btn" data-toggle="modal" data-target="#deleteModal{{ $saran->id }}" title="Hapus"><i class="fas fa-trash-alt"></i></a>
                            <a href="{{ route('saran.show', $saran->id) }}" class="btn btn-sm btn-warning info-btn" title="Detail"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>

                    <div class="modal fade" id="deleteModal{{ $saran->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $saran->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $saran->id }}">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus saran ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('saran.destroy', $saran->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data saran.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $sarans->links() }}
        </div>
    </section>
</div>
@endsection
