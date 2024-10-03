<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">

</head>
<body >
    <div class="container " style="margin-top: 10%">
        @if (Session::has('pesan'))
            <div class="alert alert-danger">{{ Session::get('pesan') }}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form method="post" action="/auth">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-left: 40%">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


