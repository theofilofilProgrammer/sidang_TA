<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Versi lama :
    // public function index() {
    //     if(Auth::id())
    //     {
    //         $usertype=Auth()->user()->usertype;

    //         if($usertype=='user')
    //         {
    //             return view('pages.frontend.home_user');
    //         }

    //         elseif($usertype=='admin')
    //         {
    //             return view('pages.backend.dashboard');
    //         }

    //         else
    //         {
    //             return redirect()->back();
    //         }
    //     }
    // }

    // Versi terbaru :
    public function index() {
        // Logika untuk membedakan tampilan antara admin dan user
        if (Auth::check() && Auth::user()->role === 'admin') {
            // Jika yang mengakses adalah admin yang sedang login, arahkan ke dashboard
            return redirect()->route('dashboard');
        }

        // // Untuk user biasa (baik yang login maupun guest), tampilkan halaman utama
        return view('pages.frontend.home_user');
    }
}
