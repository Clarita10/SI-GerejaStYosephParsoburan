@extends('layout/main')

@section('title', 'Gereja Katolik Santo Yoseph Parsoburan - Home')

@section('container')

<div class="slideshow-container">
  @foreach($slideshow as $slideshow)
  <div class="mySlides fade">
    <div class="numbertext">{{$loop->iteration}}  / 4</div>
    <img src="./asset/image/{{$slideshow->gambar}}" style="width:100%; height:540px"><!-- height:100%; height:600px; height:540px -->
    <div class="c_text">
      <div class="text">{{$slideshow->caption}}</div>
    </div>
  </div>
  @endforeach
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active1", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active1";
  }
</script>




<!-- <center>
<div id=slidercontainer>
  <div id=css3slider>
    <img src="./asset/image/background1.png" alt="Square-tailed kite">
  </div>
  <div id=css3slider>
    <img src="./asset/image/background1.png" alt="White-tailed kite">
  </div>
  <div id=css3slider>
    <img src="./asset/image/background1.png" alt="Hawk" title="Hawk">
  </div>
  <div id=css3slider>
    <img src="./asset/image/background1.png" alt="Osprey">
  </div>
</div>
</center> -->

    <div class="petugas" align="center">
      <div class="petugas_t" align="center">
      @foreach($petugas as $petugas)
        @if($loop->iteration%2==1)
        <table class="petugas_t_gan">
          <tr>
            <td align="center"><img src="./asset/u_file/image/{{$petugas->foto}}"></td>
          </tr>
          <tr>
            <td align="center" width="200px" class="nama_petugas"><a>{{$petugas->nama}}</a></td> <!--width="165px"-->
          </tr>
        </table>
        @endif

        @if($loop->iteration%2==0)
        <table class="petugas_t_gen">
          <tr>
            <td align="center"><img src="./asset/u_file/image/{{$petugas->foto}}"></td>
          </tr>
          <tr>
            <td align="center" width="200px" class="nama_petugas"><a>{{$petugas->nama}}</a></td> <!--width="165px"-->
          </tr>
        </table>
        @endif
      @endforeach
      </div>
    </div><br><br>
    
    <div class="artikel" align="center">
      <div class="artikelvi" align="center">
        <div align="center"><text style="font-size:30px; color:544531; padding-left:20px">Video dan Berita Terkini</text></div><br>
        @foreach($artikel as $artikel)
          <table>
            @if($artikel->tipe=='video')
            <tr>
              <td align="center">
              <iframe width="280" height="210" src="https://www.youtube.com/embed/{{$artikel->kode_link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </td>
            </tr> 
            @endif
            @if($artikel->tipe=='informasi')
            <tr>
              <td align="center"><img width="280" height="210" src="./asset/u_file/image/{{$artikel->foto_pendukung}}"></td>
            </tr>  
            @endif
            <tr>
              <td align="center" width="280"><a href="{{$artikel->link}}" class="link_artikel">{{$artikel->caption}}</a></td>
            </tr>
          </table>
        @endforeach
      </div>
    </div><br><br>

    <div class="t_pengumuman" align="center">
      <div class="t_pengumuman_a" align="center">
      <div align="left"><text style="font-size:30px; color:544531; padding-left:20px">Pengumuman Terbaru</text></div><br>
      @foreach($pengumuman as $pengumuman)
      <a href="./detail_pengumuman/{{$pengumuman->id}}" class="link_a_pengumuman">
        <table>
          <tr>
            <td align="left" valign="bottom" width="240" height="180"
            style="
              background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(./asset/u_file/image/{{$pengumuman->foto_pendukung}});
              background-size: cover;
              background-position: center;">
              <text class="link_t_pengumuman">{{$pengumuman->judul_pengumuman}}</text>
            </td>
          </tr>
        </table>
      </a>
      @endforeach
      </div>
    </div><br><br>

    <div class="jadwal_kalender">
    @foreach($jadwal_petugas as $jadwal)
      @if($jadwal->tanggal==date('Y-m-d', strtotime('sunday', strtotime(date('Y-m-d')))))
        <?php date_default_timezone_set('Asia/Jakarta');?>
        <div class="jadwal_ibadah">
          <table>
            <tr>
              <td colspan="3" align="center"><text style="font-size:25px; color:544531">JADWAL IBADAH</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Hari/Tanggal</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text><?php echo date('D, d M Y', strtotime('sunday', strtotime(date('Y-m-d'))))?></text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Pukul</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>{{$jadwal->mulai}} - {{$jadwal->selesai}}</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Pemimpin Misa</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>{{$jadwal->pemimpin_misa}}</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Petugas</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>{{$jadwal->petugas}}</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Petugas Koor</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>{{$jadwal->petugas_koor}}</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Organ</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>{{$jadwal->organ}}</text></td>
            </tr>
          </table>
        </div>
      @endif
      @endforeach
      @if(empty($jadwal->tanggal))
        <?php date_default_timezone_set('Asia/Jakarta');?>
        <div class="jadwal_ibadah">
          <table>
            <tr>
              <td colspan="3" align="center"><text style="font-size:25px; color:544531">JADWAL IBADAH</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Hari/Tanggal</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text><?php echo date('D, d M Y', strtotime('sunday', strtotime(date('Y-m-d'))))?></text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Pukul</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>...</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Pemimpin Misa</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>...</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Petugas</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>...</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Petugas Koor</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>...</text></td>
            </tr>
            <tr>
              <td class="h_td_l"><text>Organ</text></td>
              <td align="center" width="10px"><text>:</text></td>
              <td><text>...</text></td>
            </tr>
          </table>
        </div>
      @endif

      @foreach($kalender_liturgi as $kalender)
        @if($kalender->tanggal)
          <?php date_default_timezone_set('Asia/Jakarta');?>
          <div class="kalender_liturgi">
            <table border="1">
              <tr>
                <td colspan="2"><text>Kalender Liturgi hari ini</text></td>
              </tr>
              <tr>
                <td rowspan="2"><b><text style="font-size:30px"><?php echo date('d')?></text></b></td>
                <td><text><b><?php echo date('M Y')?></b></text></td>
              </tr>
              <tr>
                <td><text><?php echo date('D')?></text></td>
              </tr>
              <tr>
                <td colspan="2" valign="center">
                  <b><text style="font-size:22.5px">{{$kalender->judul_hari}}</text></b><br><br><hr>
                  <text>{{$kalender->bacaan_1}}</text><br><hr>
                  <text>{{$kalender->mazmur}}</text><br><hr>
                  <text>{{$kalender->bacaan_2}}</text><br><hr>
                  <text>{{$kalender->injil}}</text><br><hr>
                  <text>{{$kalender->warna_liturgi}}</text><br><hr>
                </td>
              </tr>
            </table>
          </div>
        @endif
      @endforeach
      @if(empty($kalender->tanggal))
        <?php date_default_timezone_set('Asia/Jakarta');?>
        <div class="kalender_liturgi">
          <table border="1">
            <tr>
              <td colspan="2"><text>Kalender Liturgi hari ini</text></td>
            </tr>
            <tr>
              <td rowspan="2"><b><text style="font-size:30px"><?php echo date('d')?></text></b></td>
              <td><text><b><?php echo date('M Y')?></b></text></td>
            </tr>
            <tr>
              <td><text><?php echo date('D')?></text></td>
            </tr>
            <tr>
              <td colspan="2">
                <b><text style="font-size:22.5px">...</text></b><br><br><hr>
                <text>...</text><br><hr>
                <text>...</text><br><hr>
                <text>...</text><br><hr>
                <text>...</text><br><hr>
                <text>...</text><br><hr>
              </td>
            </tr>
          </table>
        </div>
      @endif
    </div>

    @foreach($jumlah_umat as $umat)
    <div class="jumlah_umat" align="right">
      <div class="a_jumlah_umat" align="center">
        <p><text>Jumlah Umat</text> <br> <text style="color: rgb(255, 252, 233);">{{$umat->jumlah_umat}}</text></p>
      </div>
    </div>
    @endforeach
    
    <!-- <div class="lokasi_jadwal">
      <div class="lokasi">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.3003462015845!2d99.34281785127203!3d2.308814407130262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302dfa8c4e364451%3A0xad72fa7565a52b1c!2sGereja%20Katolik%20St.%20Yoseph%20Parsoburan!5e0!3m2!1sid!2sid!4v1620120327064!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>  -->
        
<?php
// echo date('Y-M-D'), '<br>';
// echo date('m/d/y'), '<br>' ;
// echo date('Y/m/d')
?>




@endsection