<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KembaliController extends Controller
{
    public function index()
    {
        return view('pengembalian.index');
    }
}
