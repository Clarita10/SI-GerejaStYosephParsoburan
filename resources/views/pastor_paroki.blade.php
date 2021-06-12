@extends('layout/main_pastor_paroki')

@section('title', 'Pastor')

@section('container')

<div class="pastor" align="center">
    <div class="pastor_a">
        <h1 align="left" style="margin-left:25px;">Pastor Paroki St. Yoseph Parsoburan dari Masa ke Masa</h1><br>
        @foreach($pastor_paroki as $pastor)
            @if($loop->iteration==1)
            <div>
                <table class="pastor_t_1">
                    <tr>
                        <td class="pastor_g" align="center">
                            <img src="./asset/u_file/image/{{$pastor->foto}}" style="width:275px; height:275px; border-radius: 25px;">
                        </td>
                        <td valign="top" style="padding:10px;">
                            <text style="font-size:40px">{{$pastor->nama}}</text><br>
                            <text style="font-size:30px">({{$pastor->masa_jabatan}})</text>
                        </td>
                    </tr>
                </table><hr>
            </div>
            @endif
            <div style="display: inline-block;">
            @if($loop->iteration!=1 && $loop->iteration%2==0)
            <div align="left" class="d_pastor_t_gen">
                <table class="pastor_t_gen">
                    <tr>
                        <td class="pastor_g" align="center">
                            <img src="./asset/u_file/image/{{$pastor->foto}}" style="width:250px; height:250px; border-radius: 25px;"><br>
                            <text style="font-size:25px">{{$pastor->nama}}</text><br>
                            <text style="font-size:20px">({{$pastor->masa_jabatan}})</text>
                        </td>
                    </tr>
                </table>
            </div>
            @endif

            @if($loop->iteration!=1 && $loop->iteration%2==1)
            <div align="right" class="d_pastor_t_gan">
                <table class="pastor_t_gan">
                    <tr>
                        <td class="pastor_g" align="center">
                            <img src="./asset/u_file/image/{{$pastor->foto}}" style="width:250px; height:250px; border-radius: 25px;"><br>
                            <text style="font-size:25px">{{$pastor->nama}}</text><br>
                            <text style="font-size:20px">({{$pastor->masa_jabatan}})</text>
                        </td>
                    </tr>
                </table>
            </div>
            @endif
            </div>
        @endforeach
        <!-- @foreach($pastor_paroki as $pastor)
        @if($loop->iteration%2==1)
        <table width="100%">
            <tr>
                <td width="250px" align="center">
                    <img src="./asset/u_file/image/{{$pastor->foto}}" style="width:200px; height:250px">
                </td>
                <td valign="top" align="left">
                    <text style="font-size:35px">{{$pastor->nama}}</text><br>
                    <text style="font-size:20px">({{$pastor->masa_jabatan}})</text>
                </td>
            </tr>
        </table>
        @endif

        @if($loop->iteration%2==0)
        <table width="100%">
            <tr>
                <td valign="top" align="right">
                    <text style="font-size:35px">{{$pastor->nama}}</text><br>
                    <text style="font-size:20px">({{$pastor->masa_jabatan}})</text>
                </td>
                <td width="250px" align="center">
                    <img src="./asset/u_file/image/{{$pastor->foto}}" style="width:200px; height:250px">
                </td>
            </tr>
        </table>
        @endif
        @endforeach -->
    </div>
</div>

@endsection