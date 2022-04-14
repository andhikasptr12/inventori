<?php

namespace App\Http\Controllers\Kategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();

        return view('kategori.index', compact('kategoris'));
    }
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

    public function store(Request $request)
    {
        $kategoris = Kategori::create([
            'nama_kategori'  => $request->nama_kategori,
            
        ]);

        flash()->success('Berhasil menambahkan kategori');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->update($request->all());

        flash()->success('Berhasil merubah kategori');
        return redirect(route('kategori'));  
    }
    public function destroy(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();
        
        flash()->success('Berhasil menghapus kategori');
        return redirect()->back();
    }
}
