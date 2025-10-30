{{-- <x-guest-layout> --}}
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
{{-- </x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

            <h1 class="text-2xl font-bold my-3" style="font-family: 'Times New Roman', Times, serif; font-weight: bold">{{ __('REGISTER') }}</h1>
            <form class="col-lg-12" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="form-group d-flex flex-column col-lg-12 px-0">
                    <label for="name" class="col-form-label">{{ __('Name') }}</label>
                    {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                    {{-- <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                    @error('name')
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="form-group d-flex flex-column col-lg-12 px-0">
                    <label for="email" class="col-form-label">{{ __('Email') }}</label>
                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="username">
                    {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                    @error('email')
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group d-flex flex-column col-lg-12 px-0">
                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                    <input type="password" id="password" class="form-control" name="password" required autocomplete="new-password">
                    {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                    @error('password')
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group d-flex flex-column col-lg-12 px-0">
                    <label for="password_confirmation" class="col-form-label">{{ __('Confirm Password') }}</label>
                    {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}
                    @error('password_confirmation')
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @enderror
                </div>
                <div class="d-flex flex-column items-center justify-end col-lg-12 px-0">
                    <div class="d-flex w-full py-5 px-0 flex-row items-center justify-between">
                        <a class="underline px-0 col-4 text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <button type="submit" class="login-button px-6 py-2 rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 w-full">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
