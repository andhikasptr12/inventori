<div class="container" style="width: 750px">
    <div class="row">
        @role('admin')
        <div class="col-md-3" c>
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Stock</h5>
                    </div>
                    <div>
                            <h3 class="ml-3">
                                {{$barang}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Waiting</h5>
                    </div>
                    <div>
                        <h3>
                            {{$waiting}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Accepted</h5>
                    </div>
                    <div>
                            <h3>
                               {{$accept}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>  
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Rejected</h5>
                    </div>
                    <div>
                            <h3>
                                {{$rejected}}
                            </h3>
                    </div>
                </div>
                </div>
            </div>
        </div>  
        @endrole  
    </div>
</div>
</div>

