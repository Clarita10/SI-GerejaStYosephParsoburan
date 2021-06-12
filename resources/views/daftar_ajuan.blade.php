@extends('layout/main_daftar_ajuan')

@section('title', 'Daftar Verifikasi Akun')

@section('container')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Verifikasi Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Verifikasi Akun</a></li> -->
              <li class="breadcrumb-item active">Daftar Verifikasi Akun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if(Session::get('role')=='sekretariat')
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
                        <th>Username</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Paroki</th>
                        <th>Alamat</th>
                        <th>Bukti KTP</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                        <th>Alasan Ditolak</th>
                    </thead>
                  <tbody>
                    @foreach($ajuan_umat as $ajuan)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$ajuan->username}}</td>
                        <td width="">{{$ajuan->nik}}</td>
                        <td width="">{{$ajuan->nama}}</td>
                        <td width="">{{$ajuan->tempat_lahir}}</td>
                        <td width="">{{$ajuan->tanggal_lahir}}</td>
                        <td width="">{{$ajuan->jenis_kelamin}}</td>
                        <td width="">{{$ajuan->nama_paroki}}</td>
                        <td width="">{{$ajuan->alamat}}</td>
                        <td width="" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$ajuan->bukti_ktp}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                        </td>
                        @if($ajuan->status=='disetujui')
                        <td width="" align="center"><span class="badge badge-success">{{$ajuan->status}}</span></td>
                        @elseif($ajuan->status=='ditolak')
                        <td width="" align="center"><span class="badge badge-danger">{{$ajuan->status}}</span></td>
                        @elseif($ajuan->status=='none')
                        <td width="" align="center"><span class="badge badge-warning">{{$ajuan->status}}</span></td>
                        @endif
                        <td width=""><a href="./setujui_ajuan/{{$ajuan->id}}/{{$ajuan->username}}" class="btn btn-success btn-sm "><i class="fas fa-thumbs-up"></i></a></td>
                        <td width=""><a href="./tolak_ajuan/{{$ajuan->id}}" class="btn btn-danger btn-sm "><i class="fas fa-thumbs-down"></i></a></td>
                        @if($ajuan->status=='ditolak' && $ajuan->alasan_ditolak=='-')
                        <td width="" align="center"><a href="./alasan_ajuan_ditolak/{{$ajuan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Isi Alasan Ditolak</i></a></td>
                        @elseif($ajuan->status=='ditolak' && $ajuan->alasan_ditolak!='-')
                        <td width="" align="center"><a href="./alasan_ajuan_ditolak/{{$ajuan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Edit Alasan Ditolak</i></a></td>
                        @else
                        <td></td>
                        @endif
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
    @elseif(Session::get('role')=='masyarakat')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>Username</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Paroki</th>
                        <th>Alamat</th>
                        <th>Bukti KTP</th>
                        <th>Status</th>
                        <th>Alasan Ditolak</th>
                    </thead>
                  <tbody>
                    @foreach($pengajuan_umat as $ajuan)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$ajuan->username}}</td>
                        <td width="">{{$ajuan->nik}}</td>
                        <td width="">{{$ajuan->nama}}</td>
                        <td width="">{{$ajuan->tempat_lahir}}</td>
                        <td width="">{{$ajuan->tanggal_lahir}}</td>
                        <td width="">{{$ajuan->jenis_kelamin}}</td>
                        <td width="">{{$ajuan->nama_paroki}}</td>
                        <td width="">{{$ajuan->alamat}}</td>
                        <td width="" align="center">
                          <details>
                          <summary><b>Lihat ...</b></summary>
                            <embed 
                              type="application/pdf"
                              src="./asset/u_file/file/{{$ajuan->bukti_ktp}}"
                              width="500"
                              height="300"
                            >
                            </embed >
                          </details>
                        </td>
                        @if($ajuan->status=='disetujui')
                        <td width="" align="center"><span class="badge badge-success">{{$ajuan->status}}</span></td>
                        @elseif($ajuan->status=='ditolak')
                        <td width="" align="center"><span class="badge badge-danger">{{$ajuan->status}}</span></td>
                        @elseif($ajuan->status=='none')
                        <td width="" align="center"><span class="badge badge-warning">{{$ajuan->status}}</span></td>
                        @endif
                        @if($ajuan->status=='ditolak' && $ajuan->alasan_ditolak!='-')
                        <td width="">
                        <details>
                          <summary><b>Alasan ...</b></summary>
                          <p style="width:10px"><?php echo $ajuan->alasan_ditolak;?></p>
                        </details>
                        </td>
                        @else
                        <td></td>
                        @endif
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
    @endif
  </div>
@endsection