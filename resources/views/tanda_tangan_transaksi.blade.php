@extends('layout/main_tanda_tangan_transaksi')

@section('title', 'Tanda Tangan Transaksi')

@section('container')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tanda Tangan Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tanda Tangan Transaksi</a></li> -->
              <li class="breadcrumb-item active">Tanda Tangan Transaksi</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @if(Session::get('role')=='pastor')
    @foreach($tanda_tangan_transaksi as $tanda_tangan)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostTandaTanganTransaksi" method="post" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" value="{{$tanda_tangan->id}}" hidden></input>
                <div class="card-body">
                <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Nama Pastor</label>
                    <div class="col-6">
                        @if($tanda_tangan->nama_pastor=='-')
                        <input type="text" name="nama_pastor" class="form-control" required>
                        @elseif($tanda_tangan->nama_pastor!='-')
                        <input type="text" name="nama_pastor" class="form-control" value="{{$tanda_tangan->nama_pastor}}"required>
                        @endif
                    </div>
                  </div>
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Tanda Tangan Pastor</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="tanda_tangan_pastor" class="custom-file-input" accept="image/*" required>
                        <label class="custom-file-label">Choose File</label>
                      </div>
                    </div>
                    <text class="col-sm-9">
                      <text style="color:red">Saran Ukuran Foto yang digunakan </text><text style="color:blue">( 1 x 1 )</text>
                    </text>
                  </div>
                  @if($tanda_tangan->tanda_tangan_pastor=='-')
                  @elseif($tanda_tangan->tanda_tangan_pastor!='-')
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Tanda Tangan Pastor Sebelumnya</label>
                    <div class="col-6">
                      <div class="">
                      <center>
                        <img height="100px" width="100px" src="../asset/u_file/image/{{$tanda_tangan->tanda_tangan_pastor}}">
                      </center>
                      </div>
                    </div>
                  </div>
                  @endif
                </div>
                <div class="card-footer">
                  <button name="bukti_p" type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
                </div>

            </div>
            </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
    @endforeach

    @endif
  </div>

@endsection
