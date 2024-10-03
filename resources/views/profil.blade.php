<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
    @extends('template')
    @section('content')

    <div class="container-fluid">
      <div class="row">
        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Profil Pengguna</h1>
          </div>

          <!-- Profile Information -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 text-center">
                  <img src="https://via.placeholder.com/150" alt="Profile Image" class="rounded-circle img-fluid mb-3">
                  <h3>Salwa Ade Nurma</h3>
                </div>
                <div class="col-md-8">
                  <h4>Informasi Profil</h4>
                  <p><strong>Email:</strong>sal@gmail.com</p>
                  <p><strong>Telepon:</strong> +62 812345678</p>
                  <p><strong>Alamat:</strong> Jl. Contoh Alamat No. 1, Kota</p>
                  <p><strong>Bio: </strong >Segini saja ya, mungkin cukup ya :)</p>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
    @endsection

