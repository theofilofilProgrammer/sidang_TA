<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara</title>
    <!-- CSS -->
    @include('includes.backend.style')
</head>
<body>
    <!-- Wrapper untuk Header dan Navbar agar bisa sticky bersama -->
    <div class="sticky-header-wrapper">
        <!-- Bagian Header -->
        @include('includes.backend.header')
    </div>

    <div class="d-flex main-content-wrapper">
        <!-- Bagian Sidebar Kiri Menu Admin -->
        @include('includes.backend.sidebar')

        @yield('content')

    </div>

    <!-- Bagian Footer -->
    @include('includes.backend.footer')

    <!-- Scripts -->
    @include('includes.backend.script')

</body>
</html>
