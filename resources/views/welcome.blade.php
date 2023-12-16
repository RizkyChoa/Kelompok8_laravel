<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('LTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('LTE/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <span class="brand-text font-weight-light"><strong>Kelompok 7</strong></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">login 
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Selamat Datang, <small> Ini Tugas Laravel</small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">laravel</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="title text-bold">Ini Adalah Tugas Kelompok</h3>

                                    <p class="card-text">
                                        dibuat menggunakan laravel 10 dan untuk tampilan menggunakan admin LTE
                                    </p>

                                    <a href="{{ route('login') }}" class="card-link">login</a>
                                    <a href="{{ route('register') }}" class="card-link">Daftar</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Main Footer -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2021 <a href="/">Kelompok 7</a>.</strong>
                Project Laravel.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0.0
                </div>
            </footer>
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('LTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('LTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('LTE/dist/js/adminlte.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('LTE/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('LTE/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('LTE/dist/js/pages/dashboard3.js') }}"></script>
</body>

</html>
