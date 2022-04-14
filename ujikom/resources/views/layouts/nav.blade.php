<nav class="navbar navbar-expand-md navbar-light navbar-laravel mb-3">
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
                        <a class="nav-link" href="{{ route('master-barang') }}">{{ __('Cek Barang') }}</a>
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
                @endguest
            </ul>
        </div>
    </div>
</nav>