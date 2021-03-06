<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body p-5">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                         {{ session('success') }}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <!-- Sign Up form-->
                        <div class="text-center">
                            <h1 class="h3 text-gray-900 mt-2 mb-4">Please Sign Up</h1>
                        </div>
                        <form class="tabel_user" action="/register" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user @error('name')is-invalid @enderror"
                                id="name" placeholder="Name" required value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control form-control-user @error('alamat')is-invalid @enderror"
                                id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="id_kota" class="form-control form-control-user @error('id_kota')is-invalid @enderror"
                                id="id_kota" placeholder="ID Kota" required value="{{ old('id_kota') }}">
                                @error('id_kota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="id_role" class="form-control form-control-user @error('id_role')is-invalid @enderror"
                                id="id_role" placeholder="ID Role" required value="{{ old('id_role') }}">
                                @error('id_role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="telp" class="form-control form-control-user @error('telp')is-invalid @enderror"
                                id="telp" placeholder="Telepon" required value="{{ old('telp') }}">
                                @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user @error('email')is-invalid @enderror"
                                id ="email" placeholder="Email" required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="username" name="username" class="form-control form-control-user @error('username')is-invalid @enderror"
                                id="username" placeholder="Username" required value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user @error('password')is-invalid @enderror"
                                id="password" placeholder="Password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-user btn-block"  type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small text-gray-800">Already have an account?&nbsp<a href="/login">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>
