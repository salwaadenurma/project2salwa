<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
    @extends('template')
    @section('content')

        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> --}}
        <div class="container pt-5" >
            @if (Session::has('pesan'))
                <div class="alert alert-succes">{{ Session::get('pesan')}}</div>
            @endif
            <div class="row">
                <div class="col-md-6">
                </button>
                    <a href="/artikel/create" style="width: 5%; height: 5%" class="btn text-white">Tambah Data</a><br>
                <button>
                </div>
                <div class="col-md-6">
                    <form action="/artikel/search" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="cari" class="form-control" placeholder="Search">
                            <button class="btn btn-success" type="submit"style="background-color: #695a5b;" >Go</button>
                          </div>
                    </form>
                </div>
            </div>
            Total Data : {{ $total}}
            <table class="table col-md-12">
                <thead class="table-dark">
                    <tr>
                        <th>NO</th>
                        <th>TITLE</th>
                        <th>KATEGORI</th>
                        <th>DESKRIPSI</th>
                        <th>TINJAUAN</th>
                        <th>FOTO</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                @foreach ($artikel as $key => $item)
                <tbody>
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->tinjauan }}</td>
                        <td><img src="{{ asset('storage/gambar/'.$item->gambar)}}" alt="" style="width: 50px; height:50px"></td>
                        <td>
                            <a href="/artikel/delete/{{ $item->id}}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn" style="background-color: #aa5a5f">Hapus</a>
                            <a href="/artikel/edit/{{ $item->id}}" class="btn btn-info" style="background-color: #f1e531">Edit</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
