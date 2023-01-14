<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('minpro') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('minpro') }}/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('minpro') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <div class="cover"
        style="background-image:url(minpro/img/campus.png); background-position:bottom; background-size:cover; height:100vh;">
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-12 col-md-9">


                    <div class="card o-hidden border-0 shadow-lg my-5" style="background: rgba(0, 0, 0, 0.4);">
                        @if (session()->has('Error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <i class="fa fa-exclamation-triangle"></i> <strong>Sepertinya Ada yang
                                    Salah!!</strong><br>
                                {{ session('Error') }}
                            </div>
                        @endif
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h2 text-900 mb-4" style="color: #bdbdbd;">
                                                <font face="Times New Roman"><b>Silahkan Login</b></font>
                                            </h1>
                                        </div>
                                        <form class="user" action="/login" method="POST">
                                            @csrf
                                            <div class="form-group mb-2">
                                                <input type="text"
                                                    class="form-control form-control-user @error('email') is-invalid                                                    
                                                @enderror"
                                                    id="email" name="email" placeholder="Masukkan NIM..."
                                                    autofocus required value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    class="form-control form-control-user" id="password"
                                                    placeholder="Password" required>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary btn-user btn-block mt-4">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('minpro') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('minpro') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('minpro') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('minpro') }}/js/sb-admin-2.min.js"></script>

</body>

</html>
