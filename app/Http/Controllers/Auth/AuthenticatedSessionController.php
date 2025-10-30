<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Arahkan pengguna berdasarkan role setelah login.
        // RouteServiceProvider::HOME biasanya mengarah ke '/dashboard'.
        if ($request->user()->usertype === 'admin') {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Arahkan pengguna biasa (bukan admin) ke halaman /home.
        return redirect()->intended('/dashboard');
    }


    /**
     * Destroy an authenticated session.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     // Penting: Ambil role pengguna SEBELUM proses logout dijalankan.
    //     // Setelah logout, $request->user() akan menjadi null.
    //     $userRole = $request->user() ? $request->user()->usertype : null;

    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     // Jika pengguna yang baru saja logout adalah 'admin', arahkan ke halaman home user.
    //     if ($userRole === 'admin') {
    //         // Arahkan ke halaman beranda publik, bukan dashboard yang terproteksi.
    //         return redirect('/home');
    //     }

    //     // Untuk pengguna biasa atau jika sesi sudah kedaluwarsa, arahkan ke halaman login.
    //     return redirect('/login');
    // }
    // ... (kode lain)

    // ... (kode lain)

    public function destroy(Request $request): RedirectResponse
    {
        // Mengambil role 'admin' SEBELUM logout
        $userRole = $request->user() ? $request->user()->usertype : null;

        // Proses logout
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Jika yang logout adalah admin, arahkan ke /home (halaman publik)
        if ($userRole === 'admin') {
            return redirect('/home'); // INI SUDAH BENAR
        }

        // Jika pengguna biasa, arahkan ke /login
        return redirect('/login');
    }

}
