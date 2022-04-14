@extends('layouts.app')

@section('content')
<div class="container mb-5" style="width: 750px;">
    <div class="row">
        @role('pimpinan')
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Stock</h5>
                    </div>
                    <div>
                            <h3>
                                {{$barang}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Waiting</h5>
                    </div>
                    <div>
                        <h3>
                            {{$waiting->count()}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Accepted</h5>
                    </div>
                    <div>
                            <h3>
                               {{$accept->count()}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>  
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Rejected</h5>
                    </div>
                    <div>
                            <h3>
                                {{$rejected->count()}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>  
    </div>
</div>
</div>
@endrole  
@role('gudang')
<div class="container mb-3" style="width: 800px">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Stock Barang</h5>
                    </div>
                    <div>
                        <h3>{{$barang}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endrole    

    <div class="container" style="width: 900px">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Data Barang</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Suplier</th>
                                    <th>Nama Barang</th>
                                    <th>Phone</th>
                                    <th>Stock</th>

                                    @role('user')
                                    <th>Option</th>
                                    @endrole
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supliers as $item)
                                <tr>
                                    <td>{{$item->kode}}</td>
                                    <td>{{$item->nama_suplier}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->telp}}</td>
                                    <td>{{$item->stok}}</td>
                                    <td>  
                                            @role('user')
                                            <a href="{{route('master-barang.request', $item->id)}}" class="btn btn-warning btn-sm mb-2">
                                                Buat Permintaan
                                            </a>
                                            <a href="{{route('master-barang.show', $item->id)}}" class="btn btn-outline-secondary btn-sm">
                                                Tampilkan Stock
                                            </a>
                                            @endrole
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