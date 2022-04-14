<?php

namespace App\Http\Controllers\Nexmo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;
use App\Barang;
use App\User;

use Nexmo\Laravel\Facade\Nexmo;

class PersetujuanController extends Controller
{
    public function store($id)
    {
        $tr = Transaksi::with('user','barang','brand')->findOrFail($id);

        $transaksi = Transaksi::findOrFail($id);
        
        $barang = Barang::findOrFail($transaksi->barang_id);
        $hitung = $barang->stok - $transaksi->jumlah_permintaan;

        $barang->update([
            'stok' => $hitung,
        ]);
        $transaksi->update([
            'status' => 'accept',
        ]);

        $jumlah_harga = $barang->price * $transaksi->jumlah_permintaan;

        //  Nexmo::message()->send([
        //         'to' =>   '62'. $tr->user->phone,
        //         'from' => 'ARM',
        //         'text'  => 'Selamat permintaan anda di setujui'
                
        //         . 'Refrensi:'.$tr->barang->nomor_refrensi
        //         . 'Supplier:'. $tr->barang->nama_suplier
        //         . 'Jumlah Barang:'.$tr->jumlah_permintaan
        //         . 'Harga:'. $jumlah_harga
        //         . 'Tanggal:'.$tr->created_at->format('Y-m-d')
        //         ]);

        return redirect()->back();
    }
}
