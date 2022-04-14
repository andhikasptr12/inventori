<?php

namespace App\Http\Controllers\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Transaksi;

class RejectController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('awal')) {
            $reject  = Transaksi::where('status','rejected')->whereBetween('created_at', [request('awal'), request('akhir')])->with('barang','req')->get();
        }

        $pdf = PDF::loadView('cetak.reject', compact('reject'))->setPaper('a4','landscape');

        return $pdf->stream('laporan_data_rejected.pdf');
    }
}
