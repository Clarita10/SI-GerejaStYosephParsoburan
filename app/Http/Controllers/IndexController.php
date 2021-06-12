<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class IndexController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $jadwal_petugas = DB::table('jadwal_petugas')
        ->where('tanggal', date('Y-m-d', strtotime('sunday', strtotime(date('Y-m-d')))))->get();
        $kalender_liturgi = DB::table('kalender_liturgi')->where('tanggal', date('Y-m-d'))->get();
        $pengumuman = DB::table('pengumuman')->limit(3)->orderBy('id', 'desc')->get();
        $slideshow = DB::table('slideshow')->get();
        // $artikel_video = DB::table('artikel')->where('tipe', 'video')->get();
        // $artikel_informasi = DB::table('artikel')->where('tipe', 'informasi')->get();
        $artikel = DB::table('artikel')->limit(3)->orderBy('id', 'desc')->get();
        $petugas = DB::table('petugas')->where('status', 'ditampilkan')->get();
        $jumlah_umat = DB::table('data_umat')->select(DB::raw('count(*) as jumlah_umat'))->get();

        return view('index')->with('jadwal_petugas', $jadwal_petugas)
        ->with('kalender_liturgi', $kalender_liturgi)
        ->with('pengumuman', $pengumuman)
        ->with('slideshow', $slideshow)
        ->with('artikel', $artikel)
        // ->with('artikel_video', $artikel_video)
        // ->with('artikel_informasi', $artikel_informasi)
        ->with('petugas', $petugas)
        ->with('jumlah_umat', $jumlah_umat);
    }
}

?>