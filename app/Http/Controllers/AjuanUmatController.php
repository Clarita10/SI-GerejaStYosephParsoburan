<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class AjuanUmatController extends Controller
{
    public function ajuan_umat()
    {
        $username = Session::get('username');

        $alamat = DB::table('data_user')->select('alamat')->where('username', $username)->get();
        $tanggal_lahir = DB::table('data_user')->select('tanggal_lahir')->where('username', $username)->get();

        return view('ajuan_umat', ['alamat' => $alamat], ['tanggal_lahir' => $tanggal_lahir]);
    }

    public function PostAjuanUmat(Request $request){
        $username = $request -> username;
        $nik = $request -> nik;
        $nama = $request -> nama;
        $tempat_lahir = $request -> tempat_lahir;
        $tanggal_lahir = $request -> tanggal_lahir;
        $jenis_kelamin = $request -> jenis_kelamin;
        $nama_paroki = $request -> nama_paroki;
        $alamat = $request -> alamat;
        $bukti_ktp = $request -> file('bukti_ktp');
        $status = $request -> status;
        $alasan_ditolak = $request -> alasan_ditolak;

        $nama_file = time().'_'.$bukti_ktp->getClientOriginalName();
        $tujuan_upload = './asset/u_file/file';
        $bukti_ktp->move($tujuan_upload,$nama_file);
        
        DB::table('ajuan_umat')->insert([
            'username' => $username,
            'nik' => $nik,
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'nama_paroki' => $nama_paroki,
            'alamat' => $alamat,
            'bukti_ktp' => $nama_file,
            'status' => $status,
            'alasan_ditolak' => $alasan_ditolak,
        ]);
        return redirect('./ajuan_umat')->with('alert','Ajuan Anda Telah Terkirim. Mohon tunggu keputusan yang akan di berikan.');

    }
    
    public function index()
    {
        $username = Session::get('username');

        $ajuan_umat = DB::table('ajuan_umat')->orderBy('status', 'desc')->orderBy('id', 'desc')->get();

        $pengajuan_umat = DB::table('ajuan_umat')->orderBy('status', 'desc')->orderBy('id', 'desc')->where('username', $username)->get();

        return view('daftar_ajuan', ['ajuan_umat' => $ajuan_umat], ['pengajuan_umat' => $pengajuan_umat]);
    }

    public function cari(Request $request)
	{
        $username = Session::get('username');
		$cari = $request->cari;

		$ajuan_umat = DB::table('ajuan_umat')->where('username','like',"%".$cari."%")
        ->orwhere('nama','like',"%".$cari."%")->orwhere('nama','like',"%".$cari."%")
        ->orwhere('tempat_lahir','like',"%".$cari."%")->orwhere('tanggal_lahir','like',"%".$cari."%")
        ->orwhere('jenis_kelamin','like',"%".$cari."%")->orwhere('nama_paroki','like',"%".$cari."%")
        ->orwhere('alamat','like',"%".$cari."%")->orderBy('status', 'desc')->orderBy('id', 'desc')->get();

        $pengajuan_umat = DB::table('ajuan_umat')->where('username', $username)
        // ->orwhere('nama','like',"%".$cari."%")->orwhere('nama','like',"%".$cari."%")
        // ->orwhere('tempat_lahir','like',"%".$cari."%")->orwhere('tanggal_lahir','like',"%".$cari."%")
        // ->orwhere('jenis_kelamin','like',"%".$cari."%")->orwhere('nama_paroki','like',"%".$cari."%")
        // ->orwhere('alamat','like',"%".$cari."%")
        ->orderBy('status', 'desc')->orderBy('id', 'desc')->get();
 
		return view('./daftar_ajuan',['ajuan_umat' => $ajuan_umat], ['pengajuan_umat' => $pengajuan_umat]);
	}

    public function setujui(Request $request)
    {
        $username = $request -> username;
        $id = $request -> id;

        DB::table('akun')->where('username', $username)->update([
            'role' => 'umat',
        ]);
        
        DB::table('ajuan_umat')->where('id', $id)->update([
            'status' => 'disetujui',
        ]);
        return redirect('./daftar_ajuan');
    }
    
    public function tolak(Request $request)
    {
        $id = $request -> id;

        DB::table('ajuan_umat')->where('id', $id)->update([
            'status' => 'ditolak',
        ]);
        return redirect('./daftar_ajuan');
    }
    
    public function alasan_ditolak($id)
    {
        $alasan_ajuan_ditolak = DB::table('ajuan_umat')->select('ajuan_umat.id','alasan_ditolak')->where('id', $id)->get();

        return view('alasan_ajuan_ditolak')->with('alasan_ajuan_ditolak', $alasan_ajuan_ditolak);
    }

    public function PostAlasanDitolak(Request $request){
        $id = $request -> id;
        $alasan_ditolak = $request -> alasan_ditolak;

        DB::table('ajuan_umat')->where('id', $id)->update([
            'alasan_ditolak' => $alasan_ditolak,
        ]);
        return redirect("./daftar_ajuan");
    }


}
?>
