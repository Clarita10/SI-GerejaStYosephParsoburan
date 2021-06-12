@extends('layout/main_daftar_pemesanan_aula')

@section('title', 'Daftar Pemesanan Aula')

@section('container')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Pemesanan Aula</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Pemesanan Aula</a></li> -->
              <li class="breadcrumb-item active">Daftar Pemesanan Aula</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @if(Session::get('role')=='pastor')
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
                        <th>Nama Lengkap</th>
                        <th>No. Telepon</th>
                        <th>Keperluan</th>
                        <th>Tanggal Mulai Pemakaian</th>
                        <th>Tanggal Selesai Pemakaian</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tanda Tangan</th>
                    </thead>
                  <tbody>
                    @foreach($pemesanan_aula as $pesanan)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$pesanan->username}}</td>
                        <td width="">{{$pesanan->nama}}</td>
                        <td width="">{{$pesanan->no_telepon}}</td>
                        <td width="">{{$pesanan->keperluan}}</td>
                        <td width="">{{$pesanan->tanggal_mulai}}</td>
                        <td width="">{{$pesanan->tanggal_selesai}}</td>
                        @if($pesanan->status=='disetujui')
                        <td width="" align="center"><span class="badge badge-success">{{$pesanan->status}}</span></td>
                        @elseif($pesanan->status=='ditolak')
                        <td width="" align="center"><span class="badge badge-danger">{{$pesanan->status}}</span></td>
                        @elseif($pesanan->status=='none')
                        <td width="" align="center"><span class="badge badge-warning">{{$pesanan->status}}</span></td>
                        @endif
                        <td width=""><a href="./setujui_pesanan/{{$pesanan->id}}" class="btn btn-success btn-sm "><i class="fas fa-thumbs-up"></i></a></td>
                        <td width=""><a href="./tolak_pesanan/{{$pesanan->id}}" class="btn btn-danger btn-sm "><i class="fas fa-thumbs-down"></i></a></td>
                        @if($pesanan->status=='ditolak' && $pesanan->alasan_ditolak=='-')
                        <td width="" align="center"><a href="./alasan_ditolak/{{$pesanan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Isi Alasan Ditolak</i></a></td>
                        @elseif($pesanan->status=='ditolak' && $pesanan->alasan_ditolak!='-')
                        <td width="" align="center"><a href="./alasan_ditolak/{{$pesanan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Edit Alasan Ditolak</i></a></td>
                        @else
                        <td></td>
                        @endif
                        @if($pesanan->status=='disetujui' && $pesanan->bukti_pembayaran=='-')
                        <td></td>
                        @elseif($pesanan->status=='disetujui' && $pesanan->bukti_pembayaran!='-')
                        <td width="" align="center"><a href="./bukti_pembayaran/{{$pesanan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Lihat Bukti Pembayaran</i></a></td>
                        @else
                        <td></td>
                        @endif
                        @if($pesanan->status=='disetujui' && $pesanan->nama_pastor=='-' && $pesanan->tanda_tangan_pastor=='-')
                        <td width="" align="center"><a href="./tanda_tangan_transaksi/{{$pesanan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Tanda Tangani Transaksi</i></a></td>
                        @elseif($pesanan->status=='disetujui' && $pesanan->nama_pastor!='-' && $pesanan->tanda_tangan_pastor!='-')
                        <td width="" align="center"><a href="./tanda_tangan_transaksi/{{$pesanan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Edit Tanda Tangan Transaksi</i></a></td>
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
    @elseif(Session::get('role')=='masyarakat' || Session::get('role')=='umat')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <!-- <form role="form-horizontal" id="quickForm">
                  <div class="card-body">
                  <form action="./user" method="GET">
                  <input class="input_cari" type="text" name="cari" placeholder="Cari..." value="{{ old('cari') }}" autofocus>
                  <button class="btn_cari" type="submit"><i class="fas fa-search"></i></button>
              </form><br> -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 475px;">
                <table class="table table-head-fixed text-nowrap">
                <thead align="center">
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>No. Telepon</th>
                        <th>Keperluan</th>
                        <th>Tanggal Mulai Pemakaian</th>
                        <th>Tanggal Selesai Pemakaian</th>
                        <th>Status</th>
                        <th>Alasan Ditolak</th>
                        <th>Transaksi Pemesanan Aula</th>
                        <th>Bukti Pembayaran</th>
                    </thead>
                  <tbody>
                    @foreach($pesanan_aula as $pesanan)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$pesanan->username}}</td>
                        <td width="">{{$pesanan->nama}}</td>
                        <td width="">{{$pesanan->no_telepon}}</td>
                        <td width="">{{$pesanan->keperluan}}</td>
                        <td width="">{{$pesanan->tanggal_mulai}}</td>
                        <td width="">{{$pesanan->tanggal_selesai}}</td>
                        @if($pesanan->status=='disetujui')
                        <td width="" align="center"><span class="badge badge-success">{{$pesanan->status}}</span></td>
                        @elseif($pesanan->status=='ditolak')
                        <td width="" align="center"><span class="badge badge-danger">{{$pesanan->status}}</span></td>
                        @elseif($pesanan->status=='none')
                        <td width="" align="center"><span class="badge badge-warning">{{$pesanan->status}}</span></td>
                        @endif
                        @if($pesanan->status=='ditolak' && $pesanan->alasan_ditolak!='-')
                        <td width="">
                        <details>
                          <summary><b>Alasan ...</b></summary>
                          <p style="width:10px"><?php echo $pesanan->alasan_ditolak;?></p>
                        </details>
                        </td>
                        @else
                        <td></td>
                        @endif
                        @if($pesanan->status=='disetujui')
                        <td width="" align="center"><a href="./pemesanan_aula/transaksi_pemesanan_aula/{{$pesanan->id}}" class="btn btn-danger btn-sm "><i class="fas fa-file"></i> Download PDF</i></a></td>
                        @else
                        <td></td>
                        @endif
                        @if($pesanan->status=='disetujui' && $pesanan->bukti_pembayaran=='-')
                        <td width="" align="center"><a href="./bukti_pembayaran/{{$pesanan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Kirim Bukti Pembayaran</i></a></td>
                        @elseif($pesanan->status=='disetujui' && $pesanan->bukti_pembayaran!='-')
                        <td width="" align="center"><a href="./bukti_pembayaran/{{$pesanan->id}}" class="btn btn-info btn-sm "><i class="fas fa-file"></i> Edit Bukti Pembayaran</i></a></td>
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
    @elseif(Session::get('role')=='sekretariat')
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
                        <th>Nama Lengkap</th>
                        <th>No. Telepon</th>
                        <th>Keperluan</th>
                        <th>Tanggal Mulai Pemakaian</th>
                        <th>Tanggal Selesai Pemakaian</th>
                        <th>Status</th>
                        <th>Alasan Ditolak</th>
                        <th>Transaksi Pemesanan Aula</th>
                    </thead>
                  <tbody>
                    @foreach($pemesanan_aula as $pesanan)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$pesanan->username}}</td>
                        <td width="">{{$pesanan->nama}}</td>
                        <td width="">{{$pesanan->no_telepon}}</td>
                        <td width="">{{$pesanan->keperluan}}</td>
                        <td width="">{{$pesanan->tanggal_mulai}}</td>
                        <td width="">{{$pesanan->tanggal_selesai}}</td>
                        @if($pesanan->status=='disetujui')
                        <td width="" align="center"><span class="badge badge-success">{{$pesanan->status}}</span></td>
                        @elseif($pesanan->status=='ditolak')
                        <td width="" align="center"><span class="badge badge-danger">{{$pesanan->status}}</span></td>
                        @elseif($pesanan->status=='none')
                        <td width="" align="center"><span class="badge badge-warning">{{$pesanan->status}}</span></td>
                        @endif
                        @if($pesanan->status=='ditolak' && $pesanan->alasan_ditolak!='-')
                        <td width="">
                        <details>
                          <summary><b>Alasan ...</b></summary>
                          <p style="width:10px"><?php echo $pesanan->alasan_ditolak;?></p>
                        </details>
                        </td>
                        @else
                        <td></td>
                        @endif
                        @if($pesanan->status=='disetujui' && $pesanan->nama_pastor!='-' && $pesanan->tanda_tangan_pastor!='-')
                        <td width="" align="center"><a href="./pemesanan_aula/transaksi_pemesanan_aula/{{$pesanan->id}}" class="btn btn-danger btn-sm "><i class="fas fa-file"></i> Download PDF</i></a></td>
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