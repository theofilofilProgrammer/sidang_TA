<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    /**
     * Menampilkan daftar saran di halaman admin.
     */
    public function index()
    {
        $sarans = Saran::orderBy('created_at', 'desc')->paginate(10);
        return view('admin-nextPage.saran.data-saran', compact('sarans'));
    }

    /**
     * Menampilkan detail saran tertentu di halaman admin.
     */
    public function show(Saran $saran)
    {
        return view('admin-nextPage.saran.detail-data-saran', compact('saran'));
    }

    /**
     * Menampilkan form untuk admin membalas/mengedit saran.
     */
    public function edit(Saran $saran)
    {
        return view('admin-nextPage.saran.form-edit-data-saran', compact('saran'));
    }

    /**
     * Mengelola pengiriman saran dari halaman publik.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'nullable|string|max:255',
            'alamat_email' => 'nullable|email|max:255',
            'isi_saran' => 'required|string',
        ]);

        Saran::create($request->all());

        return back()->with('success', 'Terima kasih atas saran Anda. Saran Anda berhasil dikirim!');
    }

    /**
     * Mengelola pembaruan saran oleh admin (membalas dan mengubah status).
     */
    public function update(Request $request, Saran $saran)
    {
        $request->validate([
            'balasan_admin' => 'nullable|string',
            'status' => 'required|string|in:Menunggu Balasan,Sudah Dibalas',
        ]);

        $saran->update($request->all());

        return redirect()->route('saran.index')->with('success', 'Saran berhasil diperbarui.');
    }

    /**
     * Menghapus saran dari database.
     */
    public function destroy(Saran $saran)
    {
        $saran->delete();
        return redirect()->route('saran.index')->with('success', 'Saran berhasil dihapus.');
    }
}
