<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UJIKOM</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

         <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-image: linear-gradient(rgba(0,0,0,0.40),rgba(0,0,0,0.40)),url('img/wp.jpeg');
                background-size: cover;
                width: 100%;
                background-position: center;
                background-repeat: no-repeat;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 10px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            <div class="jumbotron" style="background-image: linear-gradient(to right, #6dd5ed,#2193b0); color: #0f2027;">
            @if (Route::has('login'))
            <div class="top-left links">
                <a class="navbar-brand" href="{{ url('/') }}">
                   
                       PB| Permintaan Barang
                </a>
                @role('customer')
                <a href="{{ route('suplier') }}">{{ __('Cek Barang') }}</a>
                @endrole
                @role('gudang|pimpinan')
                <a href="{{ url('/home') }}">Dashboard</a>
                @endrole
            </div>
                <div class="top-right links">
                    @auth
                    <li class="nav-item dropdown">  
                        @role('gudang')
                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{url('img/profilAD.jpeg')}}" alt="" width="30px" class="rounded-circle" height="30px">
                        </a>
                    @endrole
                    @role('pimpinan')
                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{url('img/profilAG.jpg')}}" alt="" width="30px" class="rounded-circle" height="30px">
                    </a>
                    @endrole
                    @role('customer')
                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="{{url('img/profilUS.jpg')}}" alt="" width="30px" class="rounded-circle" height="30px">
                    </a>
                    @endrole
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @role('gudang|pimpinan')
                            <a class="dropdown-item" href="{{ route('invite') }}">{{ __('Invite Member') }}</a>
                            @endrole
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Selamat datang di Aplikasi Permintaan Barang <br>
                    Uji Kompetensi Rekayasa Perangkat Lunak
                </div>

                <h2>Andhika SA </h2>
            </div>
        </div>
    </body>
</html>
