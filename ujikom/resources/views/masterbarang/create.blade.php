@extends('layouts.app')


@section('content')
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Add Barang Baru</li>
        </ol>
    </nav>
    <div class="card border-0">
        <div class="card-body">
            <div class="alert alert-primary" role="alert">
                <h3>Perhatian !!!</h3>
                   Harap masukan data barang dengan benar dan lengkap
                </div>
            <form action="{{route('master-barang.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Image Barang</label>
                            <input type="text" name="image" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategoris as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                               @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Brand</label>
                            <select name="brand_id" id="" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">UOM</label>
                            <select name="uom_id" id="" class="form-control">
                                <option value="">Pilih kategori</option>
                                @foreach ($uoms as $uom)
                                <option value="{{$uom->id}}">{{$uom->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="price" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Suplier</label>
                            <input type="file" name="nama_suplier" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="text" name="stok" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Telp</label>
                            <input type="text" name="telp" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div >
                    <button class="btn btn-outline-info mr-3">Save</button>
                    <a href="{{route('master-barang')}}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
