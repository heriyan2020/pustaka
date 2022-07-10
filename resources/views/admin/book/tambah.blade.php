@extends('admin.app')
@section('tambah')
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
                                <form class="form-valide" method="POST" action="{{url('/book')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Judul</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="judul" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Pengarang</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="pengarang"  required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Penerbit</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="penerbit"  required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tahun Terbit</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="tahun"  required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
                                        <div class="col-md-6">
                                        <select class="form-control" name="lokasi" required="">
                                            <option value=""></option>
                                            <option value="rak1">Rak 1</option>
                                            <option value="rak2">Rak 2</option>
                                            <option value="rak3">Rak 3</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cover" class="col-md-4 control-label">Cover</label>
                                        <div class="col-md-6">
                                            <input type="file" class="uploads form-control" @error('cover') is-invalid @enderror style="margin-top: 20px;" name="cover">
                                            @error('cover')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
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