@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('profile.update', $profile->id)}}" method="post">
                            @csrf
                                @method('PATCH')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="{{$profile->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="usia"> Usia</label>
                                <input type="number" name="usia" id="usia" class="form-control" placeholder="Masukkan Usia"  value="{{$profile->usia}}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin"> Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin"  value="{{$profile->jenis_kelamin}}">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir"> Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir"  value="{{$profile->tempat_lahir}}">
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir"> Tanggal Lahir</label>
                                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir"  value="{{$profile->tgl_lahir}}">
                            </div>
                            <div class="form-group">
                                <label for="hobi"> Hobi</label>
                                <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Masukkan Hobi"  value="{{$profile->hobi}}">
                            </div>
                            <div>
                                <button class="btn btn-outline-info btn-block">simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection