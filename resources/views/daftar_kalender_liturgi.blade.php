@extends('layout/main_daftar_kalender_liturgi')

@section('title', 'Daftar Kalender Liturgi')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Kalender Liturgi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Kalender Liturgi</a></li> -->
              <li class="breadcrumb-item active">Daftar Kalender Liturgi</li>
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
              <form role="form-horizontal" id="quickForm">
                <div class="card-body">
                <form action="./user" method="GET">
                <input class="input_cari" type="text" name="cari" placeholder="Cari..." value="{{ old('cari') }}" autofocus>
                <button class="btn_cari" type="submit"><i class="fas fa-search"></i></button>
            </form><br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>Judul Hari</th>
                        <th>Tanggal</th>
                        <th>Bacaan 1</th>
                        <th>Mazmur</th>
                        <th>Bacaan 2</th>
                        <th>Injil</th>
                        <th>Warna Liturgi</th>
                        <th colspan="2">Action</th>
                    </thead>
                  <tbody>
                    @foreach($kalender_liturgi as $liturgi)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="" scope="row">{{$liturgi->judul_hari}}</td>
                        <td width="" scope="row">{{$liturgi->tanggal}}</td>
                        <td width="" scope="row">{{$liturgi->bacaan_1}}</td>
                        <td width="" scope="row">{{$liturgi->mazmur}}</td>
                        <td width="" scope="row">{{$liturgi->bacaan_2}}</td>
                        <td width="" scope="row">{{$liturgi->injil}}</td>
                        <td width="" scope="row">{{$liturgi->warna_liturgi}}</td>
                        <td width="" align="center"><a href="./edit_kalender_liturgi/{{$liturgi->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                        <td width="" align="center"><a href="./delete_kalender_liturgi/{{$liturgi->id}}" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Hapus</a></td>
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

            </div>
            </div>
          <div class="col-md-6">
          </div>
        </div>
      </div>
    </section>
</div>

@endsection