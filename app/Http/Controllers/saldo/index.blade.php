@extends('layouts.app')

@section('content')

<div class="container">
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto mb-2">
                
                <a href="{{route('deposit.create')}}" class="btn btn-info mr-2">Tambah Data </a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deposits as $deposit)
                <tr>
                    <td>
                    <a href="{{route('tambahsaldo', $deposit->id)}}" class="btn btn-outline-primary btn-sm">{{$deposit->name}}</a>
                    </td>
                    <td>{{$deposit->alamat}}</td>
                    <td>{{$deposit->telp}}</td>
                    <td>
                        <a href="{{route('kurang-saldo', $deposit->id)}}" class="btn btn-outline-primary btn-sm">Rp.{{$deposit->saldo}}</a>
                     </td>
                     
                </tr>
                @endforeach
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
