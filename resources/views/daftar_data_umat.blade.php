@extends('layout/main_daftar_data_umat')

@section('title', 'Daftar Umat')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Umat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Umat</a></li> -->
              <li class="breadcrumb-item active">Daftar Umat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                      <a href="./daftar_data_umat/export_excel" class="btn btn-sm btn-success"><i class="fas fa-file"></i> <b>EXPORT</b> Excel</a>
                    </div>
                    <div class="col-sm-2 col-form-label">
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importExcel">
                        <i class="fas fa-file"></i> <b>IMPORT</b> Excel
                      </button>
                    </div>
                  </div>
    {{-- notifikasi form validasi --}}
		<!-- @if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif -->

    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="./daftar_data_umat/import_excel" enctype="multipart/form-data">
        @csrf
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							<label><text style="color:red">* </text>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required>
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
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
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Lingkungan</th>
                        <th>Tanggal Baptis</th>
                        <th>No Baptis</th>
                        <th>Paroki</th>
                        <th>Keuskupan</th>
                        <th colspan="2">action</th>
                    </thead>
                  <tbody>
                    @foreach($data_umat as $umat)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$umat->username}}</td>
                        <td width="">{{$umat->nama}}</td>
                        <td width="">{{$umat->alamat}}</td>
                        <td width="">{{$umat->nik}}</td>
                        <td width="">{{$umat->jenis_kelamin}}</td>
                        <td width="">{{$umat->no_hp}}</td>
                        <td width="">{{$umat->lingkungan}}</td>
                        <td width="">{{$umat->tanggal_baptis}}</td>
                        <td width="">{{$umat->no_baptis}}</td>
                        <td width="">{{$umat->paroki}}</td>
                        <td width="">{{$umat->keuskupan}}</td>
                        <td width="" align="center"><a href="./edit_data_umat/{{$umat->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                        <td width="" align="center"><a href="./delete_data_umat/{{$umat->id}}" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Hapus</a></td>
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
  </div>

@endsection