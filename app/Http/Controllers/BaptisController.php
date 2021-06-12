<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use PDF;

use App\DataBaptis;

use Maatwebsite\Excel\Facades\Excel;

use App\View\Components\DataBaptisExportExcel;

use Session;

use App\Gambar;

class BaptisController extends Controller
{
    public function index()
    {
        $username = Session::get('username');

        $daftar_data_baptis = DB::table('data_baptis')->orderBy('id', 'desc')->get();

        $data_daftar_baptis = DB::table('data_baptis')->orderBy('id', 'desc')->where('username', $username)->get();

        return view('daftar_data_baptis', ['daftar_data_baptis' => $daftar_data_baptis], ['data_daftar_baptis' => $data_daftar_baptis]);
    }
    
    public function cari(Request $request)
	{
        $username = Session::get('username');
		$cari = $request->cari;

		$daftar_data_baptis = DB::table('data_baptis')->where('username','like',"%".$cari."%")
        ->orwhere('nama','like',"%".$cari."%")->orwhere('tempat_lahir','like',"%".$cari."%")
        ->orwhere('tanggal_lahir','like',"%".$cari."%")->orwhere('jenis_kelamin','like',"%".$cari."%")
        ->orwhere('nama_ayah','like',"%".$cari."%")->orwhere('nama_ibu','like',"%".$cari."%")->orderBy('id', 'desc')->get();

        $data_daftar_baptis = DB::table('data_baptis')->where('username','like',"%".$cari."%")
        ->where('username', $username)
        // ->orwhere('nama','like',"%".$cari."%")->orwhere('tempat_lahir','like',"%".$cari."%")
        // ->orwhere('tanggal_lahir','like',"%".$cari."%")->orwhere('jenis_kelamin','like',"%".$cari."%")
        // ->orwhere('nama_ayah','like',"%".$cari."%")->orwhere('nama_ibu','like',"%".$cari."%")
        ->orderBy('id', 'desc')->get();
 
		return view('./daftar_data_baptis',['daftar_data_baptis' => $daftar_data_baptis], ['data_daftar_baptis' => $data_daftar_baptis]);
	}

    public function edit_data_baptis($id)
    {
        $edit_data_baptis = DB::table('data_baptis')->where('id', $id)->get();

        return view('edit_data_baptis', ['edit_data_baptis' => $edit_data_baptis]);
    }

    public function PostEditDataBaptis(Request $request){
        $id = $request -> id;
        $nama = $request -> nama;
        $nama_baptis = $request -> nama_baptis;
        $tempat_lahir = $request -> tempat_lahir;
        $tanggal_lahir = $request -> tanggal_lahir;
        $jenis_kelamin = $request -> jenis_kelamin;
        $nik = $request -> nik;
        $nama_ayah = $request -> nama_ayah;
        $agama_ayah = $request -> agama_ayah;
        $nama_ibu = $request -> nama_ibu;
        $agama_ibu = $request -> agama_ibu;
        $alamat_pos = $request -> alamat_pos;
        $no_hp = $request -> no_hp;
        $no_kk = $request -> no_kk;
        $lingkungan = $request -> lingkungan;
        $nama_lengkap_bapak_baptis = $request -> nama_lengkap_bapak_baptis;
        $nama_lengkap_ibu_baptis = $request -> nama_lengkap_ibu_baptis;
        $bukti_surat_baptis = $request -> file('bukti_surat_baptis');
        $bukti_surat_baptis_lama = $request -> bukti_surat_baptis_lama;
        $bukti_surat_nikah = $request -> file('bukti_surat_nikah');
        $bukti_surat_nikah_lama = $request -> bukti_surat_nikah_lama;
        $bukti_kk = $request -> file('bukti_kk');
        $bukti_kk_lama = $request -> bukti_kk_lama;
        $bukti_fotocopy_akte_lahir = $request -> file('bukti_fotocopy_akte_lahir');
        $bukti_fotocopy_akte_lahir_lama = $request -> bukti_fotocopy_akte_lahir_lama;
        $bukti_surat_nikah_orangtua = $request -> file('bukti_surat_nikah_orangtua');
        $bukti_surat_nikah_orangtua_lama = $request -> bukti_surat_nikah_orangtua_lama;
        $username = $request -> username;

        if(empty($bukti_surat_baptis)){
            $nama_file_bukti_surat_baptis = $bukti_surat_baptis_lama;
        }
        
        if(empty($bukti_surat_nikah)){
            $nama_file_bukti_surat_nikah = $bukti_surat_nikah_lama;
        }

        if(empty($bukti_kk)){
            $nama_file_bukti_kk = $bukti_kk_lama;
        }

        if(empty($bukti_fotocopy_akte_lahir)){
            $nama_file_bukti_fotocopy_akte_lahir = $bukti_fotocopy_akte_lahir_lama;
        }

        if(empty($bukti_surat_nikah_orangtua)){
            $nama_file_bukti_surat_nikah_orangtua = $bukti_surat_nikah_orangtua_lama;
        }

        if(!empty($bukti_surat_baptis)){
            $nama_file_bukti_surat_baptis = time().'_'.$bukti_surat_baptis->getClientOriginalName();
            $tujuan_upload = './asset/u_file/file';
            $bukti_surat_baptis->move($tujuan_upload,$nama_file_bukti_surat_baptis);
        }

        if(!empty($bukti_surat_nikah)){
            $nama_file_bukti_surat_nikah = time().'_'.$bukti_surat_nikah->getClientOriginalName();
            $tujuan_upload = './asset/u_file/file';
            $bukti_surat_nikah->move($tujuan_upload,$nama_file_bukti_surat_nikah);
        }

        if(!empty($bukti_kk)){
            $nama_file_bukti_kk = time().'_'.$bukti_kk->getClientOriginalName();
            $tujuan_upload = './asset/u_file/file';
            $bukti_kk->move($tujuan_upload,$nama_file_bukti_kk);
        }

        if(!empty($bukti_fotocopy_akte_lahir)){
            $nama_file_bukti_fotocopy_akte_lahir = time().'_'.$bukti_fotocopy_akte_lahir->getClientOriginalName();
            $tujuan_upload = './asset/u_file/file';
            $bukti_fotocopy_akte_lahir->move($tujuan_upload,$nama_file_bukti_fotocopy_akte_lahir);
        }

        if(!empty($bukti_surat_nikah_orangtua)){
            $nama_file_bukti_surat_nikah_orangtua = time().'_'.$bukti_surat_nikah_orangtua->getClientOriginalName();
            $tujuan_upload = './asset/u_file/file';
            $bukti_surat_nikah_orangtua->move($tujuan_upload,$nama_file_bukti_surat_nikah_orangtua);
        }

        DB::table('data_baptis')->where('id', $id)->update([
            'nama' => $nama,
            'nama_baptis' => $nama_baptis,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'nik' => $nik,
            'nama_ayah' => $nama_ayah,
            'agama_ayah' => $agama_ayah,
            'nama_ibu' => $nama_ibu,
            'agama_ibu' => $agama_ibu,
            'alamat_pos' => $alamat_pos,
            'no_hp' => $no_hp,
            'no_kk' => $no_kk,
            'lingkungan' => $lingkungan,
            'nama_lengkap_bapak_baptis' => $nama_lengkap_bapak_baptis,
            'nama_lengkap_ibu_baptis' => $nama_lengkap_ibu_baptis,
            'bukti_surat_baptis' => $nama_file_bukti_surat_baptis,
            'bukti_surat_nikah' => $nama_file_bukti_surat_nikah,
            'bukti_kk' => $nama_file_bukti_kk,
            'bukti_fotocopy_akte_lahir' => $nama_file_bukti_fotocopy_akte_lahir,
            'bukti_surat_nikah_orangtua' => $nama_file_bukti_surat_nikah_orangtua,
            'username' => $username,
        ]);
        return redirect('./daftar_data_baptis');

    }

    public function PostTambahDataBaptis(Request $request){
        $nama = $request -> nama;
        $nama_baptis = $request -> nama_baptis;
        $tempat_lahir = $request -> tempat_lahir;
        $tanggal_lahir = $request -> tanggal_lahir;
        $jenis_kelamin = $request -> jenis_kelamin;
        $nik = $request -> nik;
        $nama_ayah = $request -> nama_ayah;
        $agama_ayah = $request -> agama_ayah;
        $nama_ibu = $request -> nama_ibu;
        $agama_ibu = $request -> agama_ibu;
        $alamat_pos = $request -> alamat_pos;
        $no_hp = $request -> no_hp;
        $no_kk = $request -> no_kk;
        $lingkungan = $request -> lingkungan;
        $nama_lengkap_bapak_baptis = $request -> nama_lengkap_bapak_baptis;
        $nama_lengkap_ibu_baptis = $request -> nama_lengkap_ibu_baptis;
        $bukti_surat_baptis = $request -> file('bukti_surat_baptis');
        $bukti_surat_baptis_kosong = $request -> bukti_surat_baptis_kosong;
        $bukti_surat_nikah = $request -> file('bukti_surat_nikah');
        $bukti_surat_nikah_kosong = $request -> bukti_surat_nikah_kosong;
        $bukti_kk = $request -> file('bukti_kk');
        $bukti_fotocopy_akte_lahir = $request -> file('bukti_fotocopy_akte_lahir');
        $bukti_surat_nikah_orangtua = $request -> file('bukti_surat_nikah_orangtua');
        $username = $request -> username;
        
        if(empty($bukti_surat_baptis)){
            $nama_file_bukti_surat_baptis = $bukti_surat_baptis_kosong;
        }

        if(!empty($bukti_surat_baptis)){
            $nama_file_bukti_surat_baptis = time().'_'.$bukti_surat_baptis->getClientOriginalName();
            $tujuan_upload = './asset/u_file/file';
            $bukti_surat_baptis->move($tujuan_upload,$nama_file_bukti_surat_baptis);
        }

        if(empty($bukti_surat_nikah)){
            $nama_file_bukti_surat_nikah = $bukti_surat_nikah_kosong;
        }

        if(!empty($bukti_surat_nikah)){
            $nama_file_bukti_surat_nikah = time().'_'.$bukti_surat_nikah->getClientOriginalName();
            $tujuan_upload = './asset/u_file/file';
            $bukti_surat_nikah->move($tujuan_upload,$nama_file_bukti_surat_nikah);
        }

        $nama_file_bukti_kk = time().'_'.$bukti_kk->getClientOriginalName();
        $tujuan_upload = './asset/u_file/file';
        $bukti_kk->move($tujuan_upload,$nama_file_bukti_kk);

        $nama_file_bukti_fotocopy_akte_lahir = time().'_'.$bukti_fotocopy_akte_lahir->getClientOriginalName();
        $tujuan_upload = './asset/u_file/file';
        $bukti_fotocopy_akte_lahir->move($tujuan_upload,$nama_file_bukti_fotocopy_akte_lahir);
        
        $nama_file_bukti_surat_nikah_orangtua = time().'_'.$bukti_surat_nikah_orangtua->getClientOriginalName();
        $tujuan_upload = './asset/u_file/file';
        $bukti_surat_nikah_orangtua->move($tujuan_upload,$nama_file_bukti_surat_nikah_orangtua);

        DB::table('data_baptis')->insert([
            'nama' => $nama,
            'nama_baptis' => $nama_baptis,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'nik' => $nik,
            'nama_ayah' => $nama_ayah,
            'agama_ayah' => $agama_ayah,
            'nama_ibu' => $nama_ibu,
            'agama_ibu' => $agama_ibu,
            'alamat_pos' => $alamat_pos,
            'no_hp' => $no_hp,
            'no_kk' => $no_kk,
            'lingkungan' => $lingkungan,
            'nama_lengkap_bapak_baptis' => $nama_lengkap_bapak_baptis,
            'nama_lengkap_ibu_baptis' => $nama_lengkap_ibu_baptis,
            'bukti_surat_baptis' => $nama_file_bukti_surat_baptis,
            'bukti_surat_nikah' => $nama_file_bukti_surat_nikah,
            'bukti_kk' => $nama_file_bukti_kk,
            'bukti_fotocopy_akte_lahir' => $nama_file_bukti_fotocopy_akte_lahir,
            'bukti_surat_nikah_orangtua' => $nama_file_bukti_surat_nikah_orangtua,
            'username' => $username,
        ]);
        return redirect('./tambah_data_baptis')->with('alert','Data Baptis Anda Telah Terkirim.');
    }
    
    public function delete(Request $request)
    {

        $id = $request -> id;

        DB::table('data_baptis')->where('id', $id)->delete();
        
        return redirect('./daftar_data_baptis');
    }

    public function surat_permandian(Request $request)
    {
        $id = $request -> id;

        $data_baptis = DB::table('data_baptis')->where('id', $id)->get();
 
    	$pdf = PDF::loadview('surat_permandian',['data_baptis'=>$data_baptis]);
    	return $pdf->download('Surat Permandian.pdf');
    }

    public function data_baptis_export_excel(Request $request) 
    {
        return Excel::download(new DataBaptisExportExcel($request->username, $request->nama, $request->nama_baptis, $request->tempat_lahir
        , $request->tanggal_lahir, $request->jenis_kelamin, $request->nik, $request->nama_ayah, $request->agama_ayah, $request->nama_ibu
        , $request->agama_ibu, $request->alamat_pos, $request->no_hp, $request->no_kk, $request->lingkungan, $request->nama_lengkap_bapak_baptis
        , $request->nama_lengkap_ibu_baptis, $request->bukti_surat_baptis, $request->bukti_surat_nikah, $request->bukti_kk
        , $request->bukti_fotocopy_akte_lahir, $request->bukti_surat_nikah_orangtua), 'Data Baptis.xlsx');
    }

}
?>
