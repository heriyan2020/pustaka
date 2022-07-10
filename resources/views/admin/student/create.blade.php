@extends('admin.app')
@section('create')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" method="POST" action="{{url('/student')}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">NIS</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="nis" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Anggota</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="nama" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tempat Lahir</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="tempat" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" name="lahir" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-md-4 control-label">Jenis Kelamin</label>
                                        <div class="col-md-6">
                                        <select class="form-control" name="jk" required="">
                                            <option value=""></option>
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kelas</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="kelas" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection