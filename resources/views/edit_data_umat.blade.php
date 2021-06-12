@extends('layout/main_edit_data_umat')

@section('title', 'Edit Data Umat')

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
            <h1>Form Edit Data Umat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Edit Data Umat</a></li> -->
              <li class="breadcrumb-item active">Form Edit Data Umat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @foreach($edit_data_umat as $data_umat)
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
              <form action="../PostEditDataUmat" method="post">
              @csrf
                <div class="card-body">
                  <div class="row form-group">
                    <input type="text" name="id" value="{{$data_umat->id}}" hidden></input>
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-6">
                      <select name="username" class="form-control select2">
                        <option selected="selected" value="{{$data_umat->username}}">{{$data_umat->username}}</option>
                        <option selected="selected" value="-"></option>
                        @foreach($username as $username)
                        <option value="{{$username->username}}">{{$username->username}}</option>
                         @endforeach
                      </select>
                    </div>
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
                        <input type="text" name="nama" class="form-control" value="{{$data_umat->nama}}" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Alamat</label>
                    <div class="col-6">
                        <input type="text" name="alamat" class="form-control" value="{{$data_umat->alamat}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>NIK</label>
                    <div class="col-6">
                        <input type="text" name="nik" min="0" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)" value="{{$data_umat->nik}}" required>
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
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Jenis Kelamin</label>
                    <div class="col-6">
                    <select name="jenis_kelamin" class="form-control" required>
                        <option selected="selected" value="{{$data_umat->jenis_kelamin}}">{{$data_umat->jenis_kelamin}}</option>
                        @if($data_umat->jenis_kelamin=='laki-laki')
                        <option value="perempuan">Perempuan</option>
                        @endif
                        @if($data_umat->jenis_kelamin=='perempuan')
                        <option value="laki-laki">Laki-Laki</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>No.Hp</label>
                    <div class="col-6">
                        <input type="number" name="no_hp" class="form-control" min="0" value="{{$data_umat->no_hp}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Lingkungan</label>
                    <div class="col-6">
                      <select name="lingkungan" class="form-control" required>
                        <option value="Lingkungan St. Carolus">Lingkungan St. Carolus</option>
                        <option value="Lingkungan St. Fidelis">Lingkungan St. Fidelis</option>
                        <option value="Lingkungan St. Fransiskus Asisi">Lingkungan St. Fransiskus Asisi</option>
                        <option value="Lingkungan St. Fransiskus Xaverius">Lingkungan St. Fransiskus Xaverius</option>
                        <option value="Lingkungan St. Immaculata">Lingkungan St. Immaculata</option>
                        <option value="Lingkungan St. Lusia">Lingkungan St. Lusia</option>
                        <option value="Lingkungan St. Mikael">Lingkungan St. Mikael</option>
                        <option value="Lingkungan St. Paulus">Lingkungan St. Paulus</option>
                        <option value="Lingkungan St. Petrus">Lingkungan St. Petrus</option>
                        <option value="Lingkungan St. Theresia">Lingkungan St. Theresia</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal Baptis</label>
                    <div class="col-6">
                        <input type="date" name="tanggal_baptis" class="form-control" value="{{$data_umat->tanggal_baptis}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>No.Baptis</label>
                    <div class="col-6">
                        <input type="number" name="no_baptis" class="form-control" min="0" value="{{$data_umat->no_baptis}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Paroki</label>
                    <div class="col-6">
                      <select name="paroki" class="form-control" required>
                        <option value="{{$data_umat->paroki}}" selected="selected">{{$data_umat->paroki}}</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Keuskupan</label>
                    <div class="col-6">
                      <select name="keuskupan" class="form-control" required>
                        <option value="{{$data_umat->keuskupan}}" selected="selected">{{$data_umat->keuskupan}}</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="tambah_d_u" type="submit" class="btn btn-primary float-right">Submit</button>
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