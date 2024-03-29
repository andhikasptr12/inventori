<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Illuminate\Support\Facades\Auth;

class WaitingController extends Controller
{
   public function index()
   {
     $transaksi = Transaksi::where(['status'=> 'waiting'], ['user_id' => Auth::user()->id])->get();

       return view('list.waiting', compact('transaksi'));
   }

   public function show($id)
   {
       $transaksi = Transaksi::with('barang')->get();

       return view('list.detail', compact('transaksi'));
   }
}
