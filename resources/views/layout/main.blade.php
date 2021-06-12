@if(Session::get('role'))

<html>
    <head>
        <link href="{{ URL::asset('asset/css/style.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ URL::asset('asset/image/logo.png') }}">
        <title>@yield('title')</title>
    </head>
    <body>
    @if(Session::get('role')=='masyarakat')
    <div class="header">
            <div class="d_logo">
                <img class="logo" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
                <header class="name"><b>GEREJA St.YOSEPH Parsoburan</b></header>
            </div>
            <!-- <center><hr style="width:750px; border-color:gray; border-top-width:0"></center> -->
            
            <label class="btn" for="toggle" onclick="myFunction(this)">
                <div class="container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <script>
                    function myFunction(x) {
                    x.classList.toggle("change");
                    }
                </script>
            </label>
            <input id="toggle" type="checkbox" />
            <nav>
                <div class="H H_L" align="center">  
                    <ul style="border-bottom: 1px solid black;">
                        <li>
                            <a href="#">BERANDA</a>
                        </li>
                    </ul>
                    <!-- <ul>
                        <li><a href="./profil">PROFIL</a></li>
                    </ul> -->
                    <ul>
                        <li class="l_dropdown"><a href="#">PROFIL &#x25BE;</a>
                            <ul class="l_isi-dropdown">
                                <li><a href="./pastor_paroki">Pastor</a></li>
                                <li><a href="./sejarah">Sejarah</a></li>
                                <li><a href="./stasi">Stasi</a></li>
                                <li><a href="./visi_misi">Visi dan Misi</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="./kerasulan">KERASULAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./pengumuman">PENGUMUMAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./aula">AULA</a></li>
                    </ul>
                </div>
                

                <div class="H H_R">
                <ul>
                    <li class="r_dropdown"><b><a class="r_li_u">{{Session::get('username')}} &#x25BE;</a></b>
                        <ul class="r_isi-dropdown">
                            <!-- <li style="margin-top:20px;"><a href="./profil/{{Session::get('username')}}">| EDIT PROFIL</a></li> -->
                            <li><a href="./logout">| LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="./dashboard" >
                            <button style="color: white; background-color:orange; 
                            border-radius: 10px; padding:10px; margin-top:-5;border: 2px solid black">DASHBOARD
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
        
        @elseif(Session::get('role')=='umat')
        <div class="header">
            <div class="d_logo">
                <img class="logo" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
                <header class="name"><b>GEREJA St.YOSEPH Parsoburan</b></header>
            </div>
            <!-- <center><hr style="width:750px; border-color:gray; border-top-width:0"></center> -->
            
            <label class="btn" for="toggle" onclick="myFunction(this)">
                <div class="container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <script>
                    function myFunction(x) {
                    x.classList.toggle("change");
                    }
                </script>
            </label>
            <input id="toggle" type="checkbox" />
            <nav>
                <div class="H H_L" align="center">  
                    <ul style="border-bottom: 1px solid black;">
                        <li>
                            <a href="#">BERANDA</a>
                        </li>
                    </ul>
                    <!-- <ul>
                        <li><a href="./profil">PROFIL</a></li>
                    </ul> -->
                    <ul>
                        <li class="l_dropdown"><a href="#">PROFIL &#x25BE;</a>
                            <ul class="l_isi-dropdown">
                                <li><a href="./pastor_paroki">Pastor</a></li>
                                <li><a href="./sejarah">Sejarah</a></li>
                                <li><a href="./stasi">Stasi</a></li>
                                <li><a href="./visi_misi">Visi dan Misi</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="./kerasulan">KERASULAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./pengumuman">PENGUMUMAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./aula">AULA</a></li>
                    </ul>
                </div>
                

                <div class="H H_R">
                <ul>
                    <li class="r_dropdown"><b><a class="r_li_u">{{Session::get('username')}} &#x25BE;</a></b>
                        <ul class="r_isi-dropdown">
                            <!-- <li style="margin-top:20px;"><a href="./profil/{{Session::get('username')}}">| EDIT PROFIL</a></li> -->
                            <li><a href="./logout">| LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="./dashboard" >
                            <button style="color: white; background-color:orange; 
                            border-radius: 10px; padding:10px; margin-top:-5;border: 2px solid black">DASHBOARD
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>

        @elseif(Session::get('role')=='pastor')
        <div class="header">
            <div class="d_logo">
                <img class="logo" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
                <header class="name"><b>GEREJA St.YOSEPH Parsoburan</b></header>
            </div>
            <!-- <center><hr style="width:750px; border-color:gray; border-top-width:0"></center> -->
            
            <label class="btn" for="toggle" onclick="myFunction(this)">
                <div class="container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <script>
                    function myFunction(x) {
                    x.classList.toggle("change");
                    }
                </script>
            </label>
            <input id="toggle" type="checkbox" />
            <nav>
                <div class="H H_L" align="center">  
                    <ul style="border-bottom: 1px solid black;">
                        <li>
                            <a href="#">BERANDA</a>
                        </li>
                    </ul>
                    <!-- <ul>
                        <li><a href="./profil">PROFIL</a></li>
                    </ul> -->
                    <ul>
                        <li class="l_dropdown"><a href="#">PROFIL &#x25BE;</a>
                            <ul class="l_isi-dropdown">
                                <li><a href="./pastor_paroki">Pastor</a></li>
                                <li><a href="./sejarah">Sejarah</a></li>
                                <li><a href="./stasi">Stasi</a></li>
                                <li><a href="./visi_misi">Visi dan Misi</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="./kerasulan">KERASULAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./pengumuman">PENGUMUMAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./aula">AULA</a></li>
                    </ul>
                </div>
                

                <div class="H H_R">
                <ul>
                    <li class="r_dropdown"><b><a class="r_li_u">{{Session::get('username')}} &#x25BE;</a></b>
                        <ul class="r_isi-dropdown">
                            <!-- <li style="margin-top:20px;"><a href="./profil/{{Session::get('username')}}">| EDIT PROFIL</a></li> -->
                            <li><a href="./logout">| LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="./dashboard" >
                            <button style="color: white; background-color:orange; 
                            border-radius: 10px; padding:10px; margin-top:-5;border: 2px solid black">DASHBOARD
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>

        @elseif(Session::get('role')=='sekretariat')
        <div class="header">
            <div class="d_logo">
                <img class="logo" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
                <header class="name"><b>GEREJA St.YOSEPH Parsoburan</b></header>
            </div>
            <!-- <center><hr style="width:750px; border-color:gray; border-top-width:0"></center> -->
            
            <label class="btn" for="toggle" onclick="myFunction(this)">
                <div class="container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <script>
                    function myFunction(x) {
                    x.classList.toggle("change");
                    }
                </script>
            </label>
            <input id="toggle" type="checkbox" />
            <nav>
                <div class="H H_L" align="center">  
                    <ul style="border-bottom: 1px solid black;">
                        <li>
                            <a href="#">BERANDA</a>
                        </li>
                    </ul>
                    <!-- <ul>
                        <li><a href="./profil">PROFIL</a></li>
                    </ul> -->
                    <ul>
                        <li class="l_dropdown"><a href="#">PROFIL &#x25BE;</a>
                            <ul class="l_isi-dropdown">
                                <li><a href="./pastor_paroki">Pastor</a></li>
                                <li><a href="./sejarah">Sejarah</a></li>
                                <li><a href="./stasi">Stasi</a></li>
                                <li><a href="./visi_misi">Visi dan Misi</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="./kerasulan">KERASULAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./pengumuman">PENGUMUMAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./aula">AULA</a></li>
                    </ul>
                </div>
                

                <div class="H H_R">
                <ul>
                    <li class="r_dropdown"><b><a class="r_li_u">{{Session::get('username')}} &#x25BE;</a></b>
                        <ul class="r_isi-dropdown">
                            <!-- <li style="margin-top:20px;"><a href="./profil/{{Session::get('username')}}">| EDIT PROFIL</a></li> -->
                            <li><a href="./logout">| LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="./dashboard" >
                            <button style="color: white; background-color:orange; 
                            border-radius: 10px; padding:10px; margin-top:-5;border: 2px solid black">DASHBOARD
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>

        @elseif(Session::get('role')=='dpph')
        <div class="header">
            <div class="d_logo">
                <img class="logo" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
                <header class="name"><b>GEREJA St.YOSEPH Parsoburan</b></header>
            </div>
            <!-- <center><hr style="width:750px; border-color:gray; border-top-width:0"></center> -->
            
            <label class="btn" for="toggle" onclick="myFunction(this)">
                <div class="container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <script>
                    function myFunction(x) {
                    x.classList.toggle("change");
                    }
                </script>
            </label>
            <input id="toggle" type="checkbox" />
            <nav>
                <div class="H H_L" align="center">  
                    <ul style="border-bottom: 1px solid black;">
                        <li>
                            <a href="#">BERANDA</a>
                        </li>
                    </ul>
                    <!-- <ul>
                        <li><a href="./profil">PROFIL</a></li>
                    </ul> -->
                    <ul>
                        <li class="l_dropdown"><a href="#">PROFIL &#x25BE;</a>
                            <ul class="l_isi-dropdown">
                                <li><a href="./pastor_paroki">Pastor</a></li>
                                <li><a href="./sejarah">Sejarah</a></li>
                                <li><a href="./stasi">Stasi</a></li>
                                <li><a href="./visi_misi">Visi dan Misi</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="./kerasulan">KERASULAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./pengumuman">PENGUMUMAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./aula">AULA</a></li>
                    </ul>
                </div>
                

                <div class="H H_R">
                <ul>
                    <li class="r_dropdown"><b><a class="r_li_u">{{Session::get('username')}} &#x25BE;</a></b>
                        <ul class="r_isi-dropdown">
                            <!-- <li style="margin-top:20px;"><a href="./profil/{{Session::get('username')}}">| EDIT PROFIL</a></li> -->
                            <li><a href="./logout">| LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="./dashboard" >
                            <button style="color: white; background-color:orange; 
                            border-radius: 10px; padding:10px; margin-top:-5;border: 2px solid black">DASHBOARD
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
        @endif
        
        @yield('container')
    </body>
    <footer>
        <div align="center">
        <div class="footer" align="left">
            <img class="logo" height="80px" width="80px" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
            <p class="f_alamat"><b>Alamat</b><br><br><a>Pastoran Katolik, Jl. Lumban Rau, Parsoburan – 22383</a></p>
            <p class="f_about_us"><b>About Us</b><br><br><a>Gereja Katolik Paroki St. Yoseph Parsoburan merupakan salah satu paroki Keuskupan agung Medan yang berada di Parsoburan.</a></p>
            <p class="media_sosial"><b>Media Sosial</b><br><br>
                <a href="https://youtube.com/channel/UClTZoEYfOnM8vCUyoWak1Yg"><img class="logo_medsos" height="36px" width="36px" src="{{ URL::asset('asset/image/logo youtube.png') }}"></a>
                <a href="https://www.facebook.com/parokistyoseph.parsoburan"><img class="logo_medsos" height="36px" width="36px" src="{{ URL::asset('asset/image/logo facebook.png') }}"></a>
            </p>
            <p class="komunikasi"><b>No.Telepon:</b><br>
                +62 852-6015-0537
            </p>
            </div>
        </div>
        <!-- <div class="footer">
            <img class="logo" height="80px" width="80px" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
            <p class="f_alamat"><b>Alamat</b><br><br><a>Pastoran Katolik, Jl. Lumban Rau, Parsoburan – 22383</a></p>
            <p class="f_about_us"><b>About Us</b><br><br><a>Gereja Katolik Paroki St. Yoseph Parsoburan merupakan salah satu paroki Keuskupan agung Medan yang berada di Parsoburan.</a></p>
            <a href="https://youtube.com/channel/UClTZoEYfOnM8vCUyoWak1Yg"><img class="logo_medsos" height="60px" width="60px" src="{{ URL::asset('asset/image/logo youtube.png') }}"></a>
            <a href="https://www.facebook.com/parokistyoseph.parsoburan"><img class="logo_medsos" height="60px" width="60px" src="{{ URL::asset('asset/image/logo facebook.png') }}"></a>
        </div> -->
    </footer>
</html>

@else
<html>
    <head>
        <link href="{{ URL::asset('asset/css/style.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ URL::asset('asset/image/logo.png') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="header">
            <div class="d_logo">
                <img class="logo" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
                <header class="name"><b>GEREJA St.YOSEPH Parsoburan</b></header>
            </div>
            <!-- <center><hr style="width:750px; border-color:gray; border-top-width:0"></center> -->
            
            <label class="btn" for="toggle" onclick="myFunction(this)">
                <div class="container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <script>
                    function myFunction(x) {
                    x.classList.toggle("change");
                    }
                </script>
            </label>
            <input id="toggle" type="checkbox" />
            <nav>
                <div class="H H_L" align="center">  
                    <ul style="border-bottom: 1px solid black;">
                        <li>
                            <a href="#">BERANDA</a>
                        </li>
                    </ul>
                    <!-- <ul>
                        <li><a href="./profil">PROFIL</a></li>
                    </ul> -->
                    <ul>
                        <li class="l_dropdown"><a href="#">PROFIL &#x25BE;</a>
                            <ul class="l_isi-dropdown">
                                <li><a href="./pastor_paroki">Pastor</a></li>
                                <li><a href="./sejarah">Sejarah</a></li>
                                <li><a href="./stasi">Stasi</a></li>
                                <li><a href="./visi_misi">Visi dan Misi</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="./kerasulan">KERASULAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./pengumuman">PENGUMUMAN</a></li>
                    </ul>
                    <ul>
                        <li><a href="./aula">AULA</a></li>
                    </ul>
                </div>
                

                <div class="H H_R">
                    <ul>
                        <li><a href="./login">LOGIN</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        @yield('container')
    </body>

    <footer>
        <div class="footer_d" align="center">
        <div class="footer" align="left">
            <img class="logo" height="130px" width="130px" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
            <p class="f_alamat"><b>Alamat</b><br><br><a>Pastoran Katolik, Jl. Lumban Rau, Parsoburan – 22383</a></p>
            <p class="f_about_us"><b>About Us</b><br><br><a>Gereja Katolik Paroki St. Yoseph Parsoburan merupakan salah satu paroki Keuskupan agung Medan yang berada di Parsoburan.</a></p>
            <p class="media_sosial"><b>Media Sosial</b><br><br>
                <a href="https://youtube.com/channel/UClTZoEYfOnM8vCUyoWak1Yg"><img class="logo_medsos" height="36px" width="36px" src="{{ URL::asset('asset/image/logo youtube.png') }}"></a>
                <a href="https://www.facebook.com/parokistyoseph.parsoburan"><img class="logo_medsos" height="36px" width="36px" src="{{ URL::asset('asset/image/logo facebook.png') }}"></a>
            </p>
            <p class="komunikasi"><b>No.Telepon:</b><br>
                +62 852-6015-0537
            </p>
            </div>
        </div>
        <!-- <div class="footer">
            <img class="logo" height="80px" width="80px" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo">
            <p class="f_alamat"><b>Alamat</b><br><br><a>Pastoran Katolik, Jl. Lumban Rau, Parsoburan – 22383</a></p>
            <p class="f_about_us"><b>About Us</b><br><br><a>Gereja Katolik Paroki St. Yoseph Parsoburan merupakan salah satu paroki Keuskupan agung Medan yang berada di Parsoburan.</a></p>
            <a href="https://youtube.com/channel/UClTZoEYfOnM8vCUyoWak1Yg"><img class="logo_medsos" height="60px" width="60px" src="{{ URL::asset('asset/image/logo youtube.png') }}"></a>
            <a href="https://www.facebook.com/parokistyoseph.parsoburan"><img class="logo_medsos" height="60px" width="60px" src="{{ URL::asset('asset/image/logo facebook.png') }}"></a>
        </div> -->
    </footer>
</html>
@endif
