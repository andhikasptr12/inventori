<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;
use App\Transaction;

class SmsController extends Controller
{
    public function create()
    {
        return view('sms');
    }
    public function store(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        Nexmo::message()->send([
            'to' => $transaction->phone,
            'from' => 'RentalProjectKu (Dhika)',
            'text' => 'Hello kami dari RentalProjectKu ingin memberikan kode'.$transaction->item->kode_barang

               . 'Nama Peminjam'. $transaction->nama_peminjam
               . 'Tanggal Pinjam'. $transaction->tanggal_pinjam
               . 'Tanggal Kembali'. $transaction->tanggal_kembali
               . 'Jumlah Barang'. $transaction->jumlah
               . 'Harga'. $transaction->idr
               . 'Terimakasih'
        ]);

        return redirect()->back();
    }

}
