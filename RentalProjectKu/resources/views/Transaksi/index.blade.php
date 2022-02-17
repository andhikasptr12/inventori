@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No. Faktur</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Penyewa</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Durasi</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transactions as $tr)
                                    <td>{{$tr->no_faktur}}</td>
                                    <td>{{$tr->item->kode_barang}}</td>
                                    <td>{{$tr->item->nama_barang}}</td>
                                    <td>{{$tr->nama_peminjam}}</td>
                                    <td>{{$tr->tanggal_pinjam}}</td>
                                    <td>{{$tr->tanggal_kembali}}</td>
                                        <td>
                                            <?php
                                        $datetime2 = strtotime($tr->tanggal_kembali) ;
                                        $datenow = strtotime(date($tr->tanggal_pinjam));
                                        $durasi = ($datenow - $datetime2) / 86400 ;
                                        $durasi2 = ($durasi);
                                    ?>
                                    @if ($tr->durasi == NULL ) 
                                    Sudah dikembalikan
                                   @elseif($datenow == $datetime2)
                                   <span class="text-danger">Waktunya mengembalikan</span> 
                                        @elseif($datenow > $datetime2)
                                            Sudah lewat {{$durasi}} Hari
                                        @else
                                        <?php $durasi1 = abs($durasi) ?> {{ $durasi1 }} Hari Lagi
                                    @endif
                                    </td>
                                    <td>
                                        <form action="{{route('sms', $tr->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="phone" class="form-control" value="{{$tr->phone}}">
                                            <button type="submit" class="btn btn-outline-primary btn-sm mb-2" style="width: 127px; height:25px">Kirim notifikasi</button>
                                        </form>
                                        <form action="{{route('pengembalian.store', $tr->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="kodebarang_id" class="form-control" value="{{$tr->item->id}}">
                                            <input type="hidden" name="nofaktur_id" class="form-control" value="{{$tr->id}}">
                                            <input type="hidden" name="namapeminjam_id" class="form-control" value="{{$tr->id}}">
                                            <input type="hidden" name="tglpinjam_id" id="" class="form-control" value="{{$tr->id}}">
                                            <input type="hidden" name="tglkembali_id" id="" class="form-control" value="{{$tr->id}}">

                                            <button type="submit" class="btn btn-outline-primary btn-sm">Buat pengembalian</button>
                                        </form>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td>
                                        <td colspan="8" class="text-center">Maaf data peminjaman belum tersedia</td>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection