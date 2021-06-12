@extends('layout/main_edit_aula')

@section('title', 'Edit Infromasi Aula')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Infromasi Aula</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Edit Aula</a></li> -->
              <li class="breadcrumb-item active">Form Edit Infromasi Aula</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @foreach($edit_aula as $aula)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostEditAula" method="post">
              @csrf
                <input type="text" name="id" value="{{$aula->id}}" hidden></input>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Nama</label>
                    <div class="col-10">
                        <input type="text" name="nama" class="form-control" value="{{$aula->nama}}" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label">Gambar</label>
                    <div class="input-group col-10">
                      <div class="custom-file">
                        <!--Gambar Lama-->
                        <input type="text" name="gambar_lama" class="form-control" 
                        value="{{$aula->gambar}}" required>
                        <!--Gambar Baru-->
                        <input type="file" name="gambar" class="custom-file-input" accept="image/*">
                        <label class="custom-file-label">{{$aula->gambar}}</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label">Gambar Lama</label>
                    <div class="col-10">
                      <div class="">
                      <center>
                        <img height="250px" width="400px" class="logo" src="../asset/image/{{$aula->gambar}}">
                      </center>
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Harga</label>
                    <div class="col-10">
                        <input type="text" name="harga" class="form-control" value="{{$aula->harga}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label"><text style="color:red">* </text>Isi Pengumuman</label>
                    <div class="col-12">
                        <textarea name="informasi" class="textarea" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px;" required>
                        {{$aula->informasi}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="edit_k_l" type="submit" class="btn btn-primary float-right">Submit</button>
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