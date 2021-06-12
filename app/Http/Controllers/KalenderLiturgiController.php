<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class KalenderLiturgiController extends Controller
{
    public function PostTambahKalenderLiturgi(Request $request){
        $judul_hari= $request -> judul_hari;
        $tanggal= $request -> tanggal;
        $bacaan_1 = $request -> bacaan_1;
        $mazmur = $request -> mazmur;
        $bacaan_2 = $request -> bacaan_2;
        $injil = $request -> injil;
        $warna_liturgi = $request -> warna_liturgi;
        
        DB::table('kalender_liturgi')->insert([
            'judul_hari' => $judul_hari,
            'tanggal' => $tanggal,
            'bacaan_1' => $bacaan_1,
            'mazmur' => $mazmur,
            'bacaan_2' => $bacaan_2,
            'injil' => $injil,
            'warna_liturgi' => $warna_liturgi
        ]);
        return redirect('./tambah_kalender_liturgi');

    }

    public function PostEditKalenderLiturgi(Request $request){
        $id = $request -> id;
        $judul_hari= $request -> judul_hari;
        $tanggal= $request -> tanggal;
        $bacaan_1 = $request -> bacaan_1;
        $mazmur = $request -> mazmur;
        $bacaan_2 = $request -> bacaan_2;
        $injil = $request -> injil;
        $warna_liturgi = $request -> warna_liturgi;
        
        DB::table('kalender_liturgi')->where('id', $id)->update([
            'judul_hari' => $judul_hari,
            'tanggal' => $tanggal,
            'bacaan_1' => $bacaan_1,
            'mazmur' => $mazmur,
            'bacaan_2' => $bacaan_2,
            'injil' => $injil,
            'warna_liturgi' => $warna_liturgi
        ]);
        return redirect('./daftar_kalender_liturgi');

    }

    public function index()
    {
        $kalender_liturgi = DB::table('kalender_liturgi')->orderBy('tanggal', 'desc')->orderBy('id', 'desc')->get();

        return view('daftar_kalender_liturgi', ['kalender_liturgi' => $kalender_liturgi]);
    }

    public function edit_kalender_liturgi(Request $request)
    {
        $id = $request -> id;

        $edit_kalender_liturgi = DB::table('kalender_liturgi')->where('id', $id)->get();

        return view('edit_kalender_liturgi', ['edit_kalender_liturgi' => $edit_kalender_liturgi]);
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$kalender_liturgi = DB::table('kalender_liturgi')->where('judul_hari','like',"%".$cari."%")
        ->orwhere('tanggal','like',"%".$cari."%")->orwhere('bacaan_1','like',"%".$cari."%")
        ->orwhere('mazmur','like',"%".$cari."%")->orwhere('bacaan_2','like',"%".$cari."%")
        ->orwhere('injil','like',"%".$cari."%")->orwhere('warna_liturgi','like',"%".$cari."%")
        ->orderBy('tanggal', 'desc')->orderBy('id', 'desc')->get();
 
		return view('./daftar_kalender_liturgi',['kalender_liturgi' => $kalender_liturgi]);
	}

    public function delete(Request $request)
    {
        $id = $request -> id;

        DB::table('kalender_liturgi')->where('id', $id)->delete();
        
        return redirect('./daftar_kalender_liturgi');
    }
    
    
}
?>
