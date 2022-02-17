@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-3" style="margin-top: -70px">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{route('.add-form')}}" class="btn btn-success">Simpan Barang</a>
                        <a href="{{route('')}}" class="btn btn-success">Kembali</a>
                    </div>
                        <form action="{{route('cetak.activity')}}" method="get">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="awal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="akhir" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-success" type="submit">Cari Barang</button>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stock Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kegiatans as $activity)
                                    <tr>
                                            <td>{{$activity->kode_activity}}</td>
                                            <td>{{$activity->nama_activity}}</td>
                                            <td>{{$activity->idr}}</td>
                                            <td>{{$activity->status}}</td>
                                            <td>{{$activity->created_at->format('Y-m-d')}}</td>
                                        
                                        <td>
                                            <form action="{{route('destroy.data.activity', $activity->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <a href="{{route('edit-.', $activity->id)}}" class="btn btn-success btn-sm">Edit</a>
                                            <button type="submit" class=" btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection