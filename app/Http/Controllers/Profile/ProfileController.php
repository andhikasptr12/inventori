<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return view('profile.index',compact('profiles'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);

        return view('profile.edit',compact('profile'));
    }

    public function store(Request $request)
    {
        $profile = Profile::create([
            'nama'=>$request->nama,
            'usia'=>$request->usia,
            'tempat_lahir'=>$request->tempat_lahir,
            'tgl_lahir'=>$request->tgl_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'hobi'=>$request->hobi,

        ]);

        flash()->success('Data profile berhasil di buat');

        return redirect()->back();
    
    }

    public function update(Request $request,$id)
    {
        $profile = Profile::where('id',$id)->first();

        $profile->nama = $request->input('nama');
        $profile->usia = $request->input('usia');
        $profile->tempat_lahir = $request->input('tempat_lahir');
        $profile->tgl_lahir = $request->input('tgl_lahir');
        $profile->jenis_kelamin = $request->input('jenis_kelamin');
        $profile->hobi = $request->input('hobi');

        $profile->save();

        flash()->success('Profile berhasil di ubah');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        flash()->success('Profile berhasil di hapus');
        return redirect()->back();  
    }  

    public function show($id)
    {
        $profile = Profile::findOrFail($id);

        return view('profile.detail', compact('profile'));
    }
}
