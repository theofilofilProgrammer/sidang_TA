<?php

namespace App\Http\Controllers;

use App\Models\JaringanKerjasama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JaringanKerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $show = $request->query('show', 10);
        $search = $request->query('search');

        $jaringan = JaringanKerjasama::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama_jaringan_kerjasama', 'like', "%{$search}%")
                             ->orWhere('jenis_kemitraan', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate($show)
            ->withQueryString();

        return view('admin-nextPage.jaringan-kerjasama-kemitraan.data-jaringan-kerjasama-kemitraan', compact('jaringan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-nextPage.jaringan-kerjasama-kemitraan.form-add-datakerjasama');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jaringan_kerjasama' => 'required|string|max:255',
            'jenis_kemitraan' => 'nullable|string|max:255',
            'gambar_perusahaan' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'pengertian_jaringan_kerjasama' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar_perusahaan')) {
            $data['gambar_perusahaan'] = $request->file('gambar_perusahaan')->store('jaringan_kerjasama', 'public');
        }

        JaringanKerjasama::create($data);

        return redirect()->route('jaringan-kerjasama.index')->with('success', 'Data jaringan kerjasama berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jaringan = JaringanKerjasama::findOrFail($id);
        return view('admin-nextPage.jaringan-kerjasama-kemitraan.detail-datakerjasama', compact('jaringan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jaringan = JaringanKerjasama::findOrFail($id);
        return view('admin-nextPage.jaringan-kerjasama-kemitraan.form-edit-datakerjasama', compact('jaringan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jaringan = JaringanKerjasama::findOrFail($id);

        $request->validate([
            'nama_jaringan_kerjasama' => 'required|string|max:255',
            'jenis_kemitraan' => 'nullable|string|max:255',
            'gambar_perusahaan' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'pengertian_jaringan_kerjasama' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar_perusahaan')) {
            if ($jaringan->gambar_perusahaan) {
                Storage::disk('public')->delete($jaringan->gambar_perusahaan);
            }
            $data['gambar_perusahaan'] = $request->file('gambar_perusahaan')->store('jaringan_kerjasama', 'public');
        }

        $jaringan->update($data);

        return redirect()->route('jaringan-kerjasama.index')->with('success', 'Data jaringan kerjasama berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jaringan = JaringanKerjasama::findOrFail($id);

        if ($jaringan->gambar_perusahaan) {
            Storage::disk('public')->delete($jaringan->gambar_perusahaan);
        }

        $jaringan->delete();

        return redirect()->route('jaringan-kerjasama.index')->with('success', 'Data jaringan kerjasama berhasil dihapus.');
    }

    /**
     * Display a listing of the resource for the frontend.
     */
    public function frontendIndex()
    {
        $kerjasamas = JaringanKerjasama::latest()->get();

        // Logika pengkategorian yang lebih baik dan saling eksklusif
        // Setiap mitra akan dimasukkan ke dalam satu kategori saja berdasarkan prioritas.

        $pendidikanPartners = $kerjasamas->filter(function ($kerjasama) {
            $nama = $kerjasama->nama_jaringan_kerjasama;
            // Cek nama yang secara jelas merupakan institusi pendidikan
            return str_contains($nama, 'University') ||
                   str_contains($nama, 'Institut') ||
                   str_contains($nama, 'Academy');
        });

        $pemerintahLembagaPartners = $kerjasamas->whereNotIn('id', $pendidikanPartners->pluck('id'))->filter(function ($kerjasama) {
            $nama = $kerjasama->nama_jaringan_kerjasama;
            // Cek untuk badan pemerintah atau lembaga resmi
            return str_contains($nama, 'Dinas') ||
                   str_contains($nama, 'Badan Siber') ||
                   str_contains($nama, 'BSSN') ||
                   str_contains($nama, 'Pemerintah') ||
                   str_contains($nama, 'BRIN') ||
                   str_contains($nama, 'KOMINFO');
        });

        $komunitasAsosiasiPartners = $kerjasamas->whereNotIn('id', $pendidikanPartners->pluck('id')->merge($pemerintahLembagaPartners->pluck('id')))->filter(function ($kerjasama) {
            $nama = $kerjasama->nama_jaringan_kerjasama;
            // Cek untuk komunitas atau asosiasi
            return str_contains($nama, 'Asosiasi') ||
                   str_contains($nama, 'Komunitas') ||
                   str_contains($nama, 'APTIKOM') ||
                   str_contains($nama, 'Cyberlympics');
        });

        // Semua mitra yang tersisa dianggap sebagai 'Industri'
        $idsToExclude = $pendidikanPartners->pluck('id')
            ->merge($pemerintahLembagaPartners->pluck('id'))
            ->merge($komunitasAsosiasiPartners->pluck('id'));

        $industriPartners = $kerjasamas->whereNotIn('id', $idsToExclude);

        return view('pages.frontend.profil_prodi.isi_kerjasama', compact('industriPartners', 'pemerintahLembagaPartners', 'komunitasAsosiasiPartners', 'pendidikanPartners'));
    }

    /**
     * Display the specified resource for the frontend.
     */
    public function frontendShow($id)
    {
        $kerjasama = JaringanKerjasama::findOrFail($id);
        return view('pages.frontend.profil_prodi.desc-kerjasama-kemitraan', compact('kerjasama'));
    }
}
