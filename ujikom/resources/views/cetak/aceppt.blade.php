<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="content px-3">
        <div class="mb-3">
            <h3 class="text-info">Laporan Periode Accept</h3>
        </div>
        <div class="mb-3">
            @if (request('awal'))
                <small>Dari tanggal {{request('awal')}} sampai tanggal {{request('akhir')}}</small>
            @endif
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Kode Request</th>
                    <th>Kode Barang</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($accept as $acc)
                    <tr>
                        <td>{{$acc->req->kode}}</td>
                        <td>{{$acc->barang->kode}}</td>
                        <td>{{$acc->jumlah_permintaan}}</td>
                        <td>{{$acc->status}}</td>
                        <td>{{$acc->created_at->format('d-m-Y')}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Maaf Tanggal yang anda masukan tidak tersedia 
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
</body>
</html>
