<html>
    <head>
        <link href="{{ URL::asset('asset/css/style.css') }}" rel="stylesheet">
        <style>
            body
            {
                background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(./asset/image/background1.png);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                
            }
        </style>
        <title>Registrasi</title>
        <link rel="icon" href="{{ URL::asset('asset/image/logo.png') }}">
    </head>
    <body>
        <div class="registrasi" align="center">
            <form action="./PostRegistrasi" method="post">
            @csrf
                <div class="registrasi_a">
                    <img class="logo" height="80px" width="80px" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo"> 
                    <H1 class="name">GEREJA St.YOSEPH Parsoburan</H1>
                    <select name="role" required hidden>
                        <option value="masyarakat">masyarakat</option>
                    </select>
                    <input type="text" name="foto" value="user.png" hidden></input>
                    <text style="color:red">* </text><text>NAMA LENGKAP</text><br>
                    <input type="text" name="nama"></input></br></br>
                    <text style="color:red">* </text><text>USERNAME</text><br>
                    <input type="text" name="username"></input></br></br>
                        @if(Session::has('alert2'))
                            <div style="color:red; margin-top:-18px">{{Session::get('alert2')}}</div></br>
                        @endif
                    <text style="color:red">* </text><text>PASSWORD</text><br>
                    <input type="password" name="password"></input></br></br>
                    <text style="color:red">* </text><text>TANGGAL LAHIR</text><br>
                    <input type="date" name="tanggal_lahir" class="form-control" max="<?php echo date('Y-m-d') ?>" required></br></br>
                    <text style="color:red">* </text><text>ALAMAT</text><br>
                    <input type="text" name="alamat"></input></br></br>
                    <text style="color:red">* </text><text>EMAIL</text><br>
                    <input type="email" name="email"></input></br></br>
                        @if(Session::has('alert3'))
                            <div style="color:red; margin-top:-18px">{{Session::get('alert3')}}</div></br>
                        @endif
                    <text style="color:red">* </text><text>NO TELEPON</text><br>
                    <input type="number" name="no_telepon" min="0"></input></br></br>
                        @if(Session::has('alert1'))
                            <div style="color:red">{{Session::get('alert1')}}</div></br>
                        @endif
                    <button name="registrasi">REGISTRASI</button>
                    <a style="color:AB3E16; padding-left: 62px; padding-right: 48px;">OR</a>
                    <a class="link" href="./login">LOGIN</a><br><br>
                    <a class="link" style="margin-left:-248px; color:gray" href="./">BACK</a>
                </div>
            </form>
        </div>
    </body>
</html>
