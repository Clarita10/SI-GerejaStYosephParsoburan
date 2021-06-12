@extends('layout/main_bukti_pembayaran')

@section('title', 'Bukti Pembayaran')

@section('container')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bukti Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Bukti Pembayaran</a></li> -->
              <li class="breadcrumb-item active">Bukti Pembayaran</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @if(Session::get('role')=='masyarakat' || Session::get('role')=='umat')
    @foreach($bukti_pembayaran as $bukti)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form action="../PostBuktiPembayaran" method="post" enctype="multipart/form-data">
              @csrf
                <input type="text" name="id" value="{{$bukti->id}}" hidden></input>
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label"><text style="color:red">* </text>Bukti Pembayaran</label>
                    <div class="input-group col-6">
                      <div class="custom-file">
                        <input type="file" name="bukti_pembayaran" class="custom-file-input" accept="image/*" required>
                        <label class="custom-file-label">Choose File</label>
                      </div>
                    </div>
                  </div>
                  @if($bukti->bukti_pembayaran=='-')
                  @elseif($bukti->bukti_pembayaran!='-')
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Bukti Pembayaran Sebelumnya</label>
                    <div class="col-6">
                      <div class="">
                      <center>
                        <img height="340px" width="340px" src="../asset/u_file/image/{{$bukti->bukti_pembayaran}}">
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
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>
    @endforeach

    @elseif(Session::get('role')=='pastor')
    @foreach($bukti_pembayaran as $bukti)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-body">
                  <div class="row form-group">
                    <label class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                    <div class="col-6">
                      <div class="">
                      <center>
                        <img height="450px" width="450px" src="../asset/u_file/image/{{$bukti->bukti_pembayaran}}">
                      </center>
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
    @endforeach

    @endif
  </div>

@endsection
