@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cek Kegiatan</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                    <h4 class="text-muted mb-4">Nama Kegiatan</h4>  
                    <a  href="{{route('daftar.index')}}" type="button" class="btn btn-outline-secondary btn-lg" style="width: 12rem">Daftar</a>  
                </div>
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                    <h4 class="text-muted mb-4">Nama Kegiatan</h4>  
                    <a  href="" type="button" class="btn btn-outline-secondary btn-lg" style="width: 12rem">Coming Soon</a>                  </div>
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                    <h4 class="text-muted mb-4">Nama Kegiatan</h4>  
                    <a  href="" type="button" class="btn btn-outline-secondary btn-lg" style="width: 12rem">Coming Soon</a>                  </div>
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                    <h4 class="text-muted mb-4">Nama Kegiatan</h4>  
                    <a  href="{{route('daftar.index')}}" type="button" class="btn btn-outline-secondary btn-lg" style="width: 12rem">Daftar</a>                  </div>      
            </div>
            <div class="row mt-4">
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                </div>
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                </div>
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                </div>
                <div class="col-3">
                    <div class="card mb-4" style="width: 12rem; height: 12rem; background-color: #c2c1be;">        
                    </div>
                </div>  
            </div>
        </div>
    </body>
    </html>
@endsection