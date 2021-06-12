<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

use App\Gambar;

class InformasiController extends Controller
{
    public function index()
    {
        // $pengumuman = DB::table('pengumuman')->orderBy('id', 'desc')->get();

        // return view('pengumuman', ['pengumuman' => $pengumuman]);
    }

    public function dashboard()
    {
        // $pengumuman = DB::table('pengumuman')->orderBy('id', 'desc')->get();

        // return view('daftar_pengumuman', ['pengumuman' => $pengumuman]);
    }

    public function detail_pengumuman($id)
    {
        // $detail_pengumuman = DB::table('pengumuman')->where('id', $id)->get();

        // return view('detail_pengumuman', ['detail_pengumuman' => $detail_pengumuman]);
    }

    public function cari(Request $request)
	{
		// $cari = $request->cari;

		// $pengumuman = DB::table('pengumuman')->where('judul_pengumuman','like',"%".$cari."%")
        // ->orderBy('id', 'desc')->get();
 
		// return view('./daftar_pengumuman',['pengumuman' => $pengumuman]);
	}


    public function daftar_slideshow()
    {
        $daftar_slideshow = DB::table('slideshow')->orderBy('id', 'asc')->get();

        return view('daftar_slideshow', ['daftar_slideshow' => $daftar_slideshow]);
    }

    public function edit_slideshow($id)
    {
        $edit_slideshow = DB::table('slideshow')->where('id', $id)->get();

        return view('edit_slideshow', ['edit_slideshow' => $edit_slideshow]);
    }

    public function PostEditSlideshow(Request $request){
        $id = $request -> id;
        $gambar = $request -> file('gambar');
        $gambar_lama = $request -> gambar_lama;
        $caption = $request -> caption;
        
        if(empty($gambar)){
            $nama_file = $gambar_lama;
        }

        else{
            $nama_file = time().'_'.$gambar->getClientOriginalName();
            $tujuan_upload = './asset/image';
            $gambar->move($tujuan_upload,$nama_file);
        }

        DB::table('slideshow')->where('id', $id)->update([
            'gambar' => $nama_file,
            'caption' => $caption
        ]);
        return redirect("./daftar_slideshow");

    }

    public function PostTambahArtikel(Request $request){
        $tipe = $request -> tipe;
        $link = $request -> link;
        $caption = $request -> caption;
        $foto_pendukung = $request -> file('foto_pendukung');
        $foto_kosong = $request -> foto_kosong;
        $kode_link_video = $request -> kode_link_video;

        if(empty($foto_pendukung)){
            $nama_file = $foto_kosong;
        }

        else{
            $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
            $tujuan_upload = './asset/u_file/image';
            $foto_pendukung->move($tujuan_upload,$nama_file);
        }

        DB::table('artikel')->insert([
            'tipe' => $tipe,
            'link' => $link,
            'caption' => $caption,
            'foto_pendukung' => $nama_file,
            'kode_link_video' => $kode_link_video
        ]);
        return redirect("./daftar_artikel");

    }

    public function daftar_artikel()
    {
        $daftar_artikel = DB::table('artikel')->orderBy('id', 'desc')->get();

        return view('daftar_artikel', ['daftar_artikel' => $daftar_artikel]);
    }

    
    public function cari_artikel(Request $request)
	{
		$cari = $request->cari;

		$daftar_artikel = DB::table('artikel')->where('tipe','like',"%".$cari."%")->orwhere('caption','like',"%".$cari."%")
        ->orderBy('id', 'desc')->get();
 
		return view('./daftar_artikel',['daftar_artikel' => $daftar_artikel]);
	}

    public function edit_artikel($id)
    {
        $edit_artikel = DB::table('artikel')->where('id', $id)->get();

        return view('edit_artikel', ['edit_artikel' => $edit_artikel]);
    }

    public function PostEditArtikel(Request $request){
        $id = $request -> id;
        $tipe = $request -> tipe;
        $link = $request -> link;
        $caption = $request -> caption;
        $foto_pendukung = $request -> file('foto_pendukung');
        $foto_pendukung_lama = $request -> foto_pendukung_lama;
        $kode_link_video = $request -> kode_link_video;

        if(empty($foto_pendukung)){
            $nama_file = $foto_pendukung_lama;
        }

        else{
            $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
            $tujuan_upload = './asset/u_file/image';
            $foto_pendukung->move($tujuan_upload,$nama_file);
        }

        DB::table('artikel')->where('id', $id)->update([
            'tipe' => $tipe,
            'link' => $link,
            'caption' => $caption,
            'foto_pendukung' => $nama_file,
            'kode_link_video' => $kode_link_video
        ]);
        return redirect("./daftar_artikel");

    }

    public function delete_artikel(Request $request)
    {
        $id = $request -> id;

        DB::table('artikel')->where('id', $id)->delete();
        
        return redirect('./daftar_artikel');
    }

    public function PostTambahPetugas(Request $request){
        $nama = $request -> nama;
        $jabatan = $request -> jabatan;
        $masa_jabatan = $request -> masa_jabatan;
        $foto = $request -> file('foto');
        $foto_kosong = $request -> foto_kosong;
        $status = $request -> status;

        if(empty($foto)){
            $nama_file = $foto_kosong;
        }

        else{
            $nama_file = time().'_'.$foto->getClientOriginalName();
            $tujuan_upload = './asset/u_file/image';
            $foto->move($tujuan_upload,$nama_file);
        }

        DB::table('petugas')->insert([
            'nama' => $nama,
            'jabatan' => $jabatan,
            'masa_jabatan' => $masa_jabatan,
            'foto' => $nama_file,
            'status' => $status
        ]);
        return redirect('./tambah_petugas');

    }

    public function daftar_petugas()
    {
        $daftar_petugas = DB::table('petugas')->orderBy('nama', 'asc')->get();

        return view('daftar_petugas', ['daftar_petugas' => $daftar_petugas]);
    }

    public function cari_petugas(Request $request)
	{
		$cari = $request->cari;

		$daftar_petugas = DB::table('petugas')->where('nama','like',"%".$cari."%")->orwhere('jabatan','like',"%".$cari."%")
        ->orwhere('masa_jabatan','like',"%".$cari."%")->orwhere('status','like',"%".$cari."%")
        ->orderBy('nama', 'asc')->get();
 
		return view('./daftar_petugas',['daftar_petugas' => $daftar_petugas]);
	}

    public function tampilkan(Request $request)
    {
        $id = $request -> id;

        DB::table('petugas')->where('id', $id)->update([
            'status' => 'ditampilkan',
        ]);
        return redirect('./daftar_petugas');
    }
    
    public function batalkan(Request $request)
    {
        $id = $request -> id;

        DB::table('petugas')->where('id', $id)->update([
            'status' => 'none',
        ]);
        return redirect('./daftar_petugas');
    }

    public function edit_petugas($id)
    {
        $edit_petugas = DB::table('petugas')->where('id', $id)->get();

        return view('edit_petugas', ['edit_petugas' => $edit_petugas]);
    }

    public function PostEditPetugas(Request $request){
        $id = $request -> id;
        $nama = $request -> nama;
        $jabatan = $request -> jabatan;
        $masa_jabatan = $request -> masa_jabatan;
        $foto = $request -> file('foto');
        $foto_lama = $request -> foto_lama;
            
        if(empty($foto)){
            $nama_file = $foto_lama;
        }

        else{
            $nama_file = time().'_'.$foto->getClientOriginalName();
            $tujuan_upload = './asset/u_file/image';
            $foto->move($tujuan_upload,$nama_file);
        }

        DB::table('petugas')->where('id', $id)->update([
            'nama' => $nama,
            'jabatan' => $jabatan,
            'masa_jabatan' => $masa_jabatan,
            'foto' => $nama_file,
        ]);
        return redirect('./daftar_petugas');

    }

    public function delete_petugas(Request $request)
    {
        $id = $request -> id;

        DB::table('petugas')->where('id', $id)->delete();
        
        return redirect('./daftar_petugas');
    }

    public function pastor()
    {
        $pastor_paroki = DB::table('petugas')->where('jabatan', 'pastor')->orderBy('masa_jabatan', 'desc')->get();

        return view('pastor_paroki', ['pastor_paroki' => $pastor_paroki]);
    }

    public function edit_aula()
    {
        $edit_aula = DB::table('aula')->where('id', 1)->get();

        return view('edit_aula', ['edit_aula' => $edit_aula]);
    }

    public function PostEditAula(Request $request){
        $id = $request -> id;
        $nama = $request -> nama;
        $gambar = $request -> file('gambar');
        $gambar_lama = $request -> gambar_lama;
        $harga = $request -> harga;
        $informasi = $request -> informasi;
            
        if(empty($gambar)){
            $nama_file = $gambar_lama;
        }

        else{
            $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
            $tujuan_upload = './asset/image';
            $foto_pendukung->move($tujuan_upload,$nama_file);
        }

        DB::table('aula')->where('id', $id)->update([
            'nama' => $nama,
            'gambar' => $gambar,
            'gambar' => $nama_file,
            'harga' => $harga,
            'informasi' => $informasi
        ]);
        return redirect("./edit_aula/1");

    }

    public function PostTambahPengumuman(Request $request){
        // $kategori_pengumuman = $request -> kategori_pengumuman;
        // $judul_pengumuman = $request -> judul_pengumuman;
        // $isi_pengumuman = $request -> isi_pengumuman;
        // $foto_pendukung = $request -> file('foto_pendukung');
        // $foto_kosong = $request -> foto_kosong;
        // $tanggal = $request -> tanggal;

        // if(empty($foto_pendukung)){
        //     $nama_file = $foto_kosong;
        // }

        // else{
        //     $nama_file = time().'_'.$foto_pendukung->getClientOriginalName();
        //     $tujuan_upload = './asset/u_file/image';
        //     $foto_pendukung->move($tujuan_upload,$nama_file);
        // }

        // DB::table('pengumuman')->insert([
        //     'kategori_pengumuman' => $kategori_pengumuman,
        //     'judul_pengumuman' => $judul_pengumuman,
        //     'isi_pengumuman' => $isi_pengumuman,
        //     'foto_pendukung' => $nama_file,
        //     'tanggal' => $tanggal
        // ]);
        // return redirect('./tambah_pengumuman');

    }
    
    public function delete(Request $request)
    {

        // $id = $request -> id;

        // DB::table('pengumuman')->where('id', $id)->delete();
        
        // return redirect('./daftar_pengumuman');
    }
}
?>
