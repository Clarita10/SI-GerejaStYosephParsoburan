@extends('layout/main_edit_jadwal_petugas')

@section('title', 'Edit Jadwal Petugas')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Jadwal dan Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Edit Jadwal dan Petugas</a></li> -->
              <li class="breadcrumb-item active">Form Edit Jadwal dan Petugas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @foreach($edit_jadwal_petugas as $jadwal_petugas)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../PostEditJadwalPetugas" method="post">
              @csrf
                <input type="text" name="id" value="{{$jadwal_petugas->id}}" hidden></input>
                <?php date_default_timezone_set('Asia/Jakarta');?>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal</label>
                    <div class="col-6">
                        <input type="date" name="tanggal" class="form-control" 
                        value="{{$jadwal_petugas->tanggal}}"required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Pukul</label>
                    <div class="col-3">
                        <input type="time" name="mulai" class="form-control" value="{{$jadwal_petugas->mulai}}" required>
                    </div>
                    <label class="col-form-label">-</label>
                    <div class="col-3">
                        <input type="time" name="selesai" class="form-control" value="{{$jadwal_petugas->selesai}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Pemimpin Misa</label>
                    <div class="col-6">
                        <input type="text" name="pemimpin_misa" class="form-control" value="{{$jadwal_petugas->pemimpin_misa}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Petugas</label>
                    <div class="col-6">
                        <input type="text" name="petugas" class="form-control" value="{{$jadwal_petugas->petugas}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Petugas Koor</label>
                    <div class="col-6">
                        <input type="text" name="petugas_koor" class="form-control" value="{{$jadwal_petugas->petugas_koor}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Organ</label>
                    <div class="col-6">
                        <input type="text" name="organ" class="form-control" value="{{$jadwal_petugas->organ}}" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="edit_j_p" type="submit" class="btn btn-primary float-right">Submit</button>
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
    @endforeach
    <!-- /.content -->
  </div>

@endsection