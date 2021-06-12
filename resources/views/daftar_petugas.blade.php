@extends('layout/main_daftar_petugas')

@section('title', 'Daftar Petugas')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Petugas</a></li> -->
              <li class="breadcrumb-item active">Daftar Petugas</li>
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
            </form><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Masa Jabatan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th colspan="3">action</th>
                    </thead>
                  <tbody>
                    @foreach($daftar_petugas as $petugas)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$petugas->nama}}</td>
                        <td width="">{{$petugas->jabatan}}</td>
                        <td width="">{{$petugas->masa_jabatan}}</td>
                        <td width="" align="center">
                            <img height="65px" width="65px" src="./asset/u_file/image/{{$petugas->foto}}">
                        </td>
                        @if($petugas->status=='ditampilkan')
                        <td width="" align="center"><span class="badge badge-success">{{$petugas->status}}</span></td>
                        <td width=""><a href="./batalkan_tampilan/{{$petugas->id}}" class="btn btn-danger btn-sm ">-</a></td>
                        @elseif($petugas->status=='none')
                        <td width="" align="center"><span class="badge badge-warning">{{$petugas->status}}</span></td>
                        <td width=""><a href="./tampilkan_petugas/{{$petugas->id}}" class="btn btn-success btn-sm ">+</a></td>
                        @endif
                        <td width="" align="center"><a href="./edit_petugas/{{$petugas->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                        <td width="" align="center"><a href="./delete_petugas/{{$petugas->id}}" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Hapus</a></td>
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