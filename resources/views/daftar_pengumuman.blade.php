@extends('layout/main_daftar_pengumuman')

@section('title', 'Daftar Pengumuman')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Daftar Pengumuman</a></li> -->
              <li class="breadcrumb-item active">Daftar Pengumuman</li>
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
            </form><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead align="center">
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Foto Pendukung</th>
                        <th colspan="2">action</th>
                    </thead>
                  <tbody>
                    @foreach($pengumuman as $pengumuman)
                    <tr>
                        <td width="" scope="row">{{ $loop->iteration }}</td>
                        <td width="">{{$pengumuman->kategori_pengumuman}}</td>
                        <td width="">{{$pengumuman->judul_pengumuman}}</td>
                        <td width=""><?php //echo substr($pengumuman->isi_pengumuman,0,50);?>
                        <details>
                          <summary><b>Isi ...</b></summary>
                          <p style="width:10px"><?php echo $pengumuman->isi_pengumuman;?></p>
                        </details>
                        </td>
                        <td width="" align="center">
                            <img height="65px" width="65px" src="./asset/u_file/image/{{$pengumuman->foto_pendukung}}">
                        </td>
                        <td width="" align="center"><a href="./edit_pengumuman/{{$pengumuman->id}}" class="btn btn-info btn-sm "><i class="fas fa-pencil-alt"></i> Edit</a></td>
                        <td width="" align="center"><a href="./delete_pengumuman/{{$pengumuman->id}}" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Hapus</a></td>
                        <!-- <td width="50px"><a href="./delete/{{$pengumuman->id}}" style="color:red; text-decoration: none;">delete</a></td> -->
                    </tr>
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

<!-- <h2>Read More Read Less Button</h2>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#more {display: none;}
</style>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script> -->