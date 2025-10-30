<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\JurnalProsiding;
use App\Models\MataKuliah; // 1. Pastikan model ini di-import
use Illuminate\Http\Request;

class JenisJurnalProsidingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $jurnals = JurnalProsiding::query()
            ->when($search, function ($query, $search) {
                return $query->where('jenis_judul_jurnal_prosiding', 'like', "%{$search}%")
                             ->orWhere('penerbit_jurnal_publikasi', 'like', "%{$search}%");
            })
            ->latest('tahun_jurnal_prosiding')
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.jenis-jurnal-prosiding.data-jurnal-prosiding', compact('jurnals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mata_kuliahs = MataKuliah::orderBy('nama_mk')->get();
        return view('admin-nextPage.jenis-jurnal-prosiding.form-add-data-jurnal-prosiding', compact('mata_kuliahs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_judul_jurnal_prosiding' => 'required|string|max:255',
            'tipe_jurnal_prosiding' => 'required|string',
            'deskripsi_jurnal_prosiding' => 'nullable|string',
            'tahun_jurnal_prosiding' => 'required|integer|digits:4',
            'issn' => 'nullable|string|max:255',
            'penerbit_jurnal_publikasi' => 'nullable|string|max:255',
            'kunjungi_jurnal_dalam_bentuk_url' => 'nullable|url',
            'mata_kuliah_ids' => 'nullable|array',
            'mata_kuliah_ids.*' => 'exists:mata_kuliahs,id',
        ]);

        DB::transaction(function () use ($request) {
            // 1. Buat data jurnal/prosiding utama
            $jurnal = JurnalProsiding::create($request->except('mata_kuliah_ids'));

            // 2. Jika ada mata kuliah yang dipilih, sinkronkan relasinya
            if ($request->has('mata_kuliah_ids')) {
                $jurnal->mataKuliahs()->sync($request->input('mata_kuliah_ids'));
            }
        });

        return redirect()->route('jurnal.index')->with('success', 'Data jurnal/prosiding berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mata_kuliahs = MataKuliah::orderBy('nama_mk')->get();
        $jurnal = JurnalProsiding::findOrFail($id);
        return view('admin-nextPage.jenis-jurnal-prosiding.detail-data-jurnal-prosiding', compact('jurnal', 'mata_kuliahs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // 2. Ambil semua data mata kuliah
        $mata_kuliahs = MataKuliah::orderBy('nama_mk')->get();

        $jurnal = JurnalProsiding::findOrFail($id);
        return view('admin-nextPage.jenis-jurnal-prosiding.form-edit-data-jurnal-prosiding', compact('jurnal', 'mata_kuliahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jurnal = JurnalProsiding::findOrFail($id);

        $request->validate([
            'jenis_judul_jurnal_prosiding' => 'required|string|max:255',
            'tipe_jurnal_prosiding' => 'required|string',
            'deskripsi_jurnal_prosiding' => 'nullable|string',
            'tahun_jurnal_prosiding' => 'required|integer|digits:4',
            'issn' => 'nullable|string|max:255',
            'penerbit_jurnal_publikasi' => 'nullable|string|max:255',
            'kunjungi_jurnal_dalam_bentuk_url' => 'nullable|url',
            'mata_kuliah_ids' => 'nullable|array',
            'mata_kuliah_ids.*' => 'exists:mata_kuliahs,id',
        ]);

        DB::transaction(function () use ($request, $jurnal) {
            // 1. Update data utama jurnal/prosiding
            $jurnal->update($request->except('mata_kuliah_ids'));

            // 2. Sinkronkan relasi mata kuliah.
            // Argumen kedua [] memastikan jika tidak ada ID yang dikirim,
            // semua relasi yang ada akan dihapus.
            $jurnal->mataKuliahs()->sync($request->input('mata_kuliah_ids', []));
        });

        return redirect()->route('jurnal.index')->with('success', 'Data jurnal/prosiding berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurnal = JurnalProsiding::findOrFail($id);
        $jurnal->delete();

        return redirect()->route('jurnal.index')->with('success', 'Data jurnal/prosiding berhasil dihapus.');
    }

    /**
     * Display a listing of the resource for the public/frontend page.
     */
    public function frontendJurnal_publikasi()
    {
        // Mengambil semua data jurnal dan prosiding, serta memuat relasi mata kuliahnya
        $jurnals = JurnalProsiding::with('mataKuliahs')->get();
        return view('pages.frontend.riset.isi_jurnal-publikasi', compact('jurnals'));
    }
}
