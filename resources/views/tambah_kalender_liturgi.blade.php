@extends('layout/main_tambah_kalender_liturgi')

@section('title', 'Tambah Kalender Liturgi')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Kalender Liturgi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tambah Kalender Liturgi</a></li> -->
              <li class="breadcrumb-item active">Form Tambah Kalender Liturgi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <div class="col-md-3">
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Berhasil Menambahkan</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->
              <form action="./PostTambahKalenderLiturgi" method="post">
              @csrf
                <?php date_default_timezone_set('Asia/Jakarta');?>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Judul Hari</label>
                    <div class="col-6">
                        <input type="text" name="judul_hari" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal</label>
                    <div class="col-6">
                        <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d') ?>" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Bacaan 1</label>
                    <div class="col-6">
                        <input type="text" name="bacaan_1" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Mazmur</label>
                    <div class="col-6">
                        <input type="text" name="mazmur" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Bacaan 2</label>
                    <div class="col-6">
                        <input type="text" name="bacaan_2" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Injil</label>
                    <div class="col-6">
                        <input type="text" name="injil" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Warna Liturgi</label>
                    <div class="col-6">
                        <input type="text" name="warna_liturgi" class="form-control" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="tambah_k_l" type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection