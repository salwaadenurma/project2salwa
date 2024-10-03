<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <h1 style="text-center mb-4">Tambah Artikel</h1>
        <form action="/artikel/edit/{{ $artikel->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Masukan konten" value="{{ $artikel->title}}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="category_id" id="category_id">
                <option selected>Pilih Kategori</option>
                <option value="1">gigi anak</option>
                <option value="2">kesehatan kulit</option>
                <option value="3">nutrisi</option>
                <option value="4">kebugaran</option>
                <option value="5">mental</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">deskripsi</label>
            <textarea class="form-control" id="isi" name="deskripsi" rows="10" placeholder="masukkan deskripsi " value="{{ $artikel->deskripsi}}"></textarea>
        </div>
        <div class="mb-3">
            <label for="tinjauan">Tinjauan</label>
            <input type="text" name="tinjauan" class="form-control" id="tinjauan" placeholder="Masukkan tinjauan artikel" value="{{ $artikel->tinjauan}}">
        </div>
        <div class="form-group pt-2">
            <label for="image">Gambar</label>
            <input type="file" name="gambar" class="form-control-file" id="image">
        </div>
        <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">SIMPAN</button>
        </form>
    </div>
</body>
</html>
