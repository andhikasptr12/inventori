<?php

namespace App\Http\Controllers\Masterbarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\Kategori;
use App\Brand;
use App\UOM;
use App\Transaksi;
use App\User;
use App\REQ;

class RequestbarangController extends Controller
{
    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);
       
       return view('masterbarang.request.edit',compact('barangs'));
    }

    public function store(Request $request, $id)
    {
        $user = User::findOrFail(auth()->user()->id);
        $req = REQ::where('id','=', $id)->get();

        $req = REQ::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);
      
        if ($req->save()) {
            $transaksi = Transaksi::create([
                'user_id'   => $user->id,
                'request_id'    => $req->id,
                'barang_id' => $request->barang_id,
                'jumlah_permintaan' => $request->jumlah_permintaan,
                'status' => 'waiting',
            ]);
        }

        flash()->success('Berhasil Buat Permintaan');
        return redirect()->back();
    }
}
