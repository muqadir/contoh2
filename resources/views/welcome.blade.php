<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

    </style>



</head>
<body>
    {{-- <div class="container">


        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown d-flex flex-content-end">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            @if (Route::has('login'))
                            <ul class="dropdown-menu">
                                @auth
                                <li> <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
    @else
    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
    @if (Route::has('register'))
    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
    @endif
    @endauth
    </ul>
    @endif
    </li>
    </ul>
    </div>
    </div>
    </nav>
    </div> --}}

    <div class="container">

        <section class="utama">



            <div class="tampil">
                <div class="item">
                    <div class="card item-1 rounded">
                        <div class="card-body">
                            <h2 class="card-title">Antrian</h2>
                            <p class="card-text"> Untuk melakukan antrian berobat, surat kesehatan, cs & lainnya tekan ini</p>
                            <a href="#" class="btn btn-primary rounded" target="_blank">Ambil Antrian</a>
                        </div>
                    </div>

                    <div class="card item-1 rounded">
                        <div class="card-body">
                            <h2 class="card-title">Panggilan</h2>
                            <p class="card-text"> Untuk melakukan panggilan tekan ini </p>
                            <a href="#" class="btn btn-primary" target="_blank">Pangilan</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card item-1 rounded">
                        <div class="card-body">
                            <h2 class="card-title">Tampil Antrian</h2>
                            <p class="card-text"> Untuk Menampikan Layar Panggilan tekan ini </p>
                            <a href="#" class="btn btn-primary" target="_blank">Tampilkan</a>
                        </div>
                    </div>

                    <div class="card item-1 rounded">

                        <div class="card-body">
                            <h2 class="card-title">Login Sistem</h2>
                            <p class="card-text">Untuk Pengguna Silakan </p>
                            <a href="#" class="btn btn-primary" target="_blank">Login</a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> --}}





        </section>
    </div>



</body>
</html>
