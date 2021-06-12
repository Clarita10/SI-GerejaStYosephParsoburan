@extends('layout/main_edit_slideshow')

@section('title', 'Edit Slideshow')

@section('container')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Slideshow</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Edit Slideshow</a></li> -->
              <li class="breadcrumb-item active">Form Edit Slideshow</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @foreach($edit_slideshow as $slideshow)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostEditSlideshow" method="post" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" value="{{$slideshow->id}}" hidden></input>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Pendukung</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <!--gambar Lama-->
                        <input type="text" name="gambar_lama" class="form-control" 
                        value="{{$slideshow->gambar}}" required>
                        <!--gambar Baru-->
                        <input type="file" name="gambar" class="custom-file-input" accept="image/*">
                        <label class="custom-file-label">{{$slideshow->gambar}}</label>
                      </div>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Saran Ukuran Foto yang digunakan </text><text style="color:blue">( 5 x 2 )</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Lama</label>
                    <div class="col-6">
                      <div class="">
                      <center>
                        <img height="200px" width="500px" class="logo" src="../asset/image/{{$slideshow->gambar}}">
                      </center>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Caption</label>
                    <div class="col-6">
                        <input type="text" name="caption" class="form-control" value="{{$slideshow->caption}}" required>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="edit_ss" type="submit" class="btn btn-primary float-right">Submit</button>
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