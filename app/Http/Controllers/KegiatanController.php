<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $kegiatans = Kegiatan::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama_kegiatan', 'like', "%{$search}%")
                             ->orWhere('deskripsi_kegiatan', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.kegiatan.data-kegiatan', compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-nextPage.kegiatan.form-add-kegiatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required|string',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Konversi tanggal dari dd/mm/yyyy ke Y-m-d
        $tanggal = $request->tanggal_kegiatan;
        if (preg_match('/\d{2}\/\d{2}\/\d{4}/', $tanggal)) {
            $tanggal = \Carbon\Carbon::createFromFormat('d/m/Y', $tanggal)->format('Y-m-d');
        }

        $data = $request->all();
        $data['tanggal_kegiatan'] = $tanggal;

        if ($request->hasFile('dokumentasi')) {
            $data['dokumentasi'] = $request->file('dokumentasi')->store('dokumentasi_kegiatan', 'public');
        }

        Kegiatan::create($data);

        return redirect()->route('kegiatan.index')->with('success', 'Data kegiatan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin-nextPage.kegiatan.detail-kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin-nextPage.kegiatan.form-edit-kegiatan', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_kegiatan' => 'required|date',
            'deskripsi_kegiatan' => 'required|string',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            if ($kegiatan->dokumentasi) {
                Storage::disk('public')->delete($kegiatan->dokumentasi);
            }
            $data['dokumentasi'] = $request->file('dokumentasi')->store('dokumentasi_kegiatan', 'public');
        }

        $kegiatan->update($data);

        return redirect()->route('kegiatan.index')->with('success', 'Data kegiatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->dokumentasi) {
            Storage::disk('public')->delete($kegiatan->dokumentasi);
        }

        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'Data kegiatan berhasil dihapus.');
    }
    public function kegiatanIndex(Request $request)
    {
        // Ambil semua tahun unik dari database untuk select option
        $tahun_options = Kegiatan::selectRaw('YEAR(tanggal_kegiatan) as tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        // Query dasar
        $query = Kegiatan::query();

        // Filter tahun jika dipilih
        if ($request->tahun_kegiatan) {
            $query->whereYear('tanggal_kegiatan', $request->tahun_kegiatan);
        }

        // Search judul/deskripsi
        if ($request->search) {
            $query->where(function($q) use ($request) {
                $q->where('nama_kegiatan', 'like', '%' . $request->search . '%')
                  ->orWhere('deskripsi_kegiatan', 'like', '%' . $request->search . '%');
            });
        }

        $kegiatans = $query->orderBy('tanggal_kegiatan', 'desc')->get();

        return view('pages.frontend.kegiatan', compact('kegiatans', 'tahun_options'));
    }

    public function showKegiatan($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('pages.frontend.isi_desc_kegiatan', compact('kegiatan'));
    }
}
