@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
            
        </ol>
        <div class="card border-0">
            <div class="card-body">
                <p>Cari Laporan Periode</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <a href="#" class="btn btn-outline-secondary btn-sm mr-3">Cari Laporan</a>
                    <a href="{{route('master-barang.add')}}" class="btn btn-outline-primary btn-sm">Tambah Stock</a>
                </div>
                <h5 class="font-weight-bold">Stock Barang</h5>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Stock</th>
                                    <th>Tanggal Masuk</th>
                                    @role('gudang|pimpinan')
                                    <th>Options</th>
                                    @endrole
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $br)
                                <tr>
                                    <td>{{$br->kode_barang}}</td>
                                    <td>{{$br->nama_barang}}</td>
                                    <td>{{$br->stok}}</td>
                                    <td>{{$br->created_at->format('d-m-y')}}</td>
                                    <td>
                                        <form action="{{route('master-barang.delete', $br->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                @role('gudang|pimpinan|customer')
                                <a href="{{route('master-barang.show')}}" class="btn btn-outline-secondary btn-sm">
                                    Tampilkan Stock
                                </a>
                                @endrole
                                @role('gudang')
                                <a href="{{route('master-barang.edit')}}" class="btn btn-outline-warning btn-sm">
                                    Update Stock
                                </a>
                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Stock</button>
                                @endrole
                                @role('customer')
                                <a href="{{route('master-barang.request')}}" class="btn btn-outline-warning btn-sm">
                                    Buat Permintaan
                                </a>
                                @endrole
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
