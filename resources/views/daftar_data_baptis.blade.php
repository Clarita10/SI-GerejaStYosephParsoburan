@extends('layout/main_daftar_data_baptis')

@section('title', 'Daftar Data Baptis')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Data Baptis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Data Baptis</a></li> -->
              <li class="breadcrumb-item active">Daftar Data Baptis</li>
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
              <form role="form-horizontal" id="quickForm">
                <div class="card-body">
                <form action="./user" method="GET">
                <input class="input_cari" type="text" name="cari" placeholder="Cari..." value="{{ old('cari') }}" autofocus>
                <button class="btn_cari" type="submit"><i class="fas fa-search"></i></button>
            </form><br><br>
                  <div class="row form-group">
                    <div class="col-sm-2 col-form-label">
                      <a href="./daftar_data_baptis/export_excel" class="btn btn-sm btn-success"><i class="fas fa-file"></i> <b>EXPORT</b> Excel</a>
                    </div>
                  </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Surat Baptis</th>
                        <th>Surat Nikah (Gereja)</th>
                        <th>Kartu Keluarga</th>
                        <th>Surat Keterangan Lahir</th>
                        <th>Surat Nikah Orang Tua (Sipil)</th>
                        <th>Surat Permandian</th>
                        <th colspan="2">action</th>
                    </thead>
                  <tbody>
                    @foreach($daftar_data_baptis as $data_baptis)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="" scope="row">{{$data_baptis->username}}</td>
                        <td width="" scope="row">{{$data_baptis->nama}}</td>
                        <td width="" scope="row">{{$data_baptis->tempat_lahir}}</td>
                        <td width="" scope="row">{{$data_baptis->tanggal_lahir}}</td>
                        <td width="" scope="row">{{$data_baptis->jenis_kelamin}}</td>
                        <td width="" scope="row">{{$data_baptis->nama_ayah}}</td>
                        <td width="" scope="row">{{$data_baptis->nama_ibu}}</td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_surat_baptis}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_surat_baptis}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_kk}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_kk}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_fotocopy_akte_lahir}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_fotocopy_akte_lahir}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah_orangtua}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah_orangtua}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" align="center"><a href="./data_baptis/surat_permandian/{{$data_baptis->id}}" class="btn btn-danger btn-sm "><i class="fas fa-file"></i> Download PDF</i></a></td>
                        <td width="" align="center"><a href="./edit_data_baptis/{{$data_baptis->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                        <td width="" align="center"><a href="./delete_data_baptis/{{$data_baptis->id}}" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Hapus</a></td>
                    </tr>
                    @endforeach     
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

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

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Surat Baptis</th>
                        <th>Surat Nikah (Gereja)</th>
                        <th>Kartu Keluarga</th>
                        <th>Surat Keterangan Lahir</th>
                        <th>Surat Nikah Orang Tua (Sipil)</th>
                        <th colspan="2">action</th>
                    </thead>
                  <tbody>
                    @foreach($data_daftar_baptis as $data_baptis)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="" scope="row">{{$data_baptis->username}}</td>
                        <td width="" scope="row">{{$data_baptis->nama}}</td>
                        <td width="" scope="row">{{$data_baptis->tempat_lahir}}</td>
                        <td width="" scope="row">{{$data_baptis->tanggal_lahir}}</td>
                        <td width="" scope="row">{{$data_baptis->jenis_kelamin}}</td>
                        <td width="" scope="row">{{$data_baptis->nama_ayah}}</td>
                        <td width="" scope="row">{{$data_baptis->nama_ibu}}</td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_surat_baptis}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_surat_baptis}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_kk}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_kk}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_fotocopy_akte_lahir}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_fotocopy_akte_lahir}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" scope="row" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah_orangtua}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                          <!-- <b>ATAU</b>
                          <a href="./asset/u_file/file/{{$data_baptis->bukti_surat_nikah_orangtua}}" class="btn btn-info btn-sm " download><i class="fas fa-download"></i> Download Bukti</a> -->
                        </td>
                        <td width="" align="center"><a href="./edit_data_baptis/{{$data_baptis->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                    </tr>
                    @endforeach     
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

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
    @endif
  </div>

@endsection