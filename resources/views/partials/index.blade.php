@extends('layouts.app')

@section('content')
<div class="container">
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                <button type="submit" class="btn btn-primary">Tambah Barang</button>
            </div>
            <div class="d-flex">
                <input type="date" name="" id="" class="form-control mr-2">
                <input type="date" name="" id="" class="form-control">
                <button type="submit" class="btn btn-primary ml-2">Cari Data</button>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BR-29-993-97</td>
                    <td>PT Maju G Mundur</td>
                    <td>Gabah</td>
                    <td>4</td>
                    <td>
                        <a href="Edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="Edit" class="btn btn-danger btn-sm">Delet</a>
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection