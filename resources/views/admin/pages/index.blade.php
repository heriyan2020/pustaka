@extends('admin.app')
@section('content')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Daftar Buku</h3>
                            <div class="d-inline-block">
                                <h1 class="text-white" style="font-weight: bolder; font-size:40pt">{{$book}}</h1>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fas fa-book"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Daftar Siswa</h3>
                            <div class="d-inline-block">
                                <h1 class="text-white" style="font-weight: bolder; font-size:40pt">{{$student}}</h1>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fas fa-user-alt"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Peminjaman</h3>
                            <div class="d-inline-block">
                                <h1 class="text-white" style="font-weight: bolder; font-size:40pt">{{$borrow}}</h1>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fas fa-address-book"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection