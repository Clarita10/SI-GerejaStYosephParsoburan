@extends('layout/main_pemesanan_aula')

@section('title', 'Pemesanan Aula')

@section('container')

          <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }

            input[type=number] {
                -moz-appearance: textfield;
            }
          </style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pemesanan Aula</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Pemesanan Aula</a></li> -->
              <li class="breadcrumb-item active">Form Pemesanan Aula</li>
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
              <form action="./PostPemesananAula" method="post" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
                @if(Session::has('alert'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil Terkirim</h5>
                  {{Session::get('alert')}}
                </div>
                @endif
                <div class="row form-group">
                <input type="text" name="username" value="{{Session::get('username')}}" hidden></input>
                <input type="text" name="alasan_ditolak" value="-" hidden></input>
                <input type="text" name="bukti_pembayaran" value="-" hidden></input>
                <input type="text" name="tanda_tangan_pastor" value="-" hidden></input>
                <input type="text" name="nama_pastor" value="-" hidden></input>
                <input type="text" name="status" value="none" hidden></input>
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap</label>
                    <div class="col-6">
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Keperluan</label>
                    <div class="col-6">
                        <textarea name="keperluan" placeholder="Place some text here"
                        style="width: 100%; height: 100px; font-size: 14px;" required></textarea>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal Pemakaian</label>
                    <div class="col-3">
                        <input type="date" onclick="myFunction2()" name="tanggal_mulai" id="tanggal_mulai" class="form-control" min="<?php echo date('Y-m-d', strtotime('3 days', strtotime(date('Y-m-d')))) ?>" required>
                    </div>
                    <text><b>-</b></text>
                    <div class="col-3">
                        <input type="date"  onclick="myFunction()" name="tanggal_selesai" id="tanggal_selesai" class="form-control" min="<?php echo date('Y-m-d', strtotime('3 days', strtotime(date('Y-m-d')))) ?>" required>
                    </div>
                  </div>
                  <script>
                    function myFunction() {
                      if(document.getElementById("tanggal_mulai").value >= document.getElementById("tanggal_selesai").value){
                        var x = document.getElementById("tanggal_mulai").value;
                        document.getElementById("tanggal_selesai").min = x;
                      }
                    }
                    function myFunction2() {
                      if(document.getElementById("tanggal_selesai").value >= document.getElementById("tanggal_mulai").value){
                        var x = document.getElementById("tanggal_selesai").value;
                        document.getElementById("tanggal_mulai").max = x;
                      }
                    }
                  </script>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="pesan_aula" type="submit" class="btn btn-primary float-right">Submit</button>
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