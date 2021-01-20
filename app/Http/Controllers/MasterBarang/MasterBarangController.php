<?php

namespace App\Http\Controllers\MasterBarang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterBarangController extends Controller
{
    public function create()
    {
        return view('masterbarang.create');
    }
}
