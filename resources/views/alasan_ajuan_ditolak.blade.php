@extends('layout/main_alasan_ajuan_ditolak')

@section('title', 'Alasan Ajuan Ditolak')

@section('container')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Alasan Ajuan Ditolak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Tanda Tangan Transaksi</a></li> -->
              <li class="breadcrumb-item active">Alasan Ajuan Ditolak</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @if(Session::get('role')=='sekretariat')
    @foreach($alasan_ajuan_ditolak as $alasan)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostAlasanAjuanDitolak" method="post" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" value="{{$alasan->id}}" hidden></input>
                <div class="card-body">
                <div class="row form-group">
                    <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Alasan Menolak</label>
                    <div class="col-6">
                        @if($alasan->alasan_ditolak=='-')
                        <textarea name="alasan_ditolak" placeholder="Place some text here"
                        style="width: 100%; height: 100px; font-size: 14px;" required></textarea>
                        @elseif($alasan->alasan_ditolak!='-')
                        <textarea name="alasan_ditolak"
                        style="width: 100%; height: 100px; font-size: 14px;" required>{{$alasan->alasan_ditolak}}</textarea>
                        @endif
                    </div>
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
