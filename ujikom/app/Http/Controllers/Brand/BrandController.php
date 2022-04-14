<?php

namespace App\Http\Controllers\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();

        return view('brand.index', compact('brands'));
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        return view('brand.edit', compact('brand'));
    }

    public function store(Request $request)
    {
        $brand = Brand::create([
            'nama_brand' => $request->nama_brand,
        ]);

        flash()->success('Berhasil menambahkan Brand');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->update($request->all());

        flash()->success('Berhasil merubah kategori');
        return redirect(route('brand'));  
    }
    public function destroy(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->delete();
        
        flash()->success('Berhasil menghapus Brand');
        return redirect()->back();
    }
}
