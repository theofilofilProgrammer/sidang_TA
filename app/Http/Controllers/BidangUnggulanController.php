<?php

namespace App\Http\Controllers;

use App\Models\BidangUnggulan;
use App\Models\Dosen; // Tambahkan jika Anda ingin menampilkan daftar dosen di form
use App\Models\MataKuliah; // Tambahkan jika Anda ingin menampilkan daftar mata kuliah di form
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BidangUnggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $bidangUnggulans = BidangUnggulan::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama_bidang_unggulan', 'like', "%{$search}%")
                             ->orWhere('fokus_bidang', 'like', "%{$search}%")
                             ->orWhere('deskripsi_lengkap_bidang', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.bidang-unggulan.data-bidangUnggulan', compact('bidangUnggulans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosens = Dosen::orderBy('nama_dosen')->get();
        $mataKuliahs = MataKuliah::orderBy('nama_mk')->get();
        return view('admin-nextPage.bidang-unggulan.form-add-bidangUnggulan', compact('dosens', 'mataKuliahs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bidang_unggulan' => 'required|string|max:255',
            'fokus_bidang' => 'nullable|string|max:255',
            'deskripsi_lengkap_bidang' => 'required|string',
            'gambar_bidang_unggulan' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'dosens' => 'nullable|array',
            'dosens.*' => 'exists:dosens,id',
            'mata_kuliahs' => 'nullable|array',
            'mata_kuliahs.*' => 'exists:mata_kuliahs,id',
        ]);

        // Menggunakan transaction untuk memastikan semua operasi (create & sync) berhasil
        DB::transaction(function () use ($request) {
            $data = $request->except(['dosens', 'mata_kuliahs']);

            if ($request->hasFile('gambar_bidang_unggulan')) {
                $data['gambar_bidang_unggulan'] = $request->file('gambar_bidang_unggulan')->store('bidang_unggulan', 'public');
            }

            $bidangUnggulan = BidangUnggulan::create($data);

            // Sync relationships
            if ($request->has('dosens')) {
                $bidangUnggulan->dosens()->sync($request->input('dosens'));
            }
            if ($request->has('mata_kuliahs')) {
                $bidangUnggulan->mataKuliahs()->sync($request->input('mata_kuliahs'));
            }
        });

        return redirect()->route('bidang-unggulan.index')->with('success', 'Data bidang unggulan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bidangUnggulan = BidangUnggulan::with(['dosens', 'mataKuliahs'])->findOrFail($id);
        return view('admin-nextPage.bidang-unggulan.detail-bidangUnggulan', compact('bidangUnggulan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bidangUnggulan = BidangUnggulan::with(['dosens', 'mataKuliahs'])->findOrFail($id);
        $dosens = Dosen::orderBy('nama_dosen')->get();
        $mataKuliahs = MataKuliah::orderBy('nama_mk')->get();
        return view('admin-nextPage.bidang-unggulan.form-edit-bidangUnggulan', compact('bidangUnggulan', 'dosens', 'mataKuliahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bidangUnggulan = BidangUnggulan::findOrFail($id);

        $request->validate([
            'nama_bidang_unggulan' => 'required|string|max:255',
            'fokus_bidang' => 'nullable|string|max:255',
            'deskripsi_lengkap_bidang' => 'required|string',
            'gambar_bidang_unggulan' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'dosens' => 'nullable|array',
            'dosens.*' => 'exists:dosens,id',
            'mata_kuliahs' => 'nullable|array',
            'mata_kuliahs.*' => 'exists:mata_kuliahs,id',
        ]);

        // Menggunakan transaction untuk memastikan semua operasi (update & sync) berhasil
        DB::transaction(function () use ($request, $bidangUnggulan) {
            $data = $request->except(['dosens', 'mata_kuliahs']);

            if ($request->hasFile('gambar_bidang_unggulan')) {
                // Hapus gambar lama jika ada
                if ($bidangUnggulan->gambar_bidang_unggulan) {
                    Storage::disk('public')->delete($bidangUnggulan->gambar_bidang_unggulan);
                }
                $data['gambar_bidang_unggulan'] = $request->file('gambar_bidang_unggulan')->store('bidang_unggulan', 'public');
            }

            $bidangUnggulan->update($data);

            // Sync relationships
            $bidangUnggulan->dosens()->sync($request->input('dosens', []));
            $bidangUnggulan->mataKuliahs()->sync($request->input('mata_kuliahs', []));
        });

        return redirect()->route('bidang-unggulan.index')->with('success', 'Data bidang unggulan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bidangUnggulan = BidangUnggulan::findOrFail($id);

        if ($bidangUnggulan->gambar_bidang_unggulan) {
            Storage::disk('public')->delete($bidangUnggulan->gambar_bidang_unggulan);
        }

        $bidangUnggulan->delete();

        return redirect()->route('bidang-unggulan.index')->with('success', 'Data bidang unggulan berhasil dihapus.');
    }

    /**
     * Menampilkan daftar bidang unggulan untuk halaman frontend.
     */
    public function frontendIndex()
    {
        $bidangUnggulans = BidangUnggulan::with(['dosens', 'mataKuliahs'])->get();
        return view('pages.frontend.riset.isi_kelompokkeahlian', compact('bidangUnggulans'));
    }

    /**
     * Menampilkan detail bidang unggulan untuk halaman frontend.
     */
    public function frontendShow($id)
    {
        $bidangUnggulan = BidangUnggulan::with(['dosens', 'mataKuliahs'])->findOrFail($id);
        // Tentukan view yang sesuai untuk menampilkan detail
        return view('pages.frontend.riset.desc-bidangUnggulan', compact('bidangUnggulan'));
    }
}
