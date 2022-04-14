<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        $array = [
            'barang' => Barang::where('stok')->sum(),
            'transaksi' => Transaksi::where('status', 'waiting')->count(),
            'transaksi' => Transaksi::where('status', 'accept')->count(),
            'transaksi' => Transaksi::where('status', 'rejected')->count(),
        ];


        return view('layouts.app', $array);
    }
}
