@extends('admin.app')
@section('bcreate')
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
                                <form class="form-valide" method="POST" action="{{url('/borrow')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kode Transaksi</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="kode" value="{{$kode}}" required readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="book_id" class="col-md-4 control-label">Judul Buku</label>
                                        <div class="col-md-6">
                                        <select class="form-control" name="book_id" required="">
                                            <option value="0">-- Pilih Data --</option>
                                            @foreach ($book as $b)
                                            <option value="{{ $b->id}}">{{ $b->judul}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="student_id" class="col-md-4 control-label">Anggota</label>
                                        <div class="col-md-6">
                                        <select class="form-control" name="student_id" required="">
                                            <option value="0">-- Pilih Anggota --</option>
                                            @foreach ($student as $stu)
                                            <option value="{{ $stu->id}}">{{ $stu->nama}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tanggal Pinjam</label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" name="tgl_pinjam" required="required" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(5)->toDateString())) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tanggal Kembali</label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" name="tgl_kembali" required="required" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(19)->toDateString())) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ket" class="col-md-4 control-label">Ket</label>
                                        <div class="col-md-6">
                                        <select class="form-control" name="ket" >
                                            <option value="pinjam">Pinjam</option>
                                        </select>
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