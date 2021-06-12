@extends('layout/main_ajuan_umat')

@section('title', 'Verifikasi Akun Umat')

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
            <h1>Form Verifikasi Akun Umat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Ajuan Sebagai Umat</a></li> -->
              <li class="breadcrumb-item active">Form Verifikasi Akun Umat</li>
            </ol>
          </div>
        </div>
        <b><text>Verifikasi ini dilakukan oleh umat gereja paroki St.yoseph parsoburan untuk mengubah akun menjadi akun umat</text><b>
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
              <form action="./PostAjuanUmat" method="post" enctype="multipart/form-data">
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
                  <input type="text" name="status" value="none" hidden></input>
                  <input type="text" name="alasan_ditolak" value="-" hidden></input>
                  <input type="text" name="username" value="{{Session::get('username')}}" hidden></input>
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>NIK</label>
                    <div class="col-6">
                        <input type="text" name="nik" min="0" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)" required>
                    </div>
                     <script>
                        function hanyaAngka(event) {
                            var angka = (event.which) ? event.which : event.keyCode
                            if ((angka < 48 || angka > 57))
                                return false;
                            return true;
                        }
                    </script>
                  </div>
                    <script>
                      function harusHuruf(evt){
                              var charCode = (evt.which) ? evt.which : event.keyCode
                              if (charCode != 44 && charCode > 31 && charCode != 46 && charCode > 31 && (charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                                  return false;
                              return true;
                      }
                    </script>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap</label>
                    <div class="col-6">
                        <input type="text" name="nama" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tempat Lahir</label>
                    <div class="col-6">
                        <input type="text" name="tempat_lahir" class="form-control" onkeypress='return harusHuruf(event)'  required>
                    </div>
                  </div>
                  <div class="row form-group" hidden>
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal Lahir</label>
                    <div class="col-6">
                        @foreach($tanggal_lahir as $tanggal_lahir)
                        <input type="date" name="tanggal_lahir" class="form-control" max="<?php echo date('Y-m-d') ?>"  value="{{$tanggal_lahir->tanggal_lahir}}" required>
                        @endforeach
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Jenis Kelamin</label>
                    <div class="col-6">
                      <select name="jenis_kelamin" class="form-control" required>
                        <option selected="selected" value=""></option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="laki-laki">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Paroki</label>
                    <div class="col-6">
                      <select name="nama_paroki" class="form-control" required>
                        <option value="Paroki Santo Yoseph Parsoburan" selected="selected">Paroki Santo Yoseph Parsoburan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group" hidden>
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Alamat</label>
                    <div class="col-6">
                        @foreach($alamat as $alamat)
                        <input type="text" name="alamat" class="form-control" value="{{$alamat->alamat}}" required>
                        @endforeach
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Bukti KTP</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <!--Jika Ada Foto-->
                      <input type="file" name="bukti_ktp" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="tambah_d_b" type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </div>
              </form>
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