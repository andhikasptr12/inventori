<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>  
<body>
    <div id="app">
        @include('layouts.nav')
        <main class="">
                <div class="container">
                    <div class="mr-5">
                        <h4 class="display-4">Hello, Ngab Dhika</h4>
                        <h4>Selamat Datang kembali dan selamat mengerjakan pekerjaan anda</h4>
                        <div class="row justify-content-end">
                        </div>     
                    </div>
                </div>

                    <nav class="navbar navbar-expand-md navbar-light navbar-light mt-3 border-top ">
                        <div class="container">
                                <!-- Left Side Of Navbar -->
                                <ul class="d-flex justify-content-center" style=" margin-top: 40px; text-transform: uppercase; ">
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('dashboard.index')}}" class="nav-link text-white">Dashboard</a>
                                    </li>
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('daftarbarang.index')}}" class="nav-link text-white">Daftar Barang</a>
                                    </li>
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('transaksi.index')}}" class="nav-link text-white">Transaksi</a>
                                    </li>
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('pengembalian.index')}}" class="nav-link text-white">Pengembalian</a>
                                    </li>
                                    <li class="nav-link mr-5 hover">
                                        <a href="{{route('laporan.index')}}" class="nav-link text-white">Laporan</a>
                                    </li>
                                </ul>  
                        </div>
                    </nav>
                </div>

            @yield('content')
        </main>
    </div>
</body>
</html>