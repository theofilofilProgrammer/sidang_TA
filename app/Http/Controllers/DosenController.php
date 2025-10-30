<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $show = $request->query('show', 10); // Default 10 entri per halaman
        $search = $request->query('search');

        $dosens = Dosen::query()
            ->when($search, function ($query, $search) {
                return $query->where('nidn', 'like', "%{$search}%")
                             ->orWhere('nama_dosen', 'like', "%{$search}%")
                             ->orWhere('e_mail_dosen', 'like', "%{$search}%");
            })
            ->latest() // Mengurutkan dari yang terbaru
            ->paginate($show)
            ->withQueryString(); // Agar parameter 'show' & 'search' tetap ada saat pindah halaman

        return view('admin-nextPage.manajemen-pengguna.Dosen.data-dosen', compact('dosens'));
    }

    public function create()
    {
        return view('admin-nextPage.manajemen-pengguna.Dosen.form-add-datadosen');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nidn' => 'required|unique:dosens,nidn',
            'nama_dosen' => 'required|string|max:255',
            'e_mail_dosen' => 'required|email|unique:dosens,e_mail_dosen',
            'no_telp_dosen' => 'nullable|string|max:15',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'status_kepegawaian' => 'nullable|string',
            'bidang_keahlian' => 'nullable|string',
            'deskripsi_bidang_keahlian' => 'nullable|string',
            'jenis_dosen' => 'nullable|string',
            'foto_profil_dosen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tempat_tinggal_dosen' => 'nullable|string',
            'riwayat_pendidikan' => 'nullable|string',
            'perguruan_tinggi' => 'nullable|string',
            'bidang_keahlian_pendidikan' => 'nullable|string',
            'minat_penelitian' => 'nullable|string',
            'visi_dosen' => 'nullable|string',
            'misi_dosen' => 'nullable|string',
        ]);

        $data = $request->all();

        // Convert date format from MM/DD/YYYY to YYYY-MM-DD
        if (!empty($data['tanggal_lahir'])) {
            try {
                $data['tanggal_lahir'] = Carbon::createFromFormat('m/d/Y', $data['tanggal_lahir'])->format('Y-m-d');
            } catch (\Exception $e) {
                // If the date is already in correct format or invalid, keep as is
                // Laravel validation will handle invalid dates
            }
        }

        // Handle upload file foto profil
        if ($request->hasFile('foto_profil_dosen')) {
            $data['foto_profil_dosen'] = $request->file('foto_profil_dosen')->store('profil_dosen', 'public');
        }

        Dosen::create($data);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail data dosen.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('admin-nextPage.manajemen-pengguna.Dosen.detail-datadosen', compact('dosen'));
    }

    /**
     * Menampilkan form untuk mengedit data dosen.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('admin-nextPage.manajemen-pengguna.Dosen.form-edit-datadosen', compact('dosen'));
    }

    /**
     * Mengupdate data dosen di database.
     */
    public function update(Request $request, string $id)
    {
        $dosen = Dosen::findOrFail($id);

        // Validasi input
        $request->validate([
            'nidn' => 'required|unique:dosens,nidn,' . $dosen->id,
            'nama_dosen' => 'required|string|max:255',
            'e_mail_dosen' => 'required|email|unique:dosens,e_mail_dosen,' . $dosen->id,
            'no_telp_dosen' => 'nullable|string|max:15',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'status_kepegawaian' => 'nullable|string',
            'bidang_keahlian' => 'nullable|string',
            'deskripsi_bidang_keahlian' => 'nullable|string',
            'jenis_dosen' => 'nullable|string',
            'foto_profil_dosen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tempat_tinggal_dosen' => 'nullable|string',
            'riwayat_pendidikan' => 'nullable|string',
            'perguruan_tinggi' => 'nullable|string',
            'bidang_keahlian_pendidikan' => 'nullable|string',
            'minat_penelitian' => 'nullable|string',
            'visi_dosen' => 'nullable|string',
            'misi_dosen' => 'nullable|string',
        ]);

        $data = $request->all();

        // Convert date format from MM/DD/YYYY to YYYY-MM-DD
        if (!empty($data['tanggal_lahir'])) {
            try {
                $data['tanggal_lahir'] = Carbon::createFromFormat('m/d/Y', $data['tanggal_lahir'])->format('Y-m-d');
            } catch (\Exception $e) {
                // If the date is already in correct format or invalid, keep as is
                // Laravel validation will handle invalid dates
            }
        }

        // Handle upload file foto profil jika ada file baru
        if ($request->hasFile('foto_profil_dosen')) {
            // Hapus foto lama jika ada
            if ($dosen->foto_profil_dosen) {
                Storage::disk('public')->delete($dosen->foto_profil_dosen);
            }
            $data['foto_profil_dosen'] = $request->file('foto_profil_dosen')->store('profil_dosen', 'public');
        }

        $dosen->update($data);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    /**
     * Menghapus data dosen dari database.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);

        // Hapus foto profil dari storage
        if ($dosen->foto_profil_dosen) {
            Storage::disk('public')->delete($dosen->foto_profil_dosen);
        }

        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus.');
    }

    /**
     * Menampilkan halaman frontend dosen dengan data dari database.
     */
    public function frontendIndex(Request $request)
    {
        $search = $request->query('search');
        $jenis_dosen = $request->query('jenis_dosen');

        $dosens = Dosen::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama_dosen', 'like', "%{$search}%")
                             ->orWhere('nidn', 'like', "%{$search}%")
                             ->orWhere('jenis_dosen', 'like', "%{$search}%");
            })
            ->when($jenis_dosen, function ($query, $jenis_dosen) {
                return $query->where('jenis_dosen', $jenis_dosen);
            })
            ->latest()
            ->get();

        // Untuk dropdown filter
        $jenis_dosen_options = Dosen::select('jenis_dosen')
            ->whereNotNull('jenis_dosen')
            ->where('jenis_dosen', '!=', '')
            ->distinct()
            ->pluck('jenis_dosen')
            ->sort();

        return view('pages.frontend.profil_prodi.isi_dosen-staff', compact('dosens', 'jenis_dosen_options'));
    }

    /**
     * Menampilkan detail dosen untuk frontend.
     */
    public function frontendShow($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('pages.frontend.profil_prodi.desc-dosenStaff', compact('dosen'));
    }

    public function sambutanKaprodi()
    {
        // Ambil dosen dengan jenis_dosen = Ketua Program Studi
        $kaprodi = \App\Models\Dosen::where('jenis_dosen', 'Ketua Program Studi')->first();

        // Jika tidak ada, bisa tampilkan pesan atau redirect
        return view('pages.frontend.profil_prodi.isi-sambutanKaprodi', compact('kaprodi'));
    }
}
