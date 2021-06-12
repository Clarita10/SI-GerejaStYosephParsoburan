<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\DataUmat;
 
// use App\Exports\DataUmatExport;
use Maatwebsite\Excel\Facades\Excel;

use App\View\Components\DataUmatExportExcel;

use App\Imports\DataUmatImport;

use DB;



class DataUmatController extends Controller
{
    public function TambahDataUmat()
    {
        $username = DB::table('akun')->select('username')->where('role', '!=', 'pastor')
        ->where('role', '!=', 'sekretariat')->where('role', '!=', 'dpph')
        ->orderBy('username', 'asc')->get();

        return view('tambah_data_umat', ['username' => $username]);
    }

    public function edit_data_umat($id)
    {
        $edit_data_umat = DB::table('data_umat')->where('id', $id)->get();

        $username = DB::table('akun')->select('username')->where('role', '!=', 'pastor')
        ->where('role', '!=', 'sekretariat')->where('role', '!=', 'dpph')
        ->orderBy('username', 'asc')->get();

        return view('edit_data_umat', ['edit_data_umat' => $edit_data_umat],
        ['username' => $username]);
    }

    public function PostTambahDataUmat(Request $request){
        $nama = $request -> nama;
        $alamat = $request -> alamat;
        $nik = $request -> nik;
        $jenis_kelamin = $request -> jenis_kelamin;
        $no_hp = $request -> no_hp;
        $lingkungan = $request -> lingkungan;
        $tanggal_baptis = $request -> tanggal_baptis;
        $no_baptis = $request -> no_baptis;
        $paroki = $request -> paroki;
        $keuskupan = $request -> keuskupan;
        $username = $request -> username;

        DB::table('data_umat')->insert([
            'nama' => $nama,
            'alamat' => $alamat,
            'nik' => $nik,
            'jenis_kelamin' => $jenis_kelamin,
            'no_hp' => $no_hp,
            'lingkungan' => $lingkungan,
            'tanggal_baptis' => $tanggal_baptis,
            'no_baptis' => $no_baptis,
            'paroki' => $paroki,
            'keuskupan' => $keuskupan,
            'username' => $username,
        ]);
        return redirect('./tambah_data_umat');

    }

    public function PostEditDataUmat(Request $request){
        $id = $request -> id;
        $nama = $request -> nama;
        $alamat = $request -> alamat;
        $nik = $request -> nik;
        $jenis_kelamin = $request -> jenis_kelamin;
        $no_hp = $request -> no_hp;
        $lingkungan = $request -> lingkungan;
        $tanggal_baptis = $request -> tanggal_baptis;
        $no_baptis = $request -> no_baptis;
        $paroki = $request -> paroki;
        $keuskupan = $request -> keuskupan;
        $username = $request -> username;

        DB::table('data_umat')->where('id', $id)->update([
            'nama' => $nama,
            'alamat' => $alamat,
            'nik' => $nik,
            'jenis_kelamin' => $jenis_kelamin,
            'no_hp' => $no_hp,
            'lingkungan' => $lingkungan,
            'tanggal_baptis' => $tanggal_baptis,
            'no_baptis' => $no_baptis,
            'paroki' => $paroki,
            'keuskupan' => $keuskupan,
            'username' => $username
        ]);
        return redirect('./daftar_data_umat');

    }

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$data_umat = DB::table('data_umat')->where('username','like',"%".$cari."%")
        ->orwhere('nama','like',"%".$cari."%")->orwhere('nik','like',"%".$cari."%")
        ->orwhere('jenis_kelamin','like',"%".$cari."%")->orwhere('no_hp','like',"%".$cari."%")
        ->orwhere('lingkungan','like',"%".$cari."%")->orwhere('tanggal_baptis','like',"%".$cari."%")
        ->orwhere('no_baptis','like',"%".$cari."%")->orwhere('paroki','like',"%".$cari."%")
        ->orwhere('keuskupan','like',"%".$cari."%")->orderBy('id', 'desc')->get();
 
		return view('./daftar_data_umat',['data_umat' => $data_umat]);
	}

    public function index()
    {
        $data_umat = DB::table('data_umat')->orderBy('id', 'desc')->get();

        return view('daftar_data_umat', ['data_umat' => $data_umat]);
    }

    public function delete(Request $request)
    {

        $id = $request -> id;

        DB::table('data_umat')->where('id', $id)->delete();
        
        return redirect('./daftar_data_umat');
    }

    // public function data_umat_export_excel()
	// {
    //     return Excel::download(new DataUmatExport, 'Data Umat.xlsx');
	// }

    public function data_umat_export_excel(Request $request) 
    {
        return Excel::download(new DataUmatExportExcel($request->username, $request->nama, $request->alamat, $request->nik
        , $request->jenis_kelamin, $request->no_hp, $request->lingkungan, $request->no_baptis, $request->paroki, $request->keuskupan)
        , 'Data Umat.xlsx');
    }

    public function data_umat_import_excel(Request $request) 
	{
		// validasi
		// $this->validate($request, [
		// 	'file' => 'required|mimes:csv,xls,xlsx'
		// ]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = time().'_'.$file->getClientOriginalName();
 
        $tujuan_upload = './asset/u_file/data_file';
        $file->move($tujuan_upload,$nama_file);
 
		// import data
		Excel::import(new DataUmatImport, ('./asset/u_file/data_file/'.$nama_file));
 
		// notifikasi dengan session
		// Session::flash('sukses','Data Umat Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('./daftar_data_umat');
	}

}

?>