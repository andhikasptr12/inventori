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
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                        <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                        <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                      </svg> PB| Permintaan Barang
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        @role('gudang|pimpinan')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                        </li>
                        @endrole
                        @role('gudang')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            Master Data <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('kategori')}}" >
                                {{ __('Kategori') }}
                            </a>
                            <a class="dropdown-item" href="{{route('brand')}}">
                                {{ __('Brand') }}
                            </a>
                            <a class="dropdown-item" href="{{route('satuan')}}">
                                {{ __('UOM') }}
                            </a>
                        </div>
                    </li>
                    @endrole
                    @role('gudang|pimpinan')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('master-barang') }}">{{ __('Stocks') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('suplier') }}">{{ __('Supliers') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    Request <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('transaksi.in')}}">
                                        {{ __('Waiting') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('transaksi.out')}}">
                                        {{ __('Accept') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('transaksi.reject')}}">
                                        {{ __('Reject') }}
                                    </a>
                                </div>
                            </li>
                            
                        @endrole
                        @role('customer')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('suplier') }}">{{ __('Cek Barang') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    Request <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('waiting')}}">
                                        {{ __('Waiting') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('accept')}}">
                                        {{ __('Accept') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('rejected')}}">
                                        {{ __('Reject') }}
                                    </a>
                                </div>
                            </li>
                        @endrole
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                @role('gudang')
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{url('img/profilAD.jpeg')}}" alt="" width="30px" class="rounded-circle" height="30px">
                                </a>
                            @endrole
                            @role('pimpinan')
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{url('img/profilAG.jpg')}}" alt="" width="30px" class="rounded-circle" height="30px">
                            </a>
                            @endrole
                            @role('customer')
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{url('img/profilUS.jpg')}}" alt="" width="30px" class="rounded-circle" height="30px">
                            </a>
                            @endrole
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @role('admin|admingudang')
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('flash::message')
            <div class="container">
                <div class="row">
                    <div class="d-flex">
                        @role('gudang')
                        <div>
                           <p class="d-flex justify-content-end">Admin</p>
                           <img src="{{url('img/profilAD.jpeg')}}" alt="" width="150px" class="rounded-circle" height="150px">
                           <h4>{{Auth::user()->name}}</h4>
                           <p>{{Auth::user()->email}}</p>
                           <div style="border-bottom: 1px solid" class="mb-3"></div>
                           <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg> <span class="ml-2">{{Auth::user()->phone}}</span>
                           </div>
                           <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                              </svg> <span class="ml-2">{{Auth::user()->alamat}}</span>
                           </div>
                          
                        </div> 
                        @endrole
                        @role('pimpinan')
                        <div>
                            <p class="d-flex justify-content-end">Admin Gudang</p>
                            <img src="{{url('img/profilAG.jpg')}}" alt="" width="150px" class="rounded-circle" height="150px">
                            <h4>{{Auth::user()->name}}</h4>
                            <p>{{Auth::user()->email}}</p>
                            <div style="border-bottom: 1px solid" class="mb-3"></div>
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                  </svg> <span class="ml-2">{{Auth::user()->phone}}</span>
                               </div>
                               <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                  </svg> <span class="ml-2">{{Auth::user()->alamat}}</span>
                               </div>
                           
                         </div> 
                         @endrole
                         @role('customer')
                         <div>
                             <p class="d-flex justify-content-end">User</p>
                             <img src="{{url('img/profilUS.jpg')}}" alt="" width="150px" class="rounded-circle" height="150px">
                             <h4>{{Auth::user()->name}}</h4>
                             <p>{{Auth::user()->email}}</p>
                             <div style="border-bottom: 1px solid" class="mb-3"></div>
                             <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                  </svg> <span class="ml-2">{{Auth::user()->phone}}</span>
                               </div>
                               <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                  </svg> 
                                  <span class="ml-2">{{Auth::user()->alamat}}</span>
                               </div>
                            
                          </div> 
                          @endrole
                          <div class="row ml-5">
                              <div class="mb-2 ml-5">
                                 
                                  <div class="ml-5">
                                      @yield('content') 
                                  </div>
                            </div> 
                             
                        </div>
                    </div>
        </main>
    </div>
</body>
</html>
