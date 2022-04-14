@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Tampilkan Stock</li>
        </ol>
    </nav>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header border-0 bg-white">
                    <img src="{{asset('img/lcd.jpeg')}}" class="card-img-top" height="500px">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Brand</th>
                                    <th>UOM</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                  <td>{{$item->kode}}</td>
                                      <td>{{$item->name}}</td>
                                      <td>{{$item->brand->name}}</td>
                                      <td>{{$item->uom->name}}</td>
                                      <td>{{$item->price}}</td>
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
