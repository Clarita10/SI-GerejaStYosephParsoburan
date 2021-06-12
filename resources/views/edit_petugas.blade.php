@extends('layout/main_edit_petugas')

@section('title', 'Edit Pengurus')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Edit Pengurus</a></li> -->
              <li class="breadcrumb-item active">Form Edit Pengurus</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @foreach($edit_petugas as $petugas)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostEditPetugas" method="post" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" value="{{$petugas->id}}" hidden></input>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Nama</label>
                    <div class="col-6">
                        <input type="text" name="nama" class="form-control" value="{{$petugas->nama}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Jabatan</label>
                    <div class="col-6">
                        <input type="text" name="jabatan" class="form-control" value="{{$petugas->jabatan}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Masa Jabatan</label>
                    <div class="col-6">
                        <input type="text" name="masa_jabatan" class="form-control" value="{{$petugas->masa_jabatan}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <!--Foto Pedukung Lama-->
                        <input type="text" name="foto_lama" class="form-control" 
                        value="{{$petugas->foto}}" required>
                        <!--Foto Pedukung Baru-->
                        <input type="file" name="foto" class="custom-file-input" accept="image/*">
                        <label class="custom-file-label">{{$petugas->foto}}</label>
                      </div>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Saran Ukuran Foto yang digunakan </text><text style="color:blue">( 1 x 1 )</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Lama</label>
                    <div class="col-6">
                      <div class="">
                      <center>
                        <img height="200px" width="200px" class="logo" src="../asset/u_file/image/{{$petugas->foto}}">
                      </center>
                      </div>
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
    @endforeach
  </div>

@endsection