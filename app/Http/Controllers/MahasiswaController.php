<?php

// app/Http/Controllers/MahasiswaController.php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; // Pastikan model Mahasiswa di-import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Carbon\Carbon;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $show = $request->query('show', 10); // Default 10 entri per halaman
        $search = $request->query('search');

        $mahasiswas = Mahasiswa::query()
            ->when($search, function ($query, $search) {
                return $query->where('nim', 'like', "%{$search}%")
                             ->orWhere('nama_mahasiswa', 'like', "%{$search}%")
                             ->orWhere('email_mahasiswa', 'like', "%{$search}%");
            })
            ->latest() // Mengurutkan dari yang terbaru
            ->paginate($show)
            ->withQueryString(); // Agar parameter 'show' & 'search' tetap ada saat pindah halaman

        return view('admin-nextPage.manajemen-pengguna.Mahasiswa.data-mahasiswaterbaru', compact('mahasiswas'));
    }

    // ... method lainnya (create, store, show, edit, update, destroy)

    /**
     * Menampilkan form untuk membuat data mahasiswa baru.
     */
    public function create()
    {
        return view('admin-nextPage.manajemen-pengguna.Mahasiswa.form-add-datamahasiswa');
    }

    /**
     * Menyimpan data mahasiswa baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama_mahasiswa' => 'required|string|max:255',
            'email_mahasiswa' => 'required|email|unique:mahasiswas,email_mahasiswa',
            'jenis_kelamin' => 'nullable|string',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'mahasiswa_asal' => 'nullable|string',
            'tinggal_mahasiswa' => 'nullable|string',
            'agama_mahasiswa' => 'nullable|string',
            'no_telp_mahasiswa' => 'nullable|string|max:15',
            'nama_sekolah_dasar' => 'nullable|string',
            'nama_menengah_pertama' => 'nullable|string',
            'nama_sekolah_atas' => 'nullable|string',
            'semester' => 'nullable|integer|min:1|max:8',
            'ipk' => 'nullable|numeric|between:0,4.00',
            'motivasi_mahasiswa' => 'nullable|string',
            'nama_ayah' => 'nullable|string',
            'pekerjaan_ayah' => 'nullable|string',
            'nama_ibu' => 'nullable|string',
            'pekerjaan_ibu' => 'nullable|string',
            'foto_profil_mhs' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pekerjaan_bagi_mahasiswa' => 'nullable|string',
            'deskripsi_pekerjaan' => 'nullable|string',
        ]);

        $data = $request->all();

        // Handle upload file foto profil
        if ($request->hasFile('foto_profil_mhs')) {
            $data['foto_profil_mhs'] = $request->file('foto_profil_mhs')->store('profil_mahasiswa', 'public');
        }

        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail data mahasiswa.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        // Anda bisa membuat view detail jika diperlukan
        return view('admin-nextPage.manajemen-pengguna.Mahasiswa.detail-datamahasiswa', compact('mahasiswa'));
    }

    /**
     * Menampilkan form untuk mengedit data mahasiswa.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin-nextPage.manajemen-pengguna.Mahasiswa.form-edit-datamahasiswa', compact('mahasiswa'));
    }

    /**
     * Mengupdate data mahasiswa di database.
     */
    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('foto_profil_mhs')) {
            // Hapus file lama (jika ada)
            if ($mahasiswa->foto_profil_mhs && Storage::exists('public/' . $mahasiswa->foto_profil_mhs)) {
                Storage::delete('public/' . $mahasiswa->foto_profil_mhs);
            }

            // Simpan file baru
            $path = $request->file('foto_profil_mhs')->store('profil_mahasiswa', 'public');

            // Simpan path ke database
            $data['foto_profil_mhs'] = $path;
        } else {
            // Jangan ubah foto jika tidak upload baru
            unset($data['foto_profil_mhs']);
        }

        $mahasiswa->update($data);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diperbarui!');
    }


    /**
     * Menghapus data mahasiswa dari database.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Hapus foto profil dari storage
        if ($mahasiswa->foto_profil_mhs) {
            Storage::disk('public')->delete($mahasiswa->foto_profil_mhs);
        }

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }

    /**
     * Menampilkan halaman frontend mahasiswa dengan data dari database.
     */
    public function frontendIndex(Request $request)
    {
        $search = $request->query('search');
        $mahasiswa_asal = $request->query('mahasiswa_asal');

        $mahasiswas = Mahasiswa::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama_mahasiswa', 'like', "%{$search}%")
                             ->orWhere('nim', 'like', "%{$search}%")
                             ->orWhere('mahasiswa_asal', 'like', "%{$search}%");
            })
            ->when($mahasiswa_asal, function ($query, $mahasiswa_asal) {
                return $query->where('mahasiswa_asal', 'like', "%{$mahasiswa_asal}%");
            })
            ->latest()
            ->get();

        // Get unique mahasiswa asal for filter dropdown
        $mahasiswa_asal_options = Mahasiswa::select('mahasiswa_asal')
            ->whereNotNull('mahasiswa_asal')
            ->where('mahasiswa_asal', '!=', '')
            ->distinct()
            ->pluck('mahasiswa_asal')
            ->sort();

        return view('pages.frontend.profil_prodi.isi_mahasiswa', compact('mahasiswas', 'mahasiswa_asal_options'));
    }

    /**
     * Menampilkan detail mahasiswa untuk frontend.
     */
    public function frontendShow(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('pages.frontend.profil_prodi.desc-dataMahasiswa', compact('mahasiswa'));
    }
}
