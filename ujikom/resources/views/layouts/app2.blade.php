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
        <main>
            @include('layouts.nav')
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
                          <div class="ml-5">
                              @yield('content')
                          </div>
        </main>
    </div>
</body>
</html>