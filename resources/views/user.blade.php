@extends('layout/main_user')

@section('title', 'Daftar User')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Pengguna</a></li> -->
              <li class="breadcrumb-item active">Daftar User</li>
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

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Role</th>
                        <th colspan="2">action</th>
                    </thead>
                  <tbody>
                    @foreach($user as $user)
                    @if($user->role=='dpph'||$user->role=='pastor'||$user->role=='sekretariat')
                    
                    @else
                    <tr>
                        <td width="30px" scope="row">{{ $loop->iteration }}</td>
                        <td width="50px">{{$user->id}}</td>
                        <td width="100px">{{$user->username}}</td>
                        <td width="250px">{{$user->nama}}</td>
                        <td width="250px">{{$user->tanggal_lahir}}</td>
                        <td width="250px">{{$user->alamat}}</td>
                        <td width="200px">{{$user->email}}</td>
                        <td width="120px">{{$user->no_telepon}}</td>
                        <td width="90px" align="center">
                            @if($user->role=='umat')
                                <span class="badge badge-success">{{$user->role}}</span>
                            @endif
                            @if($user->role=='masyarakat')
                                <span class="badge badge-info">{{$user->role}}</span>
                            @endif
                        </td>
                        <td width="90px" align="center">
                            @if($user->role=='dpph'||$user->role=='pastor'||$user->role=='sekretariat')
                            @else
                            <a href="./detail_user/{{$user->id}}" class="btn btn-info btn-sm "><i class="fas fa-edit"></i> Detail</a>
                            @endif
                        </td>
                        <!-- <td width="50px"><a href="./delete_user/{{$user->id}}" style="color:red; text-decoration: none;">delete</a></td> -->
                    </tr>
                    @endif
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