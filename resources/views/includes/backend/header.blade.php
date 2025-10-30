<header class="header-section">
    <div class="container col-lg-11 d-flex justify-content-between align-items-center px-0">
        <!-- Bagian Kiri Header: Logo -->
        <div class="header-left col-md-3 d-flex align-items-center">
            {{-- Menggunakan helper asset() untuk path yang benar --}}
            <img src="{{ asset('images/logo_polnep.png') }}" alt="Logo POLNEP" class="logo-polnep">
        </div>

        <!-- Bagian Tengah Header: Judul Program Studi -->
        <div class="header-center text-center mx-3">
            <p class="mb-0 text-uppercase header-program-title">Program Studi D3 Teknologi Informasi</p>
            <p class="mb-0 text-uppercase header-psdku-title">Psdku Politeknik Negeri Pontianak</p>
            <p class="mb-0 text-uppercase header-location-title">Di Kabupaten Sukamara</p>
        </div>

        <!-- Bagian Kanan Header: Info User dan Tombol Logout -->
        <div class="header-right d-flex align-items-center mx-5">
            <span class="mr-3 text-white text-user">{{ Auth::user()->name }}</span>

            {{-- Buat gambar profil dinamis. Gunakan gambar default jika user tidak punya foto. --}}
            {{-- <img src="{{ Auth::user()->profile_photo_path ? asset('storage/' . Auth::user()->profile_photo_path) : asset('images/Andi_wijaya.jpg') }}"
                 alt="Foto Profil {{ Auth::user()->name }}"
                 class="rounded-circle mr-3 profile-pic"> --}}

            <!-- Menggunakan ikon panah ke kanan sesuai gambar, bukan sign-out -->
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="text-black logout-icon-link"
                    style="background:none; color: black; border:none; padding:0; cursor:pointer;">
                    <i class="fas fa-sign-out-alt text-black"></i>
                </button>
            </form>

        </div>
    </div>
</header>
