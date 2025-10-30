@extends('layouts.isi_akademik.struktur-kurikulum ')
@section('title-strukturikulum')
Struktur Kurikulum | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-strukturikulum')
<section class="hero-breadcrumb-section col-lg-12 px-0 d-flex align-items-center mx-0 my-0">
    <div class="container col-12 px-0 d-flex justify-content-between align-items-center">
        <div class="hero-breadcrumb-title-container col-lg-10 text-left">
            <h3 class="hero-breadcrumb-title mx-0 mb-0">Struktur Kurikulum</h3>
        </div>
    </div>
</section>

<!-- Hero Program Reguler (sama menyerupai banner) (Halaman Program Reguler) -->
<section class="hero-Curiculum-structure-section d-flex align-items-center mx-0 my-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Hero Akademik Prodi -->
            <div class="col-12 text-center pb-5">
                <h1 class="hero-Curiculum-title mb-1">Struktur Kurikulum Program Studi</h1>
                <h3 class="hero-Curiculum-subtitle mb-0">D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara</h3>
            </div>
        </div>
    </div>
</section>

<!-- Bagian content (konten kiri : sidebar kiri dan konten kanan : main kontent)-->
<section class="main-content-section container py-5 mx-auto col-lg-12">
    <div class="row">
        <!-- Main Content Kanan -->
        <div class="col-lg-12">
            <!-- Pendahuluan Kurikulum -->
            <div class="main-content-card main-content-kurikulum-intro d-flex mb-5 p-4 rounded shadow-sm">
                <h3 class="main-content-title">Gambaran Umum Struktur Kurikulum</h3>
                <p class="main-content-paragraph">Struktur Kurikulum Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak di Kabupaten Sukamara dirancang secara komprehensif untuk membekali mahasiswa dengan kompetensi yang relevan dan dibutuhkan oleh dunia industri. Kurikulum ini berorientasi pada praktik dan proyek untuk memastikan lulusan siap kerja.</p>
                <p class="main-content-paragraph col-12 px-0">
                    Total beban studi adalah, <strong>{{ $totalSKS }} SKS</strong> yang tersebar dalam 6 semester (3 tahun). Setiap mata kuliah dirancang untuk memberikan pengetahuan teoritis dan keterampilan praktis yang seimbang.
                </p>
            </div>

            @for ($semester = 1; $semester <= 6; $semester++)
            <div class="main-content-card main-content-semester d-flex mb-5 p-4 rounded shadow-sm">
                <h4 class="semester-title">Semester {{ $semester }}</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped curriculum-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Mata Kuliah</th>
                                @if($semester <= 5)
                                    <th>SKS (T/P)</th>
                                @endif
                                <th>SKS</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($matkulBySemester[$semester] as $i => $mk)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $mk->kode_mk }}</td>
                                    <td>{{ $mk->nama_mk }}</td>
                                    @if($semester <= 5)
                                        <td>{{ $mk->sks_teori }}/{{ $mk->sks_praktik }}</td>
                                    @endif
                                    <td>{{ $mk->jumlah_sks }}</td>
                                    <td>{{ $mk->keterangan }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ $semester <= 5 ? 6 : 5 }}" class="text-center">Belum ada data mata kuliah semester ini.</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="{{ $semester <= 5 ? 4 : 3 }}" class="text-center font-weight-bold">Total SKS Semester {{ $semester }}</td>
                                <td colspan="2" class="font-weight-bold">
                                    {{ $matkulBySemester[$semester]->sum('jumlah_sks') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            @endfor

            <!-- Total Keseluruhan SKS -->
            <div class="main-content-card main-content-total-sks mb-4 text-center">
                <h4 class="total-sks-title pb-2">Total Keseluruhan SKS</h4>
                <p class="total-sks-number">{{ $totalSKS }}</p>
                <p class="main-content-paragraph col-lg-12 text-center pt-3">
                    Jumlah Satuan Kredit Semester (SKS) yang harus ditempuh untuk<br>
                    menyelesaikan Program Studi D3 Teknologi Informasi.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
