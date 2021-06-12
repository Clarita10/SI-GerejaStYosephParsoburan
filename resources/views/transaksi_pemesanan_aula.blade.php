<html>
<head>
	<title>Transaksi Pemesanan Aula</title>
	<style type="text/css">
		
	</style>
</head>
<body>
<div>
	<center>
	<div align="center" style="width:700px;">
		<table align="center" width="530px">
			<tr>
				<td rowspan="2" align="center" style="margin-top:8px"><img width="140px" heigth="140px" class="logo" src="./asset/image/logo.png" alt="logo"></td>
				<td width="430px" colspan="2" align="center" style="font-size:16px">
				<b>
					PAROKI SANTO YOSEPH PARSOBURAN KEUSKUPAN AGUNG MEDAN<br>
					JL.LUMBAN RAU<br>
					PARSOBURAN-TOBA SAMOSIR, 22383 SUMUT-INDONESIA
				</b>
				</td>
			</tr>
			<tr>
				<td width="210px" style="font-size:13px"><b>Email </b> : <a style="color:blue">parokistyoseph@gmail.com</a></td>
				<td width="130px" style="font-size:13px"><b>HP </b>: 0812 6158 7311</td>
			</tr>
		</table>
		<hr style="width:650px;">
	</div>
	</center>
	<center>
	<div align="center" style="width:700px;">
		<H3 align="center"> TRANSAKSI </H3>
		<table align="center" width="650px">
		@foreach($pesanan_aula as $pesanan)
			<tr>
				<td width="150px">ID Penyewaan</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">{{$pesanan->id}}</td>
			</tr>
			<tr>
				<td width="150px">Nama Penyewa</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">{{$pesanan->nama}}</td>
			</tr>
			<tr>
				<td width="150px">No. Telepon</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">{{$pesanan->no_telepon}}</td>
			</tr>
			<tr>
				<td width="150px">Alamat Penyewa</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">{{$pesanan->nama}}</td>
			</tr>
			<?php
				$jumlah_waktu_penyewaan = date("d", strtotime($pesanan->tanggal_selesai)) - date("d", strtotime($pesanan->tanggal_mulai)) + 1;
				$biaya_sewa = 1500000 * $jumlah_waktu_penyewaan
			?>
			<tr>
				<td width="150px">Waktu Penyewaan</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">( {{$pesanan->tanggal_mulai}} ) - ( {{$pesanan->tanggal_selesai}} ) <b>[ <?php echo $jumlah_waktu_penyewaan; ?> hari ]</b></td>
			</tr>
			<tr>
				<td width="150px">Keperluan</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">{{$pesanan->keperluan}}</td>
			</tr>
			<?php
				$f_biaya_sewa= number_format($biaya_sewa,2,",",".");
			?>
			<tr>
				<td width="150px">Biaya Sewa</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">Rp.{{$f_biaya_sewa}} </td>
			</tr>
			<tr>
				<td width="150px">Biaya Tambahan</td>
				<td width="10px" align="center">:</td>
				<td  width="380px"></td>
			</tr>
			<tr>
				<td width="150px">Total Biaya</td>
				<td width="10px" align="center">:</td>
				<td  width="380px">Rp.{{$f_biaya_sewa}}</td>
			</tr>
		@endforeach 
		</table><br><br>
		@if($pesanan->nama_pastor=='-' && $pesanan->tanda_tangan_pastor=='-')
		<p align="left" style="margin-left:50px"><b>* Harap segera melakukan pembayaran </b></p><br><br>
		@elseif($pesanan->nama_pastor!='-' && $pesanan->tanda_tangan_pastor!='-')
		@endif
		<table align="center" width="530px">
			<tr>
				<td width="320px" align="center" style="font-size:16px">Penyewa</td>
				<td width="320px" align="center" style="font-size:16px">Pastor Paroki</td>
			</tr>
			<tr>
				<td align="center" style="font-size:16px; height:120px"></td>
				@if($pesanan->nama_pastor=='-' && $pesanan->tanda_tangan_pastor=='-')
				<td align="center" style="font-size:16px; height:120px"></td>
				@elseif($pesanan->nama_pastor!='-' && $pesanan->tanda_tangan_pastor!='-')
				<td align="center" style="font-size:16px; height:120px">
					<img height="100px" width="100px" src="./asset/u_file/image/{{$pesanan->tanda_tangan_pastor}}">
				</td>
				@endif
			</tr>
			<tr>
				<td align="center" style="font-size:16px"><hr width="120px"></td>
				<td align="center" style="font-size:16px"><hr width="120px"></td>
			</tr>
			<tr>
				<td width="320px" align="center" style="font-size:16px">{{$pesanan->nama}}</td>
				@if($pesanan->nama_pastor=='-' && $pesanan->tanda_tangan_pastor=='-')
				<td width="320px" align="center" style="font-size:16px"></td>
				@elseif($pesanan->nama_pastor!='-' && $pesanan->tanda_tangan_pastor!='-')
				<td width="320px" align="center" style="font-size:16px">{{$pesanan->nama_pastor}}</td>
				@endif
			</tr>
		</table>
	</div>
	</center>
</div>
	<center>
			<h4></h4>
		</center>
 
</body>
</html>