<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <style>
        .carousel-item .row {
            display: flex;
            justify-content: space-around;
        }

        .carousel-item img {
            border-radius: 10px; /* Untuk sudut gambar yang melengkung */
            padding: 10px; /* Jarak antar gambar */
        }

        .carousel-indicators {
            bottom: -30px; /* Posisi indikator */
        }


        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            background-color: #000;
        }

    </style>
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
                        <form class="d-flex ms-3" method="post" action="/artikel/search">
                            @csrf
                            <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kategori">Kategori</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Olahraga</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="btn btn-primary" href="/auth">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="container-fluid" id="beranda">
            <div class="row align-items-center p-4 text-dark rounded-3" style="height: 50vh; background-color:#96bfe9">
                <div class="col-md-8">
                    <h2 class="fw-bold" style="margin-left: 10%;">Deteksi Dini Anemia <br> Defisiensi Besi pada Anak</h2>
                    <p class="mb-3"  style="margin-left: 10%;" >Cegah dan deteksi dini anemia pada anak dengan informasi lengkap.</p>
                    <a href="#" class="btn btn-light btn-lg fw-semibold" style="margin-left: 10%;" >Cek Sekarang!</a>
                </div>
                <div class="col-md-4 text-center">
                    <img style="margin-left: -10%" src="images/banner.webp" class="img-fluid" alt="Gambar Iklan">
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container my-4">
            <div class="row text-center">
                <div class="col-md-3">
                    <a href="/kategori">
                        <div class="card p-3 border-0 shadow">
                            <h6>Kategori</h6>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 border-0 shadow">
                        <h6>Booking Dokter</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 border-0 shadow ">
                        <h6>Cek Kesehatan</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 border-0 shadow text-white" style="background-color: #34495E">
                        <h6>Komunitas</h6>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <div class="container mt-4">
            <a href="#" class="btn btn-light btn-lg fw-semibold" style=" border-radius: 45px; background-color: #8bbdf0; font-size: 18px">Trending</a>
            <a href="/artikel" class="btn btn-light btn-lg fw-semibold" style=" border-radius: 45px; background-color: #8bbdf0; font-size: 18px" >Topik Terbaru</a>
        </div>
    </section>
    <section>
        <div class="container my-5" id="artikel">
            <div class="row g-4">
                <div class="col-md-6">
                    <img src="images/gigi.webp" style="border-radius: 15px" class="img-fluid rounded" alt="Gambar Utama">
                    <div class="card-body">
                        <a href="/gigi"><span class="badge bg-primary mb-2" style="margin-left: -8px">Gigi Anak</span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 3%" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                        </svg>
                        <a href="/berita1"><h4 style="margin-left: -8px">Perbedaan Gigi Susu dan Gigi Permanen Anak-Anak</h4></a>
                        <p  style="margin-left: -8px">Banyak orang yang selama ini masih belum memahami soal perbedaan gigi susu dan gigi permanen. Padahal, kedua jenis gigi ini mempunyai beberapa karakteristik yang berbeda. Apa saja itu...</p>
                        <p class="text-muted small mb-1" style="margin-left:-8px">
                            Ditinjau secara medis oleh dr. Tania Savitri• seminggu yang lalu
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="images/parenting.webp" class="card-img-top rounded" alt="Gambar Artikel">
                        <div class="card-body">
                            <a href=""><span class="badge bg-primary mb-2" style="margin-left: -8px">Parenting</span></a>
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 3%" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                            </svg>
                            <h5 style="margin-left: -8px" class="card-title">Sharenting, Pahami Batasan dan Dampak Posting Anak di Medsos</h5>
                            <p class="text-muted small mb-1">
                                Ditinjau secara medis oleh dr. Mikhael Yosia, BMedSci, PGCert, DTM&H.
                            </p>
                            <p class="text-muted small">01/12/2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p style="margin-left: 13%; color:rgb(173, 168, 168)">_________________________________________________________________________________________________________________________________________________________________________________________________</p>
    </section>
    <section>
        <div class="container my-5">
            <div class="row g-4">
                <div class="col-md-3">
                    <img src="images/renang.jpg" style="border-radius: 15px" class="img-fluid rounded" alt="Gambar Utama">
                    <div class="card-body">
                        <a href="/kebugaran"><span class="badge bg-primary mb-2" style="margin-left: -8px">kebugaran</span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 3%" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                        </svg>
                        <a href="/berita2"><h4 style="margin-left: -8px">apakah kesehatan itu benar-benar penting buat kita semua?</h4></a>
                        <p class="text-muted small mb-1" style="margin-left:-8px">ditinjau oleh .....</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/nutrisi.jpg" style="border-radius: 15px" class="img-fluid rounded" alt="Gambar Utama">
                    <div class="card-body">
                        <a href=""><span class="badge bg-primary mb-2" style="margin-left: -8px">Gigi Anak</span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 3%" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                        </svg>
                        <h4 style="margin-left: -8px">7 Manfaat Rempah bagi Kesehatan serta Jenis-Jenisnya</h4>
                        <p class="text-muted small mb-1" style="margin-left:-8px">
                            Ditinjau secara medis oleh dr. Tania Savitri• seminggu yang lalu
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/gigi.webp" style="border-radius: 15px" class="img-fluid rounded" alt="Gambar Utama">
                    <div class="card-body">
                        <a href=""><span class="badge bg-primary mb-2" style="margin-left: -8px">Gigi Anak</span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 3%" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                        </svg>
                        <a href="/Berita1"><h4 style="margin-left: -8px">Perbedaan Gigi Susu dan Gigi Permanen Anak-Anak</h4></a>
                        <p class="text-muted small mb-1" style="margin-left:-8px">
                            Ditinjau secara medis oleh dr. Tania Savitri• seminggu yang lalu
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/gigi.webp" style="border-radius: 15px" class="img-fluid rounded" alt="Gambar Utama">
                    <div class="card-body">
                        <a href=""><span class="badge bg-primary mb-2" style="margin-left: -8px">Gigi Anak</span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 3%" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                        </svg>
                        <h4 style="margin-left: -8px">Perbedaan Gigi Susu dan Gigi Permanen Anak-Anak</h4>
                        <p class="text-muted small mb-1" style="margin-left:-8px">
                            Ditinjau secara medis oleh dr. Tania Savitri• seminggu yang lalu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--     --}}
    <section>
        <h2 class="my-4" style="margin-left: 13%" id="kategori">Kategori Rekomendasi</h2>
        <a href="/kategori"><h5 style="color: #5c91c7; margin-left: 34%; margin-top: -3%">Lihat Semua ></h5></a>
        <div class="container my-4">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="card p-3 border-0 shadow">
                        <a href="/nutrisi"><img src="images/kategori1.webp" style="height: 50%; width:50%; margin-left:15%" alt=""></a>
                        <h5>nutrisi</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 border-0 shadow">
                        <a href="/kulit"><img src="images/kategori2.webp" style="height: 50%; width:50%;" alt=""></a>
                        <h5>Kesehatan Kulit</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 border-0 shadow ">
                        <a href="/gigi"><img src="images/kategori3.webp" style="height: 50%; width:50%; " alt=""></a>
                        <h5>Kesehatan Gigi dan Mulut</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3 border-0 shadow ">
                        <a href="/kebugaran"><img src="images/kategori4.webp" style="height: 45%; width:45%; " alt=""></a>
                        <h5>Kebugaran</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <footer>
            <div class="container-fluid" style="background-color: #233f64; height: 70vh">
                <div class="container text-white">
                    <h1 style="padding-top: 5%">HealthAja |</h1>
                    {{-- <img src="images/logokes.png" style="width: 65px; height: 45x; margin-top:-6%; margin-left: 16%" alt=""> --}}
                    <p class="fw-bold" style="margin-top: 13px">Hello Sehat ingin menjadi sumber informasi Anda <br> dalam membuat keputusan kesehatan dan agar Anda <br> bisa selalu hidup sehat dan bahagia.</p>
                    <p style="color: rgb(138, 135, 135); margin-top: 20px;">Ikuti Kami</p>
                    <svg style="margin-top: -6%; margin-left: 10%" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                    </svg>
                    <svg style="margin-top: -76px; margin-left: 10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                    <svg style="margin-top: -76px; margin-left: 10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                    </svg>
                    <svg style="margin-top: -76px; margin-left: 10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                    <svg style="margin-top: -76px; margin-left: 10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>

                    <div class="kategori">
                        <h4 style="margin-left: 50%; margin-top: -14%; font-size: 17px">Kategori</h4>
                        <p style="margin-left: 50%;  font-size: 17px">Cek Kesehatan</p>
                        <p style="margin-left: 50%;  font-size: 17px">Booking Dokter</p>
                        <p style="margin-left: 50%;  font-size: 17px">Komunitas</p>
                    </div>
                    <div class="informasi">
                        <h4 style="margin-left: 67%; margin-top: -12%; font-size: 17px; color:#a1a3a5">Informasi</h4>
                        <p style="margin-left: 67%;  font-size: 17px">Ketentuan Pengguna</p>
                        <p style="margin-left: 67%;  font-size: 17px">Kebijakan Privasi</p>
                        <p style="margin-left: 67%;  font-size: 17px">Kebijakan Editorial dan Koreksi</p>
                        <p style="margin-left: 67%;  font-size: 17px">Kebijakan Iklan dan Sponsor</p>
                        <p style="margin-left: 67%;  font-size: 17px">Panduan Komunitas</p>
                        <p style="margin-left: 67%;  font-size: 17px">Hello Sehat dan Kemenkes</p>
                    </div>
                    <div class="Hello Sehat">
                        <h4 style="margin-left: 87%; margin-top: -21%; font-size: 17px; color:#a1a3a5">Hello Sehat</h4>
                        <p style="margin-left: 87%;  font-size: 17px">Tentang Kami</p>
                        <p style="margin-left: 87%;  font-size: 17px">Profil Manajemen</p>
                        <p style="margin-left: 87%;  font-size: 17px">Karier</p>
                        <p style="margin-left: 87%;  font-size: 17px">Kontak Kami</p>
                    </div>
                    <p style="margin-top: 10%">_________________________________________________________________________________________________________________________________________________________________________________________________</p>
                    <p>_________________________________________________________________________________________________________________________________________________________________________________________________</p>
                    <p style="color: #a1a3a5">©2024 Hello Health Group Pte. Ltd. Hak Cipta Dilindungi. Hello Sehat tidak menawarkan saran medis, diagnosis, atau perawatan.</p>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>
