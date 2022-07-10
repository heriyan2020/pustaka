@extends('admin.app')
@section('student')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <a href="{{url('/student/create')}}" type="button" class="label gradient-2 btn-rounded" style="margin-bottom: 3ex;font-size: 14pt"><i class="fas fa-user-plus"></i> Tambah Siswa</a>
                <h4 class="card-title">Daftar Siswa</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1
                            @endphp
                            @foreach ($student as $item)
                            <tr>
                                <td scope="col">{{$no++}}</td>
                                <td scope="col">{{$item['nama']}}</td>
                                <td scope="col">{{$item['nis']}}</td>
                                <td scope="col">{{$item['tempat']}}</td>
                                <td scope="col">{{$item['lahir']}}</td>
                                <td scope="col">{{$item['kelas']}}</td>
                                <td scope="col">
                                    <form action="{{ route('student.destroy', $item['id']) }}" method="POST">
                                        <a href="{{ route('student.edit', $item['id']) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection