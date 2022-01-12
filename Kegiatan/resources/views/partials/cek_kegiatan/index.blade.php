@extends('partials.nav2')

@section('content')
    <div class="container mt-3 ">
        <div class="row">
            <div class="col-md-4">
                   <div class="card mb-4" style="width: 15rem; height: 12rem;"></div>
            </div>
            <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="">Nisn</label>
                                       <input type="text" class="form-control" id="">
                                   </div>
                               </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                          </div>
                             <div class="row">
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <label for="">Kelas</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </div>
                              </div>
                         </div>
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Pilih Jurusan</option>
                                        <option value="">RPL</option>
                                        <option value="">MM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="">Kode Kegiatan</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                          </div>
                          <div class="row">
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label for="">IDR</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                      </div>
                      </div>
                            <button class="btn-outline-success btn-md mt-4" style="padding: 5px; border-radius: 5px; width:11.5rem; border-width: thin;
                             border-color:#c2c1be; cursor: pointer;">Simpan Perubahan</button>
                        </div>
                    </div>
            </div>

        </div>
                <div class="row ml-2">
                       <div class="col-md-1.5">
                           <p class="text-muted">Kode Kegiatan</p>
                           <p class="text-muted">Nama Kegiatan</p>
                           <p class="text-muted">Tanggal</p>
                           <p class="text-muted">Peserta</p>
                           <p class="text-muted">Status Kegiatan</p> 
                       </div> 
                       <div class="col-md-2">
                           <p class="text-muted">121212</p>
                           <p class="text-muted">Pensi Tahunan</p>
                           <p class="text-muted">07-27-2021</p>
                           <p class="text-muted">AB</p>
                           <p class="text-muted">Tersedia</p>   
                     </div>
                        <div class="row">
                                <div class="col-md-3">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti quam itaque aspernatur, nostrum fugit delectus, vero porro, natus esse commodi pariatur </p>
                                </div>
                        </div>
                 </div>
     </div>
@endsection