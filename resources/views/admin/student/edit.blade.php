@extends('admin.app')
@section('edit')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($student as $item)
                            <div class="form-validation">
                                <form class="form-valide" method="POST" action={{url('student',$item['id'])}}>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">NIS</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="nis" value="{{$item->nis}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Anggota</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="nama" value="{{$item->nama}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tempat</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="tempat" value="{{$item->tempat}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" name="lahir" value="{{$item->lahir}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-md-4 control-label">Jenis Kelamin</label>
                                        <div class="col-md-6">
                                        <select class="form-control" name="jk" required="">
                                            <option value="{{$item->jk}}"></option>
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kelas</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="kelas" value="{{$item->kelas}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection