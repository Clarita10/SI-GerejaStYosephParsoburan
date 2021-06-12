@extends('layout/main_edit_artikel')

@section('title', 'Edit Artikel')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Edit Artikel</a></li> -->
              <li class="breadcrumb-item active">Form Edit Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @foreach($edit_artikel as $artikel)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostEditArtikel" method="post" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" value="{{$artikel->id}}" hidden></input>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Tipe</label>
                    <div class="col-6">
                    <select name="tipe" class="form-control" required>
                        <option selected="selected" value="{{$artikel->tipe}}">{{$artikel->tipe}}</option>
                        @if($artikel->tipe=='video')
                        <option value="informasi">Informasi</option>
                        @endif
                        @if($artikel->tipe=='informasi')
                        <option value="video">Video Youtube</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Link</label>
                    <div class="col-6">
                        <input type="text" name="link" class="form-control" value="{{$artikel->link}}" required>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Contoh: </text><text style="color:blue">https://youtu.be/TnLfl2kpbrU</text>
                      <text style="color:red"> atau </text><text style="color:blue">https://www.youtube.com/watch?v=TnLfl2kpbrU</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Caption</label>
                    <div class="col-6">
                        <input type="text" name="caption" class="form-control" value="{{$artikel->caption}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Pendukung</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <!--Foto Pedukung Lama-->
                        <input type="text" name="foto_pendukung_lama" class="form-control" 
                        value="{{$artikel->foto_pendukung}}">
                        <!--Foto Pedukung Baru-->
                        <input type="file" name="foto_pendukung" class="custom-file-input" accept="image/*">
                        <label class="custom-file-label">{{$artikel->foto_pendukung}}</label>
                      </div>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Isi, jika tipe </text><text style="color:blue">Informasi</text>
                      <text style="color:red">dan jika tipe </text><text style="color:blue">Video Youtube,</text>
                      <text style="color:red">biarkan saja</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Lama</label>
                    <div class="col-6">
                      <div class="">
                      <center>
                        <img height="210px" width="280px" src="../asset/u_file/image/{{$artikel->foto_pendukung}}">
                      </center>
                      </div>
                    </div>
                  </div>

                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Kode Link Video</label>
                    <div class="col-6">
                        <input type="text" name="kode_link_video" class="form-control" value="{{$artikel->kode_link_video}}">
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Isi, jika tipe </text><text style="color:blue">Video Youtube,</text>
                      <text style="color:red">Contoh: </text><text style="color:blue">TnLfl2kpbrU</text><br>
                      <text style="color:red">Jika tipe </text><text style="color:blue">Informasi, </text>
                      <text style="color:red">minimal isi dengan " </text><text style="color:blue"><b>-</b></text>
                      <text style="color:red"> "</text><text style="color:red">atau biarkan saja</text>
                    </text>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="tambah_a" type="submit" class="btn btn-primary float-right">Submit</button>
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