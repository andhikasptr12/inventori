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
                    <td>KAS-44-9922-123</td>
                    <td>PT Akatsuki</td>
                    <td>Jubah</td>
                    <td>50</td>
                    <td>12-12-2012</td>
                   
                </tr>
                <tr>
                    <td>PAS-124-334-09</td>
                    <td>PT Kharisma</td>
                    <td>Hadroh</td>
                    <td>10</td>
                    <td>06-06-2013</td>
                    
                </tr>
                <tr>
                    <td>POS-555-666-21</td>
                    <td>PT LOHKOK</td>
                    <td>Masker</td>
                    <td>1000</td>
                    <td>13-04-2014</td>
                   
                </tr>
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
