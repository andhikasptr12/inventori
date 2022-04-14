<?php

namespace App\Http\Controllers\Masterbarang;

use App\Kategori;
use App\Barang;
use App\Oum;
use App\Brand;
use App\Suplier;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;

class MasterbarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('kategori','brand','uom')->get();

        return view('masterbarang.index', compact('barangs'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        $uoms = Uom::all();
        $brands = Brand::all();

        return view('masterbarang.create', compact('kategoris','uoms','brands'));
    }
    
    public function store(Request $request)
    {
        $barang = Barang::create([
            'name'    => $request->name,
            'brand_id'  =>$request->brand_id,
            'kategori_id'  =>$request->kategori_id,
            'uom_id'  =>$request->uom_id,
            'price'    => $request->price,
            'stok'    => $request->stok,
            'email'     =>$request->email,
            'nama_suplier' =>$request->nama_suplier,
            'stok'     =>$request->stok,
            'telp'     =>$request->telp,
            'image'     =>$request->image,
        ]);

        $this->storeImage($barang);

        flash()->success('Berhasil menambahkan barang');

        return redirect()->back();
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'brand_id' => 'required',
            'uom_id' => 'required',
            'kategori_id' => 'required',
            'name' => 'required',   
            'price' => 'required',
            'status' => 'required',
            'stok' => 'required',
            'image'  => 'required|mimes:jpeg,jpg,png|max:5000',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'required|mimes:jpeg,jpg,png|max:5000',
                ]);

            }
        });
    }

    private function storeImage($barang){
        if (request()->has('image')){
            $barang->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $barang->image))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }

    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);

        $kategoris = kategori::all();
        $brands = brand::all();
        $uoms = uom::all();

        return view('masterbarang.edit', compact('barangs','kategoris','brands','uoms'));
    }

    public function destroy(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete($request->all());

        if (\File::exists(public_path('storage/' . $barang->image))) {
            \File::delete(public_path('storage/' . $barang->image));
        }

        return redirect()->back();
    }

    public function update(Request $request, Barang $barang)
    {
        $barang->update($request->all());
        $this->storeImage($barang);

        flash()->success('Data berhasil di ubah');
        return redirect(route('master-barang'));
    }
}
