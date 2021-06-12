@extends('layout/main_detail_pengumuman')

@section('title', 'Pengumuman')

@section('container')
        <div class="d_pengumuman">
            @foreach($detail_pengumuman as $pengumuman)
              @if($pengumuman->foto_pendukung=='empty.png')
              @else
              <div class="img_pengumuman" align="center">
                <img class="logo" src="../asset/u_file/image/{{$pengumuman->foto_pendukung}}">
              </div>
              @endif
              <div class="isi_pengumuman">
                <div class="kategori_judul">
                  <text><b>[{{$pengumuman->kategori_pengumuman}}]</b></text>
                  <text>{{$pengumuman->judul_pengumuman}}</text><br><br>
                </div>
                <div class="isi">
                  <p><?php echo $pengumuman->isi_pengumuman;?></p><br><hr><br>
                </div>
                <text style="font-size:14px"><b>{{$pengumuman->tanggal}}</b></text>
              </div>
            @endforeach
          </table>
        </div>
@endsection