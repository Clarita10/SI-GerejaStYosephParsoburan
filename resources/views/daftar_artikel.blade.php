@extends('layout/main_daftar_artikel')

@section('title', 'Daftar Artikel')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Artikel</a></li> -->
              <li class="breadcrumb-item active">Daftar Artikel</li>
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
                        <th>Tipe</th>
                        <th>Link</th>
                        <th>Caption</th>
                        <th>Foto Pendukung</th>
                        <th>Kode Link Video</th>
                        <th colspan="2">action</th>
                    </thead>
                  <tbody>
                    @foreach($daftar_artikel as $artikel)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$artikel->tipe}}</td>
                        <td width=""><a href="{{$artikel->link}}">{{$artikel->link}}</a></td>
                        <td width="">{{$artikel->caption}}</td>
                        @if($artikel->tipe=='informasi')
                        <td width="" align="center">
                            <img height="65px" width="65px" src="./asset/u_file/image/{{$artikel->foto_pendukung}}">
                        </td>
                        @else
                        <td width="" align="center">
                        
                        </td>
                        @endif
                        <td width="">{{$artikel->kode_link_video}}</td>
                        
                        <td width="" align="center"><a href="./edit_artikel/{{$artikel->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                        <td width="" align="center"><a href="./delete_artikel/{{$artikel->id}}" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Hapus</a></td>
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