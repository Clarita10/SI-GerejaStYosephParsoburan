@extends('layout/main_pengumuman')

@section('title', 'Daftar Pengumuman')

@section('container')

        <style>
            .pagination li{
                display:inline-block;
                list-style-type:none;
                margin:5px;
                font-size:23px;
            }
            .pagination li a{
                text-decoration: none;
            }
            .active{
              color:gray
            }
            .pagination li a:hover{
              color:gray
            }
        </style>
        <div class="pengumuman" align="center">
          <div class="pengumuman_a">
            <form action="./pengumuman" method="GET" style="margin-left:50px; float:right">
                <input class="input_cari" type="text" name="cari" placeholder="Cari..." value="{{ old('cari') }}" autofocus>
                <button class="btn_cari" type="submit" style="background-color: #dddddd;">
                  <i class="fas fa-search"></i>cari
                </button>
              </form><br><br>
              <table>
              <h1 align="left">PENGUMUMAN</h1><br>
                <thead align="left">
                    <td>Pengumuman</td>
                    <td>Kategori</td>
                    <td class="tanggal">Tanggal</td>
                </thead>
                @foreach($Pengumuman as $pengumuman)
                <tr>
                  <td>
                    <a href="./detail_pengumuman/{{$pengumuman->id}}">
                      {{$pengumuman->judul_pengumuman}}
                    </a>
                  </td>
                  <td>{{$pengumuman->kategori_pengumuman}}</td>
                  <td class="tanggal">{{$pengumuman->tanggal}}</td>
                </tr>
                @endforeach
              </table>
              <!-- <form action="./pengumuman" method="GET" style="margin-left:50px">
                <input class="input_cari" type="text" name="cari" placeholder="Cari..." value="{{ old('cari') }}" autofocus>
                <button class="btn_cari" type="submit" style="background-color: #dddddd;">
                  <i class="fas fa-search"></i>cari
                </button>
              </form><br><br>
            <h1 align="center" style="color:8F7655">PENGUMUMAN</h1>
            @foreach($Pengumuman as $pengumuman)
            <table align="center">
              <tr>
                <td class="gambar_pengumuman">
                  <img src="./asset/u_file/image/{{$pengumuman->foto_pendukung}}">
                </td>
                <td class="info_pengumuman" valign="top">
                  <text style="color:	8F7655"><b>[{{$pengumuman->kategori_pengumuman}}]</b></text>
                  <a href="./detail_pengumuman/{{$pengumuman->id}}">
                    <text>{{$pengumuman->judul_pengumuman}}</text>
                  </a><br><br>
                  <text style="font-size:15px; color:808080">{{$pengumuman->tanggal}}</text>
                </td>
              </tr>
            </table><br>
            @endforeach -->
            <center>{{$Pengumuman->links()}}</center>
          </div>
        </div>
@endsection