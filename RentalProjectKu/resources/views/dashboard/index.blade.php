@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="height: 7rem; width: 16rem">
                    <div class="card-body">
                        <p>Barang</p>
                        <h3>{{$late}}</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16" style="margin-top: -150px">
                        <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
                      </svg>
                    </div>
                </div>
             </div>  
                <div class="col-md-3">
                    <div class="card" style="height: 7rem; width: 16rem">
                        <div class="card-body">
                            <P>Transaksi</P>
                            <h3>50</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16" style="margin-top: -150px">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                              </svg>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-3">
                    <div class="card" style="height: 7rem; width: 16rem">
                        <div class="card-body">
                            <P>Terlambat</P>
                            <h3>50</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16" style="margin-top: -150px">
                                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                              </svg>
                        </div>
                    </div>
                 </div>  
                 <div class="col-md-3">
                    <div class="card" style="height: 7rem; width: 16rem">
                        <div class="card-body">
                            <P>Omset</P>
                            <h3>{{number_format($omset)}}</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="400" height="30" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16" style="margin-top: -150px">
                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                              </svg>
                        </div>
                    </div>
                 </div>   
        </div>
    </div>
@endsection