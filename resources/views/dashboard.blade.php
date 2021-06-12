@extends('layout/main_dash')

@section('title', 'Dashboard')

@section('container')

@if(Session::get('role')=='masyarakat')
<body>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pemesanan as $pemesanan)
                <h3>{{$pemesanan->jumlah_pemesanan}}</h3>
              @endforeach

                <p>Jumlah Pemesanan</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              @foreach($pemesanan_disetujui as $disetujui)
                <h3>{{$disetujui->jumlah_pemesanan}}</h3>
              @endforeach

                <p>Pemesanan Disetujui</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->
</body>

@elseif(Session::get('role')=='umat')
<body>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pemesanan as $pemesanan)
                <h3>{{$pemesanan->jumlah_pemesanan}}</h3>
              @endforeach

                <p>Jumlah Pemesanan</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              @foreach($pemesanan_disetujui as $disetujui)
                <h3>{{$disetujui->jumlah_pemesanan}}</h3>
              @endforeach

                <p>Pemesanan Disetujui</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_mengajukan_baptis as $mengajukan_baptis)
                <h3>{{$mengajukan_baptis->jumlah_mengajukan_baptis}}</h3>
              @endforeach

                <p>Jumlah Mengajukan Baptis</p>
              </div>
            </div>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->
</body>

@elseif(Session::get('role')=='dpph')
<body>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_petugas as $petugas)
                <h3>{{$petugas->jumlah_petugas}}</h3>
              @endforeach

                <p>Jumlah Petugas</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pengumuman as $pengumuman)
                <h3>{{$pengumuman->jumlah_pengumuman}}</h3>
              @endforeach

                <p>Jumlah Pengumuman</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->
</body>

@elseif(Session::get('role')=='pastor')
<body>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_petugas as $petugas)
                <h3>{{$petugas->jumlah_petugas}}</h3>
              @endforeach

                <p>Jumlah Petugas</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_umat as $umat)
                <h3>{{$umat->jumlah_umat}}</h3>
              @endforeach

                <p>Jumlah Umat</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pengumuman as $pengumuman)
                <h3>{{$pengumuman->jumlah_pengumuman}}</h3>
              @endforeach

                <p>Jumlah Pengumuman</p>
              </div>
            </div>
          </div>
           <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pesanan as $pesanan)
                <h3>{{$pesanan->jumlah_pesanan}}</h3>
              @endforeach

                <p>Jumlah Pesanan</p>
              </div>
            </div>
          </div>
          
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->
</body>

@elseif(Session::get('role')=='sekretariat')
<body>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_petugas as $petugas)
                <h3>{{$petugas->jumlah_petugas}}</h3>
              @endforeach

                <p>Jumlah Petugas</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_umat as $umat)
                <h3>{{$umat->jumlah_umat}}</h3>
              @endforeach

                <p>Jumlah Umat</p>
              </div>
            </div>
          </div>
           <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_baptis as $baptis)
                <h3>{{$baptis->jumlah_baptis}}</h3>
              @endforeach

                <p>Jumlah Baptis</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pengguna as $pengguna)
                <h3>{{$pengguna->jumlah_pengguna}}</h3>
              @endforeach

                <p>Jumlah Pengguna</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_ajuan_umat as $ajuan_umat)
                <h3>{{$ajuan_umat->jumlah_ajuan_umat}}</h3>
              @endforeach

                <p>Jumlah Ajuan Sebagai Umat</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_akun_umat as $akun_umat)
                <h3>{{$akun_umat->jumlah_akun_umat}}</h3>
              @endforeach

                <p>Jumlah Umat yang Memiliki Akun</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pengumuman as $pengumuman)
                <h3>{{$pengumuman->jumlah_pengumuman}}</h3>
              @endforeach

                <p>Jumlah Pengumuman</p>
              </div>
            </div>
          </div>
           <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              @foreach($jumlah_pesanan as $pesanan)
                <h3>{{$pesanan->jumlah_pesanan}}</h3>
              @endforeach

                <p>Jumlah Pesanan</p>
              </div>
            </div>
          </div>
          
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->
</body>

@else

@endif




@endsection