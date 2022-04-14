@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Satuan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('uom.update', $uom->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="">Nama Satuan</label>
                    <input type="text" name="nama" id="" class="form-control" value="{{$uom->name}}">
                </div>
                <button class="btn btn-outline-info">Simpan Satuan</button>
            </form>
        </div>
</div>

@endsection
