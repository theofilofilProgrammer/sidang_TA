<?php

namespace App\Http\Controllers;

use App\Models\PrestasiPenghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiPenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $prestasis = PrestasiPenghargaan::query()
            ->when($search, function ($query, $search) {
                return $query->where('judul_prestasi_penghargaan', 'like', "%{$search}%")
                             ->orWhere('kategori_prestasi_penghargaan', 'like', "%{$search}%")
                             ->orWhere('tahun_prestasi_penghargaan', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.prestasi-penghargaan.data-prestasi', compact('prestasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-nextPage.prestasi-penghargaan.form-add-dataprestasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_prestasi_penghargaan' => 'required|string|max:255',
            'kategori_prestasi_penghargaan' => 'nullable|string|max:255',
            'tahun_prestasi_penghargaan' => 'nullable|integer',
            'deskripsi_prestasi_penghargaan' => 'nullable|string',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            $data['dokumentasi'] = $request->file('dokumentasi')->store('dokumentasi_prestasi', 'public');
        }

        PrestasiPenghargaan::create($data);

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi/penghargaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prestasi = PrestasiPenghargaan::findOrFail($id);
        return view('admin-nextPage.prestasi-penghargaan.detail-prestasi', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prestasi = PrestasiPenghargaan::findOrFail($id);
        return view('admin-nextPage.prestasi-penghargaan.form-edit-dataprestasi', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prestasi = PrestasiPenghargaan::findOrFail($id);
        $request->validate([
            'judul_prestasi_penghargaan' => 'required|string|max:255',
            'kategori_prestasi_penghargaan' => 'nullable|string|max:255',
            'tahun_prestasi_penghargaan' => 'nullable|integer',
            'deskripsi_prestasi_penghargaan' => 'nullable|string',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            if ($prestasi->dokumentasi) {
                Storage::disk('public')->delete($prestasi->dokumentasi);
            }
            $data['dokumentasi'] = $request->file('dokumentasi')->store('dokumentasi_prestasi', 'public');
        }

        $prestasi->update($data);

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi/penghargaan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prestasi = PrestasiPenghargaan::findOrFail($id);
        if ($prestasi->dokumentasi) {
            Storage::disk('public')->delete($prestasi->dokumentasi);
        }
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi/penghargaan berhasil dihapus.');
    }

    // Metode baru untuk frontend (halaman user)

    /**
     * Display a listing of the resources for the user.
     */
    public function frontendIndex()
    {
        $prestasis = PrestasiPenghargaan::latest()->get();
        return view('pages.frontend.profil_prodi.isi_prestasi', compact('prestasis'));
    }

    /**
     * Display the specified resource for the user.
     */
    public function frontendShow($id)
    {
        $prestasi = PrestasiPenghargaan::findOrFail($id);
        return view('pages.frontend.profil_prodi.desc-prestasi', compact('prestasi'));
    }
}
