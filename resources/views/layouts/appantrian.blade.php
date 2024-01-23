<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIMRS') }} RSJ Aceh</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('css/favicon.jpg') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- header -->
        <header class="banner overlay bg-cover" data-background="images/banner.jpg">
            {{-- <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'SIMRS') }} RSJ Aceh
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="faq.html">Faq</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="contact.html">contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="single.html">Inner Page</a>
                            </li>

                        </ul> --}}

            <!-- Right Side Of Navbar -->
            {{-- <ul class="navbar-nav ms-auto"> --}}
            <!-- Authentication Links -->
            {{-- @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest --}}
            {{-- </ul> --}}
            {{-- </div> --}}

            {{-- </div>
            </nav> --}}
            <!-- banner -->
            <div class="container section">
                <div class="row">
                    <div class="col-lg-8 text-center mx-auto">
                        <h1 class="text-pink  mb-3">SIMRS Rumah Sakit Jiwa Aceh</h1>
                        <p class="text-white mb-4">Sistem Antrian Pasien</p>

                    </div>
                </div>
            </div>
            <!-- /banner -->
        </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="section pb-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 text-md-left text-center">
                    <p class="mb-md-0 mb-4">Copyright © 2020 Designed and Developed by <a href="#">Tuahkana</a></p>
                </div>
                <div class="col-md-4 text-md-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-github"></i></a>
                        </li>
                        <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"> </script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}" type="text/javascript"> </script> --}}
</body>
</html>
