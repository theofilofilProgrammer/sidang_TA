<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex bg-gray-100">
            <!-- Left Section with Image (Hidden on small screens) -->
            <div class="hidden lg:flex w-3/5 items-center justify-center">
                <img src="{{ asset('images/PSDKU.jpg') }}" alt="PSDKU Image" class="w-full h-screen object-cover">
            </div>

            <!-- Right Section with Form -->
            <div class="w-full lg:w-2/5 flex flex-col items-center justify-center bg-white p-6 sm:p-8">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
