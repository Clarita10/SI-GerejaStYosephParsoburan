@extends('layout/main_edit_pengumuman')

@section('title', 'Edit Pengumuman')

@section('container')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Edit Pengumuman</a></li> -->
              <li class="breadcrumb-item active">Form Edit Pengumuman</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @foreach($edit_pengumuman as $pengumuman)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostEditPengumuman" method="post" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" value="{{$pengumuman->id}}" hidden></input>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Kategori Pengumuman</label>
                    <div class="col-6">
                        <input type="text" name="kategori_pengumuman" class="form-control"
                        value="{{$pengumuman->kategori_pengumuman}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Judul Pengumuman</label>
                    <div class="col-6">
                        <input type="text" name="judul_pengumuman" class="form-control" 
                        value="{{$pengumuman->judul_pengumuman}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label"><text style="color:red">* </text>Isi Pengumuman</label>
                    <div class="col-9">
                        <textarea name="isi_pengumuman" class="textarea" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px;" required>
                        {{$pengumuman->isi_pengumuman}}</textarea>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Pendukung</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <!--Foto Pedukung Lama-->
                        <input type="text" name="foto_pendukung_lama" class="form-control" 
                        value="{{$pengumuman->foto_pendukung}}" required>
                        <!--Foto Pedukung Baru-->
                        <input type="file" name="foto_pendukung" class="custom-file-input" accept="image/*">
                        <label class="custom-file-label">{{$pengumuman->foto_pendukung}}</label>
                      </div>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Saran Ukuran Foto yang digunakan </text><text style="color:blue">( 2 x 1 )</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Lama</label>
                    <div class="col-6">
                      <div class="">
                      <center>
                        <img height="200px" width="400px" class="logo" src="../asset/u_file/image/{{$pengumuman->foto_pendukung}}">
                      </center>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Tanggal</label>
                    <div class="col-6">
                        <input type="date" name="tanggal" class="form-control" value="{{$pengumuman->tanggal}}" required>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="edit_p" type="submit" class="btn btn-primary float-right">Submit</button>
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