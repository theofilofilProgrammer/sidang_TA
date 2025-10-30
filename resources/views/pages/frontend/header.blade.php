<header class="header-section">
    <div class="container col-lg-11 d-flex justify-content-between align-items-center px-0">
        <!-- Bagian Kiri Header: Logo -->
        <div class="header-left col-md-1 d-flex align-items-center">
            <!-- Pastikan path gambar logo_polnep.png sudah benar -->
            <img src="{{ asset('images/logo_polnep.png') }}" alt="Logo POLNEP" class="logo-polnep">
        </div>

        <!-- Bagian Tengah Header: Judul Program Studi -->
        <div class="header-center col-10 text-center mx-3 px-0">
            <p class="col-12 mb-0 text-uppercase header-program-title">Program Studi D3 Teknologi Informasi</p>
            <p class="col-12 mb-0 text-uppercase header-psdku-title">Psdku Politeknik Negeri Pontianak</p>
            <p class="col-12 mb-0 text-uppercase header-location-title">Di Kabupaten Sukamara</p>
        </div>

        <!-- Bagian Kanan Header: Tombol Login/Logout -->
        <div class="header-right d-flex align-items-center mx-3">
            {{-- Tombol Logout ini hanya akan muncul jika ada pengguna yang sedang login --}}
            @auth
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="text-white logout-icon-link"
                        style="background:none; border:none; padding:0; cursor:pointer;" title="Logout">
                        <i class="fas fa-sign-out-alt text-black"></i>
                    </button>
                </form>
            @endauth

            {{-- Tombol Login ini hanya akan muncul untuk pengunjung (guest) --}}
            @guest
                <a href="{{ route('login') }}" class="text-white logout-icon-link" title="Login">
                    <i class="fas fa-sign-in-alt text-black"></i>
                </a>
            @endguest
        </div>
    </div>
</header>

