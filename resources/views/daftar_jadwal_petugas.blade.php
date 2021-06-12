@extends('layout/main_daftar_jadwal_petugas')

@section('title', 'Daftar Jadwal dan Petugas')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Jadwal Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Jadwal Petugas</a></li> -->
              <li class="breadcrumb-item active">Daftar Jadwal Petugas</li>
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
                        <th>Tanggal</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Pemimpin Misa</th>
                        <th>Petugas</th>
                        <th>Petugas Koor</th>
                        <th>Organ</th>
                        <th colspan="2">Action</th>
                    </thead>
                  <tbody>
                    @foreach($jadwal_petugas as $jadwal)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="" scope="row">{{$jadwal->tanggal}}</td>
                        <td width="" scope="row">{{$jadwal->mulai}}</td>
                        <td width="" scope="row">{{$jadwal->selesai}}</td>
                        <td width="" scope="row">{{$jadwal->pemimpin_misa}}</td>
                        <td width="" scope="row">{{$jadwal->petugas}}</td>
                        <td width="" scope="row">{{$jadwal->petugas_koor}}</td>
                        <td width="" scope="row">{{$jadwal->organ}}</td>
                        <td width="" align="center"><a href="./edit_jadwal_petugas/{{$jadwal->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                        <td width="" align="center"><a href="./delete_jadwal_petugas/{{$jadwal->id}}" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Hapus</a></td>
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