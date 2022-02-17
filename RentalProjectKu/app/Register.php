<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function index()
    {
        return view('pengembalian.index');
    }
    public function create()
    {
        return view('transaksi.create');
    }

    public function edit()
    {
        return view('transaksi.edit');
    }
}
