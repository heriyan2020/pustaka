@extends('admin.app')
@section('borrow')
 
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <a href="{{url('/borrow/create')}}" type="button" class="label gradient-3 btn-rounded" style="margin-bottom: 3ex;font-size: 14pt"><i class="fas fa-user-plus"></i> Tambah Pinjam</a>
                <h4 class="card-title">Daftar Pinjam</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Anggota</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Ket</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1
                            @endphp
                            @foreach ($borrow as $item)
                            <tr>
                                <td scope="col">{{$no++}}</td>
                                <td scope="col">{{$item->kode}}</td>
                                <td scope="col">{{$item->book->judul}}</td>
                                <td scope="col">{{$item->student->nama}}</td>
                                <td scope="col">{{$item->tgl_pinjam}}</td>
                                <td scope="col">{{$item->tgl_kembali}}</td>
                                <td scope="col">
                                    @if($item->ket == 'pinjam')
                                    <label class="label gradient-3 btn-rounded" style="color: white">Pinjam</label>
                                    @else
                                    <label class="label gradient-2 btn-rounded" style="color: white">Kembali</label>
                                    @endif
                                </td>
                                <td scope="col">
                                    <form action="{{ route('borrow.destroy', $item['id']) }}" method="POST">
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