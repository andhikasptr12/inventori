@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('brand.update', $brand->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nama Brand</label>
                            <input type="text" name="nama_brand" id="" class="form-control" value="{{$brand->name}}">
                        </div>
                        <button class="btn btn-outline-info">Simpan Brand</button>
                    </form>
                </div>
            </div>
        </div>
</div>

@endsection
