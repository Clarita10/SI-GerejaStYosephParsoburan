@extends('layout/main_tambah_data_baptis')

@section('title', 'Tambah Data Baptis')

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
            <h1>Form Tambah Data Baptis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tambah Data Baptis</a></li> -->
              <li class="breadcrumb-item active">Form Tambah Data Baptis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if(Session::get('role')=='sekretariat')
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
              <form action="PostTambahDataBaptis" method="post" enctype="multipart/form-data">
              @csrf
                    <script>
                      function harusHuruf(evt){
                              var charCode = (evt.which) ? evt.which : event.keyCode
                              if (charCode != 44 && charCode > 31 && charCode != 46 && charCode > 31 && (charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                                  return false;
                              return true;
                      }
                    </script>
                <div class="card-body">
                @if(Session::get('role')=='umat')
                  @if(Session::has('alert'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil Terkirim</h5>
                    {{Session::get('alert')}}.
                  </div>
                  @endif
                @endif
                  <label class=""><h3>DATA CALON BAPTIS</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Baptis</label>
                    <div class="col-6">
                        <input type="text" name="nama_baptis" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                  @if(Session::get('role')=='umat')
                  <input type="text" name="username" value="{{Session::get('username')}}" hidden></input>
                  @elseif(Session::get('role')=='sekretariat')
                  <input type="text" name="username" value="-" hidden></input>
                  @endif
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap</label>
                    <div class="col-6">
                        <input type="text" name="nama" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tempat Lahir</label>
                    <div class="col-6">
                        <input type="text" name="tempat_lahir" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal Lahir</label>
                    <div class="col-6">
                        <input type="date" name="tanggal_lahir" class="form-control" max="<?php echo date('Y-m-d') ?>" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Jenis Kelamin</label>
                    <div class="col-6">
                      <select name="jenis_kelamin" class="form-control" required>
                        <option selected="selected" value=""></option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>NIK</label>
                    <div class="col-6">
                        <input type="text" name="nik" min="0" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)" required>
                    </div>
                    <text class="col-sm-8">
                      <text style="color:red">Jika, </text><text style="color:blue">Belum Memiliki NIK</text>
                      <text style="color:red">minimal isi dengan " </text>
                      <text style="color:blue"><b>-</b></text><text style="color:red"> "</text>
                    </text>
                     <script>
                        function hanyaAngka(event) {
                            var angka = (event.which) ? event.which : event.keyCode
                            if ((angka < 48 || angka > 57))
                                return false;
                            return true;
                        }
                    </script>
                  </div>
                  <label class=""><h3>DATA ORANG TUA KANDUNG / ADOPSI</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Ayah</label>
                    <div class="col-6">
                        <input type="text" name="nama_ayah" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Agama Ayah</label>
                    <div class="col-6">
                        <input type="text" name="agama_ayah" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Ibu</label>
                    <div class="col-6">
                        <input type="text" name="nama_ibu" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Agama Ibu</label>
                    <div class="col-6">
                        <input type="text" name="agama_ibu" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Alamat Pos</label>
                    <div class="col-6">
                        <input type="text" name="alamat_pos" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>No HP</label>
                    <div class="col-6">
                        <input type="number" name="no_hp" class="form-control" min="0" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>No KK</label>
                    <div class="col-6">
                        <input type="number" name="no_kk" class="form-control" min="0" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Lingkungan</label>
                    <div class="col-6">
                      <select name="lingkungan" class="form-control" required>
                        <option value="-" selected="selected"></option>
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
                  <label class=""><h3>BAPAK DAN IBU BAPTIS</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap Bapak Baptis</label>
                    <div class="col-6">
                        <input type="text" name="nama_lengkap_bapak_baptis" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap Ibu Baptis</label>
                    <div class="col-6">
                        <input type="text" name="nama_lengkap_ibu_baptis" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <label class=""><h3>LAMPIRAN</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label">Surat Baptis</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <!--Jika Tidak Diisi-->
                        <input type="text" name="bukti_surat_baptis_kosong" class="form-control" value="empty.png" required>
                        <!--Jika Diisi-->
                        <input type="file" name="bukti_surat_baptis" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label">Surat Nikah (Gereja)</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <!--Jika Tidak Diisi-->
                        <input type="text" name="bukti_surat_nikah_kosong" class="form-control" value="empty.png" required>
                        <!--Jika Diisi-->
                        <input type="file" name="bukti_surat_nikah" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Kartu Keluarga</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_kk" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Surat Keterangan Lahir</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_fotocopy_akte_lahir" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Surat Nikah Orangtua (Sipil)</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_surat_nikah_orangtua" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="tambah_d_b" type="submit" class="btn btn-primary float-right">Submit</button>
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

    @elseif(Session::get('role')=='umat')
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
              <form action="PostTambahDataBaptis" method="post" enctype="multipart/form-data">
              @csrf
                    <script>
                      function harusHuruf(evt){
                              var charCode = (evt.which) ? evt.which : event.keyCode
                              if (charCode != 44 && charCode > 31 && charCode != 46 && charCode > 31 && (charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                                  return false;
                              return true;
                      }
                    </script>
                <div class="card-body">
                @if(Session::get('role')=='umat')
                  @if(Session::has('alert'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil Terkirim</h5>
                    {{Session::get('alert')}}.
                  </div>
                  @endif
                @endif
                  <label class=""><h3>DATA CALON BAPTIS</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Baptis</label>
                    <div class="col-6">
                        <input type="text" name="nama_baptis" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                  @if(Session::get('role')=='umat')
                  <input type="text" name="username" value="{{Session::get('username')}}" hidden></input>
                  @elseif(Session::get('role')=='sekretariat')
                  <input type="text" name="username" value="-" hidden></input>
                  @endif
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap</label>
                    <div class="col-6">
                        <input type="text" name="nama" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tempat Lahir</label>
                    <div class="col-6">
                        <input type="text" name="tempat_lahir" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Tanggal Lahir</label>
                    <div class="col-6">
                        <input type="date" name="tanggal_lahir" class="form-control" max="<?php echo date('Y-m-d') ?>" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Jenis Kelamin</label>
                    <div class="col-6">
                      <select name="jenis_kelamin" class="form-control" required>
                        <option selected="selected" value=""></option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>NIK</label>
                    <div class="col-6">
                        <input type="text" name="nik" min="0" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)" required>
                    </div>
                    <text class="col-sm-8">
                      <text style="color:red">Jika, </text><text style="color:blue">Belum Memiliki NIK</text>
                      <text style="color:red">minimal isi dengan " </text>
                      <text style="color:blue"><b>-</b></text><text style="color:red"> "</text>
                    </text>
                     <script>
                        function hanyaAngka(event) {
                            var angka = (event.which) ? event.which : event.keyCode
                            if ((angka < 48 || angka > 57))
                                return false;
                            return true;
                        }
                    </script>
                  </div>
                  <label class=""><h3>DATA ORANG TUA KANDUNG / ADOPSI</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Ayah</label>
                    <div class="col-6">
                        <input type="text" name="nama_ayah" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Agama Ayah</label>
                    <div class="col-6">
                        <input type="text" name="agama_ayah" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Ibu</label>
                    <div class="col-6">
                        <input type="text" name="nama_ibu" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Agama Ibu</label>
                    <div class="col-6">
                        <input type="text" name="agama_ibu" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Alamat Pos</label>
                    <div class="col-6">
                        <input type="text" name="alamat_pos" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>No HP</label>
                    <div class="col-6">
                        <input type="number" name="no_hp" class="form-control" min="0" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>No KK</label>
                    <div class="col-6">
                        <input type="number" name="no_kk" class="form-control" min="0" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Lingkungan</label>
                    <div class="col-6">
                      <select name="lingkungan" class="form-control" required>
                        <option value="" selected="selected">Pilih...</option>
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
                  <label class=""><h3>BAPAK DAN IBU BAPTIS</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap Bapak Baptis</label>
                    <div class="col-6">
                        <input type="text" name="nama_lengkap_bapak_baptis" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama Lengkap Ibu Baptis</label>
                    <div class="col-6">
                        <input type="text" name="nama_lengkap_ibu_baptis" class="form-control" onkeypress='return harusHuruf(event)' required>
                    </div>
                  </div>
                  <label class=""><h3>LAMPIRAN</h3></label>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Surat Baptis</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_surat_baptis" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Surat Nikah (Gereja)</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_surat_nikah" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Kartu Keluarga</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_kk" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Surat Keterangan Lahir</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_fotocopy_akte_lahir" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Surat Nikah Orangtua (Sipil)</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_surat_nikah_orangtua" class="custom-file-input" required>
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="tambah_d_b" type="submit" class="btn btn-primary float-right">Submit</button>
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
    @endif
  </div>

@endsection