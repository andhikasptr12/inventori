@extends('layouts.app')

@section('content')
    <div class='container'>
     <div class="row justify-content-center">
         <div class="col-md-6">
                <div class="card"> 
                      <div class="card-body">
                        <form action="{{route('transaksi.store')}} method="post">
                        @csrf
                           <div class="from-group">
                               <label for="">Nama Barang</label>
                               <select name="barang_id" id="">
                                   <option value="">pilih Barang</option>
                                   @foreach($barangs as $barang)
                                   <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                                   @endforeach
                                </select>
                             </div>
                             <div class="form-group">
                               <label for="">Nama Suplier</label>
                               <select name="suplier_id" id=""> 
                                    <option value="">pilih Suplier</option>
                                    @foreach($supliers as $suplier)
                                        <option value="{{$suplier->id}}">{{$suplier->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                               <label for="form-group">
                               <input type="number" name="quantity">Quantity</label>
                          </div>                   
                 </div>
              <div>
         </div>
    </div>
</div>

@endsection 
