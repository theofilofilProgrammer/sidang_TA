<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Homepage | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title> --}}
    <title>@yield('title-profil')</title>
    <!-- CSS -->
    @include('includes.frontend.style')
</head>
<body>
    <!-- Wrapper untuk Header dan Navbar agar bisa sticky bersama -->
    <div class="sticky-header-wrapper">
        <!-- Bagian Header -->
        @include('includes.frontend.header')

        <!-- Bagian Navbar Menu -->
        @include('includes.frontend.profil-prodi.navbar')
    </div>
    {{-- Isi Halaman Utama (User) --}}
    @yield('isi-sambutanKaprodi')


    <!-- Bagian Footer -->
    @include('includes.frontend.footer')


    @include('includes.frontend.script')
</body>
</html>
