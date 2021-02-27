<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposit;
use App\TambahSaldo;
class SaldoController extends Controller
{
    public function index()
    {
        $deposits = Deposit::all();

        return view('saldo.index', compact('deposits'));
    }

    public function create()
    {

        return view('saldo.create');
    }

    public function store(Request $request)
    {
        $deposit = Deposit::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'saldo' => $request->saldo
        ]);
    
        flash()->success('Data Deposit Berhasil di tambah');
        return redirect()->back();
    }
}
