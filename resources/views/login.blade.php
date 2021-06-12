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
        <title>Login</title>
        <link rel="icon" href="{{ URL::asset('asset/image/logo.png') }}">
    </head>
    <body>
        <div class="login" align="center" valign="center">
            <form action="./PostLogin" method="post">
            @csrf
                <div class="login_a">
                    <img class="logo" height="80px" width="80px" src="{{ URL::asset('asset/image/logo.png') }}" alt="logo"> 
                    <H1 class="name">GEREJA St.YOSEPH Parsoburan</H1>
                        @if(Session::has('alert4'))
                            <div style="color:green">{{Session::get('alert4')}}</div></br>
                        @endif
                    <text style="color:red">* </text><text>USERNAME</text><br>
                    <input type="text" name="username"></input></br></br>
                        @if(Session::has('alert1'))
                            <div style="color:red; margin-top:-18px">{{Session::get('alert1')}}</div></br>
                        @endif
                    <text style="color:red">* </text><text>PASSWORD</text><br>
                    <input type="password" name="password"></input></br></br>
                        @if(Session::has('alert2'))
                            <div style="color:red; margin-top:-18px">{{Session::get('alert2')}}</div></br>
                        @endif

                        @if(Session::has('alert3'))
                            <div style="color:red">{{Session::get('alert3')}}</div></br>
                        @endif
                    <button name="login">LOGIN</button>
                    <a style="color:AB3E16; padding-left: 58px; padding-right: 48px;">OR</a>
                    <a class="link" href="./registrasi">REGISTRASI</a><br><br>
                    <!-- <a class="link" href="./lupa_password">Lupa Password ?</a><br> -->
                    <a class="link" style="margin-left:-248px; color:gray" href="./">BACK</a>
                </div>
            </form>
        </div>
    </body>
</html>
