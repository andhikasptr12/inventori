@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Brand</li>
        </ol>
    </nav>
    <div class="row">
        @role('gudang')
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('brand.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Brand</label>
                            <input type="text" name="nama_brand" id="" class="form-control">
                        </div>
                        <button class="btn btn-outline-info">Simpan Brand</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Brand</th>
                                <th>Nama Brand</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $br)
                            <tr>
                                <td>{{$br->kode_brand}}</td>
                                <td>{{$br->nama_brand}}</td>
                                <td>
                                    <form action="{{route('brand.delete', $br->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('brand.edit', $br->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                        <button class="submit btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endrole
        @role('pemimpin')
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Brand</th>
                                    <th>Nama Brand</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $br)
                                <tr>
                                    <td>{{$br->kode_brand}}</td>
                                    <td>{{$br->nama_brand}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endrole
    </div>

</div>

@endsection
