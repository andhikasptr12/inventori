<?php

namespace App\Http\Controllers\BarangKeluarController;

use App\Barang;
use App\Suplier;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangKeluarController extends Controller
{
    public function store(Request $request)

    {
    
    $transaksi=Transaction::create([

     'suplier_id'=>$request->suplier_id,
     'barang_id'=>$request->barang_id,
     'quantity'=>$request->quantity, 
            
    ]);

     flash()->success('Transaksi keluar berhasil di buat');
         
         return redirect()->back();

    }
}
