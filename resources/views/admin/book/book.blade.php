@extends('admin.app')
@section('book')
    <!--**********************************
        Content body start
    ***********************************-->
    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <a href="{{url('/book/create')}}" type="button" class="label gradient-3 btn-rounded" style="margin-bottom: 3ex;font-size: 14pt"><i class="fa fa-plus-circle"></i> Tambah Buku</a>
                <h4 class="card-title">Daftar Buku</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1
                            @endphp
                            @foreach ($book as $item)
                            <tr>
                                <td scope="col">{{$no++}}</td>
                                <td class="py-1">
                                    @if($item->cover)
                                      <img src="{{asset('storage/'. $item->cover)}}" alt="image" width="60" style="margin-right: 10px;" />
                                    @else
                                      <img src="https://unsplash.com/photos/I69i3D7QX9Y" alt="image" style="margin-right: 10px;" />
                                    @endif
                                <td scope="col">{{$item['judul']}}</td>
                                <td scope="col">{{$item['pengarang']}}</td>
                                <td scope="col">{{$item['penerbit']}}</td>
                                <td scope="col">{{$item['tahun']}}</td>
                                <td scope="col">{{$item['lokasi']}}</td>
                                <td scope="col">
                                    <form action="{{ route('book.destroy', $item['id']) }}" method="POST">
                                        <a href="{{ route('book.edit', $item['id']) }}" class="btn btn-sm btn-primary">
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
                    <div class="pagination" style="font-size: 10pt">{{$book->links()}}</div>
                </div>  
            </div>
        </div>
    </div>
@endsection