@if(Session::get('role'))
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="{{ URL::asset('asset/image/logo.png') }}">
        <title>@yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/dist/css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ URL::asset('asset/adminlte/plugins/summernote/summernote-bs4.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    
    <body class="hold-transition sidebar-mini layout-fixed">
    <nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./" class="nav-link">Home</a>
                </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell" style="color:white"> </i>
                        </a> -->
                    </li>
                <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown" style="color:white">
                        {{Session::get('username')}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a href="./logout" class="dropdown-item">LOGOUT</a>
                    </div>
                </div>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>

        @if(Session::get('role')=='pastor')
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="./" class="brand-link">
                <center><img class="logo" height="50px" width="50px" style="border-radius: 30%;"src="{{ URL::asset('asset/image/logo.png') }}" alt="logo"></center>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./asset/u_file/image/{{Session::get('foto')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Session::get('nama')}}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">MAIN NAVIGATION</li>
                        <li class="nav-item">
                            <a href="./dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Pengumuman
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./tambah_pengumuman" class="nav-link">
                                    <i class="nav-icon fas fa-file active"></i>
                                    <p>Tambah Pengumuman</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>Daftar Pengumuman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Jadwal dan Petugas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./tambah_jadwal_petugas" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Tambah Jadwal dan Petugas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./daftar_jadwal_petugas" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Daftar Jadwal dan Petugas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./tambah_kalender_liturgi" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>Tambah Kalender Liturgi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./daftar_kalender_liturgi" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>Daftar Kalender Liturgi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="./daftar_data_umat" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Daftar Data Umat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./daftar_pemesanan_aula" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Daftar Pemesanan Aula</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        @elseif(Session::get('role')=='dpph')
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="./" class="brand-link">
                <center><img class="logo" height="50px" width="50px" style="border-radius: 30%;"src="{{ URL::asset('asset/image/logo.png') }}" alt="logo"></center>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./asset/u_file/image/{{Session::get('foto')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Session::get('nama')}}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">MAIN NAVIGATION</li>
                        <li class="nav-item">
                            <a href="./dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Kelola Informasi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!-- <li class="nav-item">
                                    <a href="./edit_aula/1" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Edit Aula</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="./daftar_slideshow" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Daftar Slideshow</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./tambah_artikel" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Tambah Artikel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./daftar_artikel" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Daftar Artikel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./tambah_petugas" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Tambah Pengurus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./daftar_petugas" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Daftar Pengurus</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Pengumuman
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./tambah_pengumuman" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Tambah Pengumuman</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>Daftar Pengumuman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Jadwal dan Petugas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./tambah_jadwal_petugas" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Tambah Jadwal dan Petugas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./daftar_jadwal_petugas" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>Daftar Jadwal dan Petugas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./tambah_kalender_liturgi" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>Tambah Kalender Liturgi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./daftar_kalender_liturgi" class="nav-link">
                                    <i class="nav-icon fas fa-calendar-alt"></i>
                                    <p>Daftar Kalender Liturgi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        @endif

        @yield('container')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- jQuery -->
        <script src="{{ URL::asset('asset/adminlte/plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ URL::asset('asset/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ URL::asset('asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ URL::asset('asset/adminlte/plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ URL::asset('asset/adminlte/plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ URL::asset('asset/adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ URL::asset('asset/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ URL::asset('asset/adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ URL::asset('asset/adminlte/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ URL::asset('asset/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ URL::asset('asset/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ URL::asset('asset/adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ URL::asset('asset/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('asset/adminlte/dist/js/adminlte.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ URL::asset('asset/adminlte/dist/js/pages/dashboard.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ URL::asset('asset/adminlte/dist/js/demo.js') }}"></script>

        <!-- bs-custom-file-input -->
        <script src="{{ URL::asset('asset/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ URL::asset('asset/adminlte/dist/js/demo.js') }}"></script>
        <script type="text/javascript">
        $(document).ready(function () {
        bsCustomFileInput.init();
        });
        </script>
    </body>
</html>
@else
    <?php
        return redirect('./')
    ?>
@endif
