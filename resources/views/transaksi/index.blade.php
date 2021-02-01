@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="alert alert-info" role="alert"> Ini Adalah Data Tranksaksi terakhir </div>
</div>
</div>
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Barang Masuk</a>
                <a href="{{route('transaksi.barang-keluar')}}" class="btn btn-danger">Tambah Transaksi Keluar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Tgl Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NVI-22-2021-124</td>
                    <td>PT Ajayani</td>
                    <td>Anjay</td>
                    <td>80</td>
                    <td>12-12-1212
                   
                </tr>
                <tr>
                    <td>PIM-441-413-89</td>
                    <td>PT Pwt</td>
                    <td>VGA</td>
                    <td>10</td>
                    <td>12-12-1212
                    
                </tr>
                <tr>
                    <td>MIR-324-226-11</td>
                    <td>PT Sumir</td>
                    <td>Baju</td>
                    <td>20</td>
                    <td>12-12-1212
                   
                </tr>
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection