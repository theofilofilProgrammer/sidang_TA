<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\JurnalProsiding;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $daftarPublikasi = Publikasi::with(['dosens', 'jurnalProsiding']) // Eager load untuk efisiensi
            ->when($search, function ($query, $search) {
                // Mencari di kolom tabel publikasi
                $query->where('judul_publikasi', 'like', "%{$search}%")
                      ->orWhere('abstrak_publikasi', 'like', "%{$search}%")
                      // Mencari di relasi dosens
                      ->orWhereHas('dosens', function ($q) use ($search) {
                          $q->where('nama_dosen', 'like', "%{$search}%");
                      })
                      // Mencari di relasi jurnalProsiding
                      ->orWhereHas('jurnalProsiding', function ($q) use ($search) {
                          $q->where('jenis_judul_jurnal_prosiding', 'like', "%{$search}%");
                      });
            })
            ->latest()
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.publikasi.data-publikasi', compact('daftarPublikasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosens = Dosen::orderBy('nama_dosen')->get();
        $jurnalProsidings = JurnalProsiding::orderBy('jenis_judul_jurnal_prosiding')->get();
        return view('admin-nextPage.publikasi.form-add-data-publikasi', compact('dosens', 'jurnalProsidings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_publikasi' => 'required|string|max:255',
            'abstrak_publikasi' => 'nullable|string',
            'deskripsi_publikasi' => 'nullable|string',
            'jurnal_prosiding_id' => 'required|exists:jurnal_prosidings,id',
            'dosen_ids' => 'required|array',
            'dosen_ids.*' => 'exists:dosens,id',
        ]);

        DB::transaction(function () use ($request) {
            $publikasi = Publikasi::create($request->except('dosen_ids'));
            $publikasi->dosens()->sync($request->input('dosen_ids'));
        });

        return redirect()->route('publikasi.index')->with('success', 'Data publikasi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publikasi $publikasi)
    {
        return view('admin-nextPage.publikasi.detail-data-publikasi', compact('publikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publikasi $publikasi)
    {
        $dosens = Dosen::orderBy('nama_dosen')->get();
        $jurnalProsidings = JurnalProsiding::orderBy('jenis_judul_jurnal_prosiding')->get();
        return view('admin-nextPage.publikasi.form-edit-data-publikasi', compact('publikasi', 'dosens', 'jurnalProsidings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publikasi $publikasi)
    {
        $request->validate([
            'judul_publikasi' => 'required|string|max:255',
            'abstrak_publikasi' => 'nullable|string',
            'deskripsi_publikasi' => 'nullable|string',
            'jurnal_prosiding_id' => 'required|exists:jurnal_prosidings,id',
            'dosen_ids' => 'required|array',
            'dosen_ids.*' => 'exists:dosens,id',
        ]);

        DB::transaction(function () use ($request, $publikasi) {
            $publikasi->update($request->except('dosen_ids'));
            $publikasi->dosens()->sync($request->input('dosen_ids', []));
        });

        return redirect()->route('publikasi.index')->with('success', 'Data publikasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publikasi $publikasi)
    {
        DB::transaction(function () use ($publikasi) {
            // Hapus relasi di tabel pivot terlebih dahulu
            $publikasi->dosens()->detach();
            // Hapus data publikasi
            $publikasi->delete();
        });

        return redirect()->route('publikasi.index')->with('success', 'Data publikasi berhasil dihapus.');
    }

    /**
     * Menampilkan halaman 'Jurnal & Publikasi' untuk pengguna,
     * termasuk daftar Jurnal/Prosiding dan publikasi terbaru.
     */
    public function frontendJurnalPublikasi()
    {
        // Mengambil semua data Jurnal/Prosiding untuk ditampilkan di bagian "Jurnal & Prosiding Kami"
        $jurnals = JurnalProsiding::with('mataKuliahs')->get();

        // Mengambil 3 publikasi terbaru untuk ditampilkan di bagian "Publikasi Terbaru"
        $publikasiTerbaru = Publikasi::with(['dosens', 'jurnalProsiding'])->latest()->take(3)->get();

        return view('pages.frontend.riset.isi_jurnal-publikasi', compact('jurnals', 'publikasiTerbaru'));
    }

    /**
     * Menampilkan detail publikasi individual untuk pengguna
     */
    public function showPublication($id)
    {
        $publikasi = Publikasi::with(['dosens', 'jurnalProsiding'])->findOrFail($id);

        return view('pages.frontend.riset.detail_publikasi', compact('publikasi'));
    }

    /**
     * Menampilkan semua publikasi dengan pagination untuk pengguna
     */
    public function allPublications(Request $request)
    {
        $search = $request->query('search');

        $publikasis = Publikasi::with(['dosens', 'jurnalProsiding'])
            ->when($search, function ($query, $search) {
                $query->where('judul_publikasi', 'like', "%{$search}%")
                      ->orWhere('abstrak_publikasi', 'like', "%{$search}%")
                      ->orWhereHas('dosens', function ($q) use ($search) {
                          $q->where('nama_dosen', 'like', "%{$search}%");
                      })
                      ->orWhereHas('jurnalProsiding', function ($q) use ($search) {
                          $q->where('jenis_judul_jurnal_prosiding', 'like', "%{$search}%");
                      });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('pages.frontend.riset.semua_publikasi', compact('publikasis', 'search'));
    }
}
