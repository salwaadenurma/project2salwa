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
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <div class="container">
                <a class="navbar-brand" href="#">HealthAja</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        {{-- <form class="d-flex ms-3" method="post" action="/artikel/search">
                            @csrf
                            <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
                        </form> --}}
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/admin">Beranda</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kategori">Kategori</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Olahraga</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="btn btn-primary" href="/">Login</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form Artikel
                    </div>
                    <div class="card-body">
                        <form action="/artikel/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Title</label>
                                <input type="text" name="title" class="form-control" id="productName" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="category">Kategori</label>
                                <select name="kategori" id="category_id">
                                    <option selected>Pilih kategori</option>
                                    <option value="1">gigi anak</option>
                                    <option value="2">kesehatan kulit</option>
                                    <option value="3">nutrisi</option>
                                    <option value="4">kebugaran</option>
                                    <option value="5">mental</option>
                                </select>
                            </div>
                            <div class="form-group pt-2">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan harga produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="tinjauan">Tinjauan</label>
                                <input type="text" name="tinjauan" class="form-control" id="tinjauan" placeholder="Masukkan tinjauan artikel">
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" name="gambar" class="form-control-file" id="image">
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ asset('asset/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>

