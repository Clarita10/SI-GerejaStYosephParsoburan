@extends('layout/main_tambah_artikel')

@section('title', 'Tambah Artikel')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tambah Artkel</a></li> -->
              <li class="breadcrumb-item active">Form Tambah Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="./PostTambahArtikel" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Tipe</label>
                    <div class="col-6">
                      <select name="tipe" class="form-control" required>
                        <option selected="selected" value=""></option>
                        <option value="video">Video Youtube</option>
                        <option value="informasi">Informasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Link</label>
                    <div class="col-6">
                        <input type="text" name="link" class="form-control" required>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Contoh: </text><text style="color:blue">https://youtu.be/TnLfl2kpbrU</text>
                      <text style="color:red"> atau </text><text style="color:blue">https://www.youtube.com/watch?v=TnLfl2kpbrU</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Caption</label>
                    <div class="col-6">
                        <input type="text" name="caption" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Foto Pendukung</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                      <!--Jika Tidak Ada Foto-->
                      <input type="text" name="foto_kosong" class="form-control" 
                        value="empty.png" required>
                        <!--Jika Ada Foto-->
                      <input type="file" name="foto_pendukung" class="custom-file-input" accept="image/*">
                      <label class="custom-file-label">Choose file</label>
                      </div>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Isi, jika tipe </text><text style="color:blue">Informasi</text>
                      <text style="color:red">dan jika tidak ada </text><text style="color:blue">biarkan saja</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Kode Link Video</label>
                    <div class="col-6">
                        <input type="text" name="kode_link_video" class="form-control" required>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Isi, jika tipe </text><text style="color:blue">Video Youtube,</text>
                      <text style="color:red">Contoh: </text><text style="color:blue">TnLfl2kpbrU</text><br>
                      <text style="color:red">Jika tipe </text><text style="color:blue">Informasi, </text>
                      <text style="color:red">minimal isi dengan " </text>
                      <text style="color:blue"><b>-</b></text><text style="color:red"> "</text>
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
  </div>

@endsection