@extends('layout/main_tambah_pengumuman')

@section('title', 'Tambah Pengumuman')

@section('container')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tambah Pengumuman</a></li> -->
              <li class="breadcrumb-item active">Form Tambah Pengumuman</li>
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
              <form action="./PostTambahPengumuman" method="post" enctype="multipart/form-data">
              @csrf
                <?php date_default_timezone_set('Asia/Jakarta');?>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Kategori Pengumuman</label>
                    <div class="col-6">
                        <input type="text" name="kategori_pengumuman" class="form-control" required>
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Judul Pengumuman</label>
                    <div class="col-6">
                        <input type="text" name="judul_pengumuman" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label"><text style="color:red">* </text>Isi Pengumuman</label>
                    <div class="col-9">
                        <textarea name="isi_pengumuman" class="textarea" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px;" required></textarea>
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
                      <text style="color:red">Saran Ukuran Foto yang digunakan </text><text style="color:blue">( 2 x 1 )</text>
                    </text>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Tanggal</label>
                    <div class="col-6">
                        <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d') ?>" required>
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