<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PengumumanController extends Controller
{
    // TAMPIL DATA (ADMIN)
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $pengumumans = Pengumuman::query()
            ->when($search, function ($query, $search) {
                return $query->where('judul_pengumuman', 'like', "%{$search}%")
                             ->orWhere('isi_pengumuman', 'like', "%{$search}%");
            })
            ->latest('tanggal_pengumuman')
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.pengumuman.data-pengumuman', compact('pengumumans'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('admin-nextPage.pengumuman.form-add-datapengumuman');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'judul_pengumuman' => 'required|string|max:255',
            'isi_pengumuman' => 'required|string',
            'tanggal_pengumuman' => 'required',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:4096',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        // Konversi tanggal jika perlu
        $tanggal = $request->tanggal_pengumuman;
        if (preg_match('/\d{2}\/\d{2}\/\d{4}/', $tanggal)) {
            $tanggal = Carbon::createFromFormat('d/m/Y', $tanggal)->format('Y-m-d');
        }

        $data = $request->all();
        $data['tanggal_pengumuman'] = $tanggal;

        if ($request->hasFile('dokumen')) {
            $data['dokumen'] = $request->file('dokumen')->store('dokumen_pengumuman', 'public');
        }
        if ($request->hasFile('dokumentasi')) {
            $data['dokumentasi'] = $request->file('dokumentasi')->store('dokumentasi_pengumuman', 'public');
        }

        Pengumuman::create($data);

        return redirect()->route('pengumuman.index')->with('success', 'Data pengumuman berhasil ditambahkan.');
    }

    // DETAIL
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin-nextPage.pengumuman.detailpengumuman', compact('pengumuman'));
    }

    // FORM EDIT
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin-nextPage.pengumuman.form-edit-datapengumuman', compact('pengumuman'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $request->validate([
            'judul_pengumuman' => 'required|string|max:255',
            'isi_pengumuman' => 'required|string',
            'tanggal_pengumuman' => 'required',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:4096',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $data = $request->all();

        $tanggal = $request->tanggal_pengumuman;
        if (preg_match('/\d{2}\/\d{2}\/\d{4}/', $tanggal)) {
            $tanggal = Carbon::createFromFormat('d/m/Y', $tanggal)->format('Y-m-d');
        }
        $data['tanggal_pengumuman'] = $tanggal;

        if ($request->hasFile('dokumen')) {
            if ($pengumuman->dokumen) {
                Storage::disk('public')->delete($pengumuman->dokumen);
            }
            $data['dokumen'] = $request->file('dokumen')->store('dokumen_pengumuman', 'public');
        }
        if ($request->hasFile('dokumentasi')) {
            if ($pengumuman->dokumentasi) {
                Storage::disk('public')->delete($pengumuman->dokumentasi);
            }
            $data['dokumentasi'] = $request->file('dokumentasi')->store('dokumentasi_pengumuman', 'public');
        }

        $pengumuman->update($data);

        return redirect()->route('pengumuman.index')->with('success', 'Data pengumuman berhasil diperbarui.');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if ($pengumuman->dokumen) {
            Storage::disk('public')->delete($pengumuman->dokumen);
        }
        if ($pengumuman->dokumentasi) {
            Storage::disk('public')->delete($pengumuman->dokumentasi);
        }

        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Data pengumuman berhasil dihapus.');
    }

    // FRONTEND: TAMPILKAN PENGUMUMAN (USER)
    public function pengumumanIndex(Request $request)
    {
        $tahun_options = Pengumuman::selectRaw('YEAR(tanggal_pengumuman) as tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        $query = Pengumuman::query();

        if ($request->tahun_pengumuman) {
            $query->whereYear('tanggal_pengumuman', $request->tahun_pengumuman);
        }
        if ($request->search) {
            $query->where(function($q) use ($request) {
                $q->where('judul_pengumuman', 'like', '%' . $request->search . '%')
                  ->orWhere('isi_pengumuman', 'like', '%' . $request->search . '%');
            });
        }

        $pengumumans = $query->orderBy('tanggal_pengumuman', 'desc')->get();

        return view('pages.frontend.pengumuman', compact('pengumumans', 'tahun_options'));
    }

    // FRONTEND: DETAIL PENGUMUMAN
    public function showPengumuman($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pages.frontend.isi_desc_pengumuman', compact('pengumuman'));
    }
}
