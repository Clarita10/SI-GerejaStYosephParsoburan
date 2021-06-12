@extends('layout/main_aula')

@section('title', 'Aula')

@section('container')
            <div class="aula">
            @foreach($aula as $aula)
                <!-- <center>
                <table class="info">
                    <tr>
                        <td>
                            <img height="230px" width="400px" class="logo" src="./asset/image/{{$aula->gambar}}">
                        </td>
                        <td valign="top">
                            <text>{{$aula->nama}}</text><br><br>
                            <text style="font-size:40px">{{$aula->harga}}</text>
                        </td>
                    </tr>
                </table><br>

                <table class="informasi">
                    <tr>
                        <td>
                            <h3>Informasi</h3><br>
                            <p><?php //echo $aula->informasi;?></p>
                        </td>
                    </tr>
                </table>
                </center> -->


                <!-- <center>
                <table class="info_a">
                    <tr>
                        <td>
                            <img height="230px" width="400px" class="logo" src="./asset/image/aula_1.jpeg">
                        </td>
                        <td valign="top">
                            <text>Aula Gereja Paroki St.Yoseph Parsoburan</text><br><br>
                            <text style="font-size:40px">Rp. 1.500.000,00</text>
                        </td>
                    </tr>
                </table><br>

                <table class="informasi_a">
                    <tr>
                        <td>
                            <h3>Informasi</h3><br>
                            <p>
                                Perlu diketahui, bahwa aula yang akan dipesan merupakan aula gereja St.Yosep Parsoburan.
                                Aula ini dapat dipesan perharinya dengan harga yang sudah ditentukan diatas.
                                Aula ini dapat dipesan untuk berbagai acara. Misalnya untuk acara pernikahan, adat, dan sebagainya.
                                Namun aula ini tidak diperuntukkan untuk acara partai.<br><br>

                                Untuk memesan aula dibutuhkan persetujuan dari Pastor Paroki.
                                Sehingga pemesanan aula membutuhkan waktu 1-2 hari untuk memproses pemesanan.
                                Untuk itu diharapkan anda memesan aula setidaknya 1 minggu sebelum hari aula dibutuhkan.
                            </p>
                        </td>
                    </tr>
                </table>
                </center> -->
                <div class="slideshow-container2">
                    <div class="mySlides2 fade2">
                        <div class="numbertext2">1 / 5</div>
                        <img class="logo" src="./asset/image/aula_1.jpg" style="width:100%; height:540px">
                        <!-- <div class="text2" style="color:black"></div> -->
                    </div>
                    <div class="mySlides2 fade2">
                        <div class="numbertext2">2 / 5</div>
                        <img class="logo" src="./asset/image/aula_2.jpeg" style="width:100%; height:540px">
                        <!-- <div class="text2" style="color:black"></div> -->
                    </div>
                    <div class="mySlides2 fade2">
                        <div class="numbertext2">3 / 5</div>
                        <img class="logo" src="./asset/image/aula_3.jpeg" style="width:100%; height:540px">
                        <!-- <div class="text2" style="color:black"></div> -->
                    </div>
                    <div class="mySlides2 fade2">
                        <div class="numbertext2">4 / 5</div>
                        <img class="logo" src="./asset/image/aula_4.jpg" style="width:100%; height:540px">
                        <!-- <div class="text2" style="color:black"></div> -->
                    </div>
                    <div class="mySlides2 fade2">
                        <div class="numbertext2">5 / 5</div>
                        <img class="logo" src="./asset/image/aula_5.jpeg" style="width:100%; height:540px">
                        <!-- <div class="text2" style="color:black"></div> -->
                    </div>
                    <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
                    <a class="next2" onclick="plusSlides2(1)">&#10095;</a>
                </div>
                <br>

                <!-- <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                </div> -->
                <script>
                    var slideIndex = 1;
                    showSlides2(slideIndex);

                    function plusSlides2(n) {
                        showSlides2(slideIndex += n);
                    }

                    function currentSlide2(n) {
                        showSlides2(slideIndex = n);
                    }

                    function showSlides2(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides2");
                        var dots = document.getElementsByClassName("dot2");
                        if (n > slides.length) {slideIndex = 1}    
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active2", "");
                        }
                        slides[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " active2";
                    }
                </script>
                <!-- <div class="aula_image" align="center">
                    <img class="logo" src="./asset/image/aula_1.jpeg">
                </div> -->
                <div align="center">
                    <tex style="font-size:30px"><b>Aula Gereja Paroki St.Yoseph Parsoburan</b></text>
                    <!-- <text style="font-size:40px">Rp. 1.500.000,00/hari</text> -->
                </div><br>
                <div class="aula_info">
                    <h3>Informasi</h3><br>
                    <p>
                        <!-- Perlu diketahui, bahwa aula yang akan dipesan merupakan aula gereja St.Yosep Parsoburan.
                        Aula ini dapat dipesan perharinya dengan harga yang sudah ditentukan diatas.
                        Aula ini dapat dipesan untuk berbagai acara. Misalnya untuk acara pernikahan, adat, dan sebagainya.
                        Namun aula ini tidak diperuntukkan untuk acara partai.<br><br>

                        Untuk memesan aula dibutuhkan persetujuan dari Pastor Paroki.
                        Sehingga pemesanan aula membutuhkan waktu 1-2 hari untuk memproses pemesanan.
                        Untuk itu diharapkan anda memesan aula setidaknya 1 minggu sebelum hari aula dibutuhkan. -->

                        Perlu diketahui, bahwa Gereja Katolik St. Yoseph Parsoburan memiliki
                        fasilitas aula yang dapat dipesan. Aula ini dapat dipesan perharinya 
                        dengan harga 1.500.000,00/hari. Aula ini dapat dipesan untuk berbagai 
                        acara. Misalnya untuk acara pernikahan, adat, dan sebagainya. Namun 
                        aula ini tidak diperuntukkan untuk acara partai.<br><br>

                        Untuk memesan aula dibutuhkan persetujuan dari Pastor Paroki. 
                        Sehingga pemesanan aula membutuhkan waktu 1-2 hari untuk memproses 
                        pemesanan. Untuk itu diharapkan anda memesan aula setidaknya 1 minggu 
                        sebelum hari aula dibutuhkan.
                    </p>
                </div>
                

                <!-- <div class="info">
                    <div class="gambar">
                        <img height="200px" width="300px" class="logo" src="./asset/image/{{$aula->gambar}}">
                    </div>
                    <div class="nama_harga">
                        <text>[{{$aula->nama}}]</text><br>
                        <text>{{$aula->harga}}</text><br><br>
                    </div>
                </div>
                <div class="informasi">
                  <h3>Informasi</h3><br>
                  <p><?php //echo $aula->informasi;?></p>
                </div> -->
            @endforeach
            </div>

            @if(Session::get('role')=='masyarakat' || Session::get('role')=='umat')
            <a href="./pemesanan_aula" >
                <!-- <button style="color: white; background-color:#EFAA52; margin-right:60px; 
                border-radius: 20px; padding:10px; border: 2px solid black; float:right">
                PESAN AULA
                </button> -->
                <button style="color: white; background-color:#EFAA52; margin-right:60px; 
                border-radius: 20px; padding:10px; border: 2px solid black; float:right; cursor: pointer;">
                PESAN AULA
                </button>
            </a>
            @elseif(Session::get('role')=='pastor' || Session::get('role')=='sekretariat' || Session::get('role')=='dpph')
            <!-- <a href="./login" >
                <button style="color: white; background-color:blue; margin-right:60px; 
                border-radius: 20px; padding:10px; border: 2px solid black; float:right">
                PESAN AULA
                </button>
            </a> -->
            @elseif(empty(Session::get('role')))
            <a href="./login" >
                <!-- <button style="color: white; background-color:#EFAA52; margin-right:60px; 
                border-radius: 20px; padding:10px; border: 2px solid black; float:right">
                PESAN AULA
                </button> -->
                <button style="color: white; background-color:#EFAA52; margin-right:60px; 
                border-radius: 20px; padding:10px; border: 2px solid black; float:right; cursor: pointer;">
                PESAN AULA
                </button>
            </a>
            @endif
        
@endsection


