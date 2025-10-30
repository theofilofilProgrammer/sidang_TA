{{-- <x-guest-layout>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Bootstrap CSS v4.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" xintegrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome (untuk ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="login-box my-5">
        <img class="img-kampus h-full w-full col-lg-6 px-0" src="{{ asset('images/PSDKU.jpg') }}" alt="PSDKU Image">
        <div class="right-section my-5 col-lg-6">
            <div class="logo-box d-flex flex-column align-items-center justify-content-center">
                <img src="{{ asset('images/logo_polnep.png') }}" class="logo-image" alt="Logo Polnep" style="width: 7rem; height: auto;">
                <p class="logo-text text-center mt-2 text-black-600" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Program Studi D3 Teknologi Informasi<br>Psdku Politeknik Negeri Pontianak<br>Di Kabupaten Sukamara</p>
            </div>
            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <h1 class="text-2xl font-bold my-3" style="font-family: 'Times New Roman', Times, serif; font-weight: bold">{{ __('LOGIN') }}</h1>
            <form class="col-lg-12" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group d-flex flex-column col-lg-12 px-0">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group d-flex flex-column col-lg-12 px-0">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="block mt-4 remember-me">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="d-flex flex-column items-center justify-end col-lg-12 px-0">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <div class="d-flex w-full px-0 flex-row items-center justify-between">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <a class="underline col-4 text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                            {{ __('Belum ada akun?') }}
                        </a>
                        <button type="submit" class="login-button px-6 py-2 rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 w-full">
                            {{ __('Log in') }}
                        </button>
                    </div>

                    {{-- <x-primary-button class="w-full">
                        {{ __('Log in') }}
                    </x-primary-button> --}}
                </div>
            </form>
        </div>
    </div>
</body>
</html>
