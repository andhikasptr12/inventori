<?php

namespace App\Http\Controllers\Nexmo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;
use App\Barang;
use Nexmo\Laravel\Facade\Nexmo;

class PenolakanController extends Controller
{
    public function store($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $tr = Transaksi::with('user','barang','brand')->findOrFail($id);


        $barang = Barang::findOrFail($transaksi->barang_id);
        $transaksi->update([
            'status' => 'rejected',
        ]);
        $jumlah_harga = $barang->price * $transaksi->jumlah_permintaan;

        
        // Nexmo::message()->send([
        //     'to' =>   '62'. $tr->user->phone,
        //     'from' => 'ARM',
        //     'text'  => 'Mohon maaf permintaan anda ditolak'
            
        //     . 'Supplier:'. $tr->barang->nama_suplier
        //     . 'Jumlah Barang:'.$tr->jumlah_permintaan
        //     . 'Harga:'. $jumlah_harga
        //     . 'Tanggal:'.$tr->created_at->format('Y-m-d')
        //     ]);

        return redirect()->back();
    }
}
