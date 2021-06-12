@extends('layout/main_tambah_petugas')

@section('title', 'Tambah Pengurus')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tambah Pengurus</a></li> -->
              <li class="breadcrumb-item active">Form Tambah Pengurus</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="./PostTambahPetugas" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Nama</label>
                    <div class="col-6">
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Jabatan</label>
                    <div class="col-6">
                        <input type="text" name="jabatan" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Masa Jabatan</label>
                    <div class="col-6">
                        <input type="text" name="masa_jabatan" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                      <!--Jika Tidak Ada Foto-->
                      <input type="text" name="foto_kosong" class="form-control" 
                        value="empty.png" required>
                        <!--Jika Ada Foto-->
                      <input type="file" name="foto" class="custom-file-input" accept="image/*">
                        <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Saran Ukuran Foto yang digunakan </text><text style="color:blue">( 1 x 1 )</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <div class="col-6">
                        <input type="text" name="status" value="none" class="form-control" hidden>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="tambah_p" type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
  </div>

@endsection