<?php

namespace App\Http\Controllers\Saldo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deposit;
class KurangSaldoController extends Controller
{
    public function create($id)
    {
       $deposit = Deposit::findOrFail($id);

        return view('saldo.kurangsaldo', compact('deposit'));
    }
    public function update(Request $request, $id)
    {
        $deposit = Deposit::findOrFail($id);

        $hitung = $deposit->saldo - $request->saldo;
        $deposit->update([
            'saldo' => $hitung,
        ]);
        flash()->success('Saldo  berhasil di kurang');

        return redirect()->back();
     
       }
}