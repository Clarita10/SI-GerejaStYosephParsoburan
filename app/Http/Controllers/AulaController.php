<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

use DB;

use Session;

class AulaController extends Controller
{
    public function aula()
    {
        $username = Session::get('username');

        $aula = DB::table('aula')->orderBy('nama', 'desc')->get();

        return view('aula', ['aula' => $aula]);
    }


    public function PostPemesananAula(Request $request){
        $nama = $request -> nama;
        $keperluan = $request -> keperluan;
        $tanggal_mulai = $request -> tanggal_mulai;
        $tanggal_selesai = $request -> tanggal_selesai;
        $status = $request -> status;
        $alasan_ditolak = $request -> alasan_ditolak;
        $username = $request -> username;
        $bukti_pembayaran = $request -> bukti_pembayaran;
        $tanda_tangan_pastor = $request -> tanda_tangan_pastor;
        $nama_pastor = $request -> nama_pastor;
        
        DB::table('pemesanan_aula')->insert([
            'nama' => $nama,
            'keperluan' => $keperluan,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'status' => $status,
            'alasan_ditolak' => $alasan_ditolak,
            'username' => $username,
            'bukti_pembayaran' => $bukti_pembayaran,
            'tanda_tangan_pastor' => $tanda_tangan_pastor,
            'nama_pastor' => $nama_pastor
        ]);
        return redirect('./pemesanan_aula')->with('alert','Pemesanan Anda Telah Terkirim. Mohon tunggu keputusan yang akan di berikan.');

    }
    
    public function index()
    {
        $username = Session::get('username');

        $pemesanan_aula = DB::table('pemesanan_aula')->orderBy('status', 'desc')
        ->join('akun', 'pemesanan_aula.username', '=', 'akun.username')
        ->join('data_user', 'pemesanan_aula.username', '=', 'data_user.username')
        ->orderBy('pemesanan_aula.id', 'desc')->get();
        $pesanan_aula = DB::table('pemesanan_aula')->where('pemesanan_aula.username', $username)
        ->join('akun', 'pemesanan_aula.username', '=', 'akun.username')
        ->join('data_user', 'pemesanan_aula.username', '=', 'data_user.username')
        ->orderBy('status', 'desc')->orderBy('pemesanan_aula.id', 'desc')->get();

        return view('daftar_pemesanan_aula')->with('pemesanan_aula', $pemesanan_aula)
        ->with('pesanan_aula', $pesanan_aula);

    }

    public function cari(Request $request)
	{
        $username = Session::get('username');
		$cari = $request->cari;

		$pemesanan_aula = DB::table('pemesanan_aula')
        ->select('pemesanan_aula.id', 'pemesanan_aula.username', 'pemesanan_aula.nama', 'data_user.no_telepon','pemesanan_aula.keperluan'
        , 'pemesanan_aula.tanggal_mulai', 'pemesanan_aula.tanggal_selesai', 'pemesanan_aula.status', 'pemesanan_aula.alasan_ditolak'
        , 'pemesanan_aula.bukti_pembayaran', 'pemesanan_aula.nama_pastor', 'pemesanan_aula.tanda_tangan_pastor' )
        ->where('pemesanan_aula.username','like',"%".$cari."%")->orwhere('pemesanan_aula.nama','like',"%".$cari."%")
        ->orwhere('no_telepon','like',"%".$cari."%")->orwhere('tanggal_mulai','like',"%".$cari."%")
        ->orwhere('tanggal_selesai','like',"%".$cari."%")->orwhere('keperluan','like',"%".$cari."%")->orwhere('status','like',"%".$cari."%")
        ->join('akun', 'pemesanan_aula.username', '=', 'akun.username')
        ->join('data_user', 'pemesanan_aula.username', '=', 'data_user.username')
        ->orderBy('status', 'desc')->orderBy('pemesanan_aula.id', 'desc')->get();

        $pesanan_aula = DB::table('pemesanan_aula')
        ->select('pemesanan_aula.id', 'pemesanan_aula.username', 'pemesanan_aula.nama', 'data_user.no_telepon','pemesanan_aula.keperluan'
        ,'pemesanan_aula.tanggal_mulai', 'pemesanan_aula.tanggal_selesai', 'pemesanan_aula.status', 'pemesanan_aula.bukti_pembayaran'
        , 'pemesanan_aula.alasan_ditolak' )
        ->where('pemesanan_aula.username', $username)
        // ->orwhere('nama','like',"%".$cari."%")
        // ->orwhere('tanggal_mulai','like',"%".$cari."%")->orwhere('tanggal_selesai','like',"%".$cari."%")
        // ->orwhere('keperluan','like',"%".$cari."%")->orwhere('status','like',"%".$cari."%")
        ->join('akun', 'pemesanan_aula.username', '=', 'akun.username')
        ->join('data_user', 'pemesanan_aula.username', '=', 'data_user.username')
        ->orderBy('status', 'desc')->orderBy('pemesanan_aula.id', 'desc')->get();

        return view('daftar_pemesanan_aula', ['pemesanan_aula' => $pemesanan_aula],
        ['pesanan_aula' => $pesanan_aula]);
	}

    public function tanda_tangan_transaksi($id)
    {
        $tanda_tangan_transaksi = DB::table('pemesanan_aula')->select('pemesanan_aula.id','tanda_tangan_pastor','nama_pastor')->where('id', $id)->get();

        return view('tanda_tangan_transaksi')->with('tanda_tangan_transaksi', $tanda_tangan_transaksi);

    }

    public function PostTandaTanganTransaksi(Request $request){
        $id = $request -> id;
        $nama_pastor = $request -> nama_pastor;
        $tanda_tangan_pastor = $request -> file('tanda_tangan_pastor');

        $nama_file = time().'_'.$tanda_tangan_pastor->getClientOriginalName();
        $tujuan_upload = './asset/u_file/image';
        $tanda_tangan_pastor->move($tujuan_upload,$nama_file);

        DB::table('pemesanan_aula')->where('id', $id)->update([
            'nama_pastor' => $nama_pastor,
            'tanda_tangan_pastor' => $nama_file,
        ]);
        return redirect("./daftar_pemesanan_aula");
    }

    public function bukti_pembayaran($id)
    {
        $bukti_pembayaran = DB::table('pemesanan_aula')->select('pemesanan_aula.id','bukti_pembayaran')->where('id', $id)->get();

        return view('bukti_pembayaran')->with('bukti_pembayaran', $bukti_pembayaran);

    }

    public function PostBuktiPembayaran(Request $request){
        $id = $request -> id;
        $bukti_pembayaran = $request -> file('bukti_pembayaran');

        $nama_file = time().'_'.$bukti_pembayaran->getClientOriginalName();
        $tujuan_upload = './asset/u_file/image';
        $bukti_pembayaran->move($tujuan_upload,$nama_file);

        DB::table('pemesanan_aula')->where('id', $id)->update([
            'bukti_pembayaran' => $nama_file,
        ]);
        return redirect("./daftar_pemesanan_aula");
    }

    public function alasan_ditolak($id)
    {
        $alasan_ditolak = DB::table('pemesanan_aula')->select('pemesanan_aula.id','alasan_ditolak')->where('id', $id)->get();

        return view('alasan_ditolak')->with('alasan_ditolak', $alasan_ditolak);

    }
    
    public function PostAlasanDitolak(Request $request){
        $id = $request -> id;
        $alasan_ditolak = $request -> alasan_ditolak;

        DB::table('pemesanan_aula')->where('id', $id)->update([
            'alasan_ditolak' => $alasan_ditolak,
        ]);
        return redirect("./daftar_pemesanan_aula");
    }

    public function setujui(Request $request)
    {
        $id = $request -> id;

        DB::table('pemesanan_aula')->where('id', $id)->update([
            'status' => 'disetujui',
        ]);
        return redirect('./daftar_pemesanan_aula');
    }
    
    public function tolak(Request $request)
    {
        $id = $request -> id;

        DB::table('pemesanan_aula')->where('id', $id)->update([
            'status' => 'ditolak',
        ]);
        return redirect('./daftar_pemesanan_aula');
    }
    
    public function transaksi_pemesanan_aula(Request $request)
    {
        $id = $request -> id;

    	$pesanan_aula = DB::table('pemesanan_aula')
        ->select('pemesanan_aula.id', 'pemesanan_aula.username', 'pemesanan_aula.nama', 'data_user.no_telepon','pemesanan_aula.keperluan'
        , 'pemesanan_aula.tanggal_mulai', 'pemesanan_aula.tanggal_selesai', 'pemesanan_aula.status'
        , 'pemesanan_aula.bukti_pembayaran', 'pemesanan_aula.nama_pastor', 'pemesanan_aula.tanda_tangan_pastor' )
        ->join('akun', 'pemesanan_aula.username', '=', 'akun.username')
        ->join('data_user', 'pemesanan_aula.username', '=', 'data_user.username')
        ->where('pemesanan_aula.id', $id)->get();
 
    	$pdf = PDF::loadview('transaksi_pemesanan_aula',['pesanan_aula'=>$pesanan_aula]);
    	return $pdf->download('Transaksi Pemesanan Aula.pdf');
    }
}
?>
