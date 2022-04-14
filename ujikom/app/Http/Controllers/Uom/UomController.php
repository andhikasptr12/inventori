<?php

namespace App\Http\Controllers\Uom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Uom;

class UomController extends Controller
{
    public function index()
    {
        $uoms = UOM::all();

        return view('uom.index', compact('uoms'));
    }
    public function edit($id)
    {
        $uoms = UOM::findOrFail($id);

        return view('uom.edit', compact('uoms'));
    }

    public function store(Request $request)
    {
       $uoms = UOM::create([
            'nama'  => $request->nama,
        ]);

        flash()->success('Berhasil menambahkan satuan');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
       $uoms = UOM::findOrFail($id);

       $uoms->update($request->all());

        flash()->success('Berhasil merubah satuan');
        return redirect(route('oum.update'));
    }
    public function destroy(Request $request, $id)
    {
       $uoms = UOM::findOrFail($id);

       $uoms->delete();
        
        flash()->success('Berhasil menghapus satuan');
        return redirect()->back();
    }
}
