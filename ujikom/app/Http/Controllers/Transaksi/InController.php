<?php

namespace App\Http\Controllers\Transaksi;

use App\Transaksi;
use App\REQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::where('status','waiting')->with('barang','req')->paginate(5);
        
        return view('transaksi.in.index', compact('transaksi'));
    }
}
