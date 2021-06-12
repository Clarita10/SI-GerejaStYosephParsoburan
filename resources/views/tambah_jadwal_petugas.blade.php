@extends('layout/main_tambah_jadwal_petugas')

@section('title', 'Tambah Jadwal Petugas')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Jadwal dan Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tambah Jadwal dan Petugas</a></li> -->
              <li class="breadcrumb-item active">Form Tambah Jadwal dan Petugas</li>
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
              <form action="./PostTambahJadwalPetugas" method="post">
              @csrf
                <?php date_default_timezone_set('Asia/Jakarta');?>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal</label>
                    <div class="col-6">
                        <input type="date" name="tanggal" class="form-control" 
                        value="<?php echo date('Y-m-d', strtotime('sunday', strtotime(date('Y-m-d')))) ?>"required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Pukul</label>
                    <div class="col-3">
                        <input type="time" name="mulai" class="form-control" required>
                    </div>
                    <label class="col-form-label">-</label>
                    <div class="col-3">
                        <input type="time" name="selesai" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Pemimpin Misa</label>
                    <div class="col-6">
                        <input type="text" name="pemimpin_misa" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Petugas</label>
                    <div class="col-6">
                        <input type="text" name="petugas" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Petugas Koor</label>
                    <div class="col-6">
                        <input type="text" name="petugas_koor" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Organ</label>
                    <div class="col-6">
                        <input type="text" name="organ" class="form-control" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="tambah_j_p" type="submit" class="btn btn-primary float-right">Submit</button>
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