<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Tampilkan daftar mata kuliah (dengan fitur search & show entries).
     */
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $mataKuliahs = MataKuliah::query()
            ->when($search, function ($query, $search) {
                return $query->where('kode_mk', 'like', "%{$search}%")
                             ->orWhere('nama_mk', 'like', "%{$search}%");
            })
            ->orderBy('semester')
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.mata-kuliah.data-matkul', compact('mataKuliahs'));
    }

    /**
     * Tampilkan form tambah data mata kuliah.
     */
    public function create()
    {
        return view('admin-nextPage.mata-kuliah.form-add-datamatkul');
    }

    /**
     * Simpan data mata kuliah baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk'    => 'required|unique:mata_kuliahs,kode_mk',
            'nama_mk'    => 'required|string|max:255',
            'semester'   => 'required|integer|min:1|max:8',
            'sks_teori'  => 'required|integer|min:0',
            'sks_praktik'=> 'required|integer|min:0',
            'jumlah_sks' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['jumlah_sks'] = (int)$data['sks_teori'] + (int)$data['sks_praktik'];
        MataKuliah::create($data);

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    /**
     * Tampilkan form edit data mata kuliah.
     */
    public function edit($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('admin-nextPage.mata-kuliah.form-edit-datamatkul', compact('matakuliah'));
    }

    /**
     * Update data mata kuliah.
     */
    public function update(Request $request, $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);

        $request->validate([
            'kode_mk'    => 'required|unique:mata_kuliahs,kode_mk,' . $matakuliah->id,
            'nama_mk'    => 'required|string|max:255',
            'semester'   => 'required|integer|min:1|max:8',
            'sks_teori'  => 'required|integer|min:0',
            'sks_praktik'=> 'required|integer|min:0',
            'jumlah_sks' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['jumlah_sks'] = (int)$data['sks_teori'] + (int)$data['sks_praktik'];
        $matakuliah->update($data);

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil diupdate.');
    }

    /**
     * Hapus data mata kuliah.
     */
    public function destroy($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil dihapus.');
    }

    /**
     * Tampilkan struktur kurikulum.
     */
    public function strukturKurikulum()
    {
        $matkulBySemester = [];
        for ($i = 1; $i <= 6; $i++) {
            $matkulBySemester[$i] = \App\Models\Matakuliah::where('semester', $i)->get();
        }
        $totalSKS = \App\Models\Matakuliah::sum('jumlah_sks');
        return view('pages.frontend.akademik.isi_struktur-kurikulum', compact('matkulBySemester', 'totalSKS'));
    }

    public function programReguler()
    {
        $totalSKS = \App\Models\Matakuliah::sum('jumlah_sks');
        return view('pages.frontend.akademik.isi_programReguler', compact('totalSKS'));
    }
}
