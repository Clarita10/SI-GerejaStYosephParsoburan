<html>
<head>
	<title>Surat Permadian</title>
	<style type="text/css">
		table tr td{
            padding-top: 5px;
        }
        table tr .isi{
            border-bottom: 1px dotted black;
        }
	</style>
</head>
<body>
<div>
	<center>
	<div align="center" style="width:700px;">
		<table align="center" width="530px">
			<tr>
				<td align="center" style="margin-top:8px"><img width="70px" heigth="70px" class="logo" src="./asset/image/logo keuskupan agung medan_1.jpeg" alt="logo"></td>
				<td width="430px"><H2> KEUSKUPAN AGUNG MEDAN </H2></td>
			</tr>
		</table>
        <table align="center" width="500px">
			<tr>
				<td width="40px">Paroki</td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="220px"> </td>
                <td style="padding-left:20px" width="40px">Buku</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="4" width="160px"> </td>
			</tr>
            <tr>
				<td width="40px">Stasi</td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="220px"> </td>
                <td style="padding-left:20px" width="40px">Hal</td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="45px"> </td>
                <td width="15px">No</td>
				<td width="5px" align="center">:</td>
				<td class="isi" width="45px"> </td>
			</tr>
		</table><br>
	</div>
	</center>
	<center>
	<div align="center" style="width:700px;">
        @foreach($data_baptis as $data)
		<H1 align="center"> SURAT PERMANDIAN </H1>
		<table align="center" width="650px">
			<tr>
				<td width="135px">Nama Lengkap</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px">{{$data->nama}}</td>
			</tr>
            <tr>
				<td width="135px">Lahir di</td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="240px">{{$data->tempat_lahir}}</td>
                <td width="12px"> Tgl. </td>
                <td class="isi" width="128px">{{$data->tanggal_lahir}}</td>
			</tr>
            <tr>
				<td width="135px">Dipermandikan di</td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="240px"> </td>
                <td width="12px"> Tgl. </td>
                <td class="isi" width="128px"> </td>
			</tr>
            <tr>
				<td width="135px">Diterima resmi di</td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="240px"> </td>
                <td width="12px"> Tgl. </td>
                <td class="isi" width="128px"> </td>
			</tr>
            <tr>
				<td width="135px">Ayah</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px">{{$data->nama_ayah}}</td>
			</tr>
            <tr>
				<td width="135px">Ibu</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px">{{$data->nama_ibu}}</td>
			</tr>
            <tr>
				<td width="135px">Bapa Serani</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px"> </td>
			</tr>
            <tr>
				<td width="135px">Ibu Serani</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px"> </td>
			</tr>
            <tr>
				<td width="135px">Yang Mempermandikan</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px"> </td>
			</tr>
            <tr>
				<td width="135px">Yang Meresmikan</td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px"> </td>
			</tr>
            <tr>
				<td colspan="5">Sakramen Krisma</td>
			</tr>
            <tr>
				<td width="135px"><text style="margin-left:70px">di Paroki</text> </td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="240px"> </td>
                <td width="12px"> Tgl. </td>
                <td class="isi" width="128px"> </td>
			</tr>
            <tr>
				<td colspan="5">Sakramen Perkawinan</td>
			</tr>
            <tr>
				<td width="135px"><text style="margin-left:70px">dengan</text> </td>
				<td width="10px" align="center">:</td>
				<td class="isi" colspan="3" width="380px"> </td>
			</tr>
            <tr>
				<td width="135px"><text style="margin-left:70px">di</text> </td>
				<td width="10px" align="center">:</td>
				<td class="isi" width="240px"> </td>
                <td width="12px"> Tgl. </td>
                <td class="isi" width="128px"> </td>
			</tr>
		</table>
        @endforeach 
        
        <table align="center" width="650px">
            <tr>
				<td width="385px" colspan="2"> </td>
                <td width="12px"> L.M. </td>
                <td class="isi" width="80px"> </td>
                <td width="12px"> No. </td>
                <td class="isi" width="48px"> </td>
			</tr>
			<tr>
				<td width="145px"> </td>
				<td class="isi" width="240px" valign="top" height="50px"> sesuai dengain aslinya</td>
                <td width="12px"> Tgl. </td>
                <td class="isi" colspan="3" width="128px"> </td>
			</tr>
		</table><br><br>

		<table align="center" width="250px">
			<tr>
				<td colspan="3" align="center" >Yang Memberikan Salinan</td>
			</tr>
			<tr>
				<td colspan="3" align="center" style="height:75px"> </td>
			</tr>
			<tr>
                <td width="2px" align="left">(</td>
				<td class="isi"></td>
                <td width="2px" align="right">)</td>
			</tr>
		</table>

        <table align="center" width="300px">
			<tr>
				<td><H3>" Siapa yang percaya dan dibaptis akan diselamatkan " Mark.16,16</H3></td>
			</tr>
		</table>
</div>
 
</body>
</html>