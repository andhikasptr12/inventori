@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Satuan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('uom.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Satuan</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>
                <button class="btn btn-outline-info">Simpan Satuan</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Satuan</th>
                                <th>Nama</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($uoms as $uom)
                           <tr>
                            <td>{{$uom->kode_satuan}}</td>
                            <td>{{$uom->nama}}</td>
                            <td>
                                <form action="{{route('uom.delete', $uom->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('satuan.edit', $uom->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                    <button class="btn btn-outline-danger btn-sm">Hapus</button>
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

@endsection
