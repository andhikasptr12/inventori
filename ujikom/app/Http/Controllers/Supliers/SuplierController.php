<?php

namespace App\Http\Controllers\Supliers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Suplier;
use App\Barang;
use App\Transaksi;

class SuplierController extends Controller
{
    public function index()
    {
        $supliers = Barang::all();
        $barang   = Barang::sum('stok');
        $waiting = Transaksi::where('status','waiting')->get();
        $accept = Transaksi::where('status','accept')->get();
        $rejected = Transaksi::where('status','rejected')->get();

        return view('suplier.index', compact('supliers','barang','waiting','accept','rejected'));
    }
}
