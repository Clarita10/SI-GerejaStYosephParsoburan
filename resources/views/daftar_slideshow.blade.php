@extends('layout/main_daftar_slideshow')

@section('title', 'Daftar Slideshow')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Slideshow</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Slideshow</a></li> -->
              <li class="breadcrumb-item active">Daftar Slideshow</li>
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

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 495px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Caption</th>
                        <th>action</th>
                    </thead>
                  <tbody>
                    @foreach($daftar_slideshow as $slideshow)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="" align="center">
                            <img height="60px" width="60px" src="./asset/image/{{$slideshow->gambar}}">
                        </td>
                        <td width="">{{$slideshow->caption}}</td>
                        
                        <td width="" align="center"><a href="./edit_slideshow/{{$slideshow->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
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