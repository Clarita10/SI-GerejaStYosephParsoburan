<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

use App\Gambar;

class PengumumanController extends Controller
{
    public function index()
    {
        $Pengumuman = DB::table('pengumuman')->orderBy('id', 'desc')->paginate(8);

        return view('pengumuman', ['Pengumuman' => $Pengumuman]);
    }

    public function dashboard()
    {
        $pengumuman = DB::table('pengumuman')->orderBy('id', 'desc')->get();

        return view('daftar_pengumuman', ['pengumuman' => $pengumuman]);
    }

    public function detail_pengumuman($id)
    {
        $detail_pengumuman = DB::table('pengumuman')->where('id', $id)->get();

        return view('detail_pengumuman', ['detail_pengumuman' => $detail_pengumuman]);
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$pengumuman = DB::table('pengumuman')->where('kategori_pengumuman','like',"%".$cari."%")
        ->orwhere('judul_pengumuman','like',"%".$cari."%")->orwhere('isi_pengumuman','like',"%".$cari."%")
        ->orwhere('tanggal','like',"%".$cari."%")
        ->orderBy('id', 'desc')->get();
 
		return view('./daftar_pengumuman',['pengumuman' => $pengumuman]);
	}

    public function cari_p(Request $request)
	{
		$cari = $request->cari;

		$Pengumuman = DB::table('pengumuman')->where('kategori_pengumuman','like',"%".$cari."%")
        ->orwhere('judul_pengumuman','like',"%".$cari."%")->orwhere('tanggal','like',"%".$cari."%")
        ->orderBy('id', 'desc')->paginate(10);
 
		return view('./pengumuman',['Pengumuman' => $Pengumuman]);
	}

    public function edit_pengumuman($id)
    {
        $edit_pengumuman = DB::table('pengumuman')->where('id', $id)->get();

        return view('edit_pengumuman', ['edit_pengumuman' => $edit_pengumuman]);
    }

    public function PostEditPengumuman(Request $request){
        $id = $request -> id;
        $kategori_pengumuman = $request -> kategori_pengumuman;
        $judul_pengumuman = $request -> judul_pengumuman;
        $isi_pengumuman = $request -> isi_pengumuman;
        $foto_pendukung = $request -> file('foto_pendukung');
        $foto_pendukung_lama = $request -> foto_pendukung_lama;
        $tanggal = $request -> tanggal;
        
        // $filenameWithExt = $foto_pendukung->getClientOriginalName();
        // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // $extension = $request->file('foto_pendukung')->getClientOriginalExtension();
        // $filenameSimpan = $filename.'_'.time().'.'.$extension;
        // $path = $foto_pendukung->storeAs('./asset/u_file/image', $filenameSimpan);  

        //$foto_pendukung_lama = DB::table('pengumuman')->select('foto_pendukung')->where('id', $id)->get();

        // $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
        // $tujuan_upload = './asset/u_file/image';
        // $foto_pendukung->move($tujuan_upload,$nama_file);
            
        if(empty($foto_pendukung)){
            $nama_file = $foto_pendukung_lama;
        }

        else{
            $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
            $tujuan_upload = './asset/u_file/image';
            $foto_pendukung->move($tujuan_upload,$nama_file);
        }

        DB::table('pengumuman')->where('id', $id)->update([
            'kategori_pengumuman' => $kategori_pengumuman,
            'judul_pengumuman' => $judul_pengumuman,
            'isi_pengumuman' => $isi_pengumuman,
            'foto_pendukung' => $nama_file,
            'tanggal' => $tanggal
        ]);
        return redirect("./daftar_pengumuman");
    }

    public function PostTambahPengumuman(Request $request){
        $kategori_pengumuman = $request -> kategori_pengumuman;
        $judul_pengumuman = $request -> judul_pengumuman;
        $isi_pengumuman = $request -> isi_pengumuman;
        $foto_pendukung = $request -> file('foto_pendukung');
        $foto_kosong = $request -> foto_kosong;
        $tanggal = $request -> tanggal;

        if(empty($foto_pendukung)){
            $nama_file = $foto_kosong;
        }

        else{
            $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
            $tujuan_upload = './asset/u_file/image';
            $foto_pendukung->move($tujuan_upload,$nama_file);
        }

        // $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
        // $tujuan_upload = './asset/u_file/image';
        // $foto_pendukung->move($tujuan_upload,$nama_file);

        DB::table('pengumuman')->insert([
            'kategori_pengumuman' => $kategori_pengumuman,
            'judul_pengumuman' => $judul_pengumuman,
            'isi_pengumuman' => $isi_pengumuman,
            'foto_pendukung' => $nama_file,
            'tanggal' => $tanggal
        ]);
        return redirect('./tambah_pengumuman');

    }
    
    public function delete(Request $request)
    {

        $id = $request -> id;

        DB::table('pengumuman')->where('id', $id)->delete();

        // $username = Session::get('username');

        // DB::table('akun')->where('username', $username)->delete();
        
        return redirect('./daftar_pengumuman');
    }
}
?>
