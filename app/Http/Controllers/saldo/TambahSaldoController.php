<?php

namespace App\Http\Controllers\Saldo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deposit;

class TambahSaldoController extends Controller
{
    public function create($id)
    {
       $deposit = Deposit::findOrFail($id);

        return view('saldo.tambahsaldo', compact('deposit'));
    }
    public function update(Request $request, $id)
    {
        
            $deposit = Deposit::findOrFail($id);
            
            $hitung = $deposit->saldo + $request->saldo;
            $deposit->update([
                'saldo' => $hitung,
            ]);
        

        flash()->success('Saldo berhasil di tambah');

        return redirect()->back();
    
       }

}
