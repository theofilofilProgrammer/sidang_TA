<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#4b5097">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#2d3250">
    <script>
        (function() {
            const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
            let currentTheme = localStorage.getItem('theme');

            if (!currentTheme) {
                currentTheme = prefersDarkScheme.matches ? 'dark' : 'light';
            }

            if (currentTheme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
            }
        })();
    </script>
    {{-- <title>Homepage | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title> --}}
    <title>@yield('title')</title>
    <!-- CSS -->
    @include('includes.frontend.style')
</head>
<body>
    <!-- Wrapper untuk Header dan Navbar agar bisa sticky bersama -->
    <div class="sticky-header-wrapper">
        <!-- Bagian Header -->
        @include('includes.frontend.header')

        <!-- Bagian Navbar Menu -->
        @include('includes.frontend.navbar')
    </div>
    {{-- Isi Halaman Utama (User) --}}
    @yield('isi-homeUser')


    <!-- Bagian Footer -->
    @include('includes.frontend.footer')


    @include('includes.frontend.script')
</body>
</html>
