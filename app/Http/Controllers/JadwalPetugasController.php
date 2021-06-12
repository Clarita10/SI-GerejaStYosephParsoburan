<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class JadwalPetugasController extends Controller
{
    public function PostTambahJadwalPetugas(Request $request){
        $tanggal= $request -> tanggal;
        $mulai = $request -> mulai;
        $selesai = $request -> selesai;
        $pemimpin_misa = $request -> pemimpin_misa;
        $petugas = $request -> petugas;
        $petugas_koor = $request -> petugas_koor;
        $organ = $request -> organ;
        
        DB::table('jadwal_petugas')->insert([
            'tanggal' => $tanggal,
            'mulai' => $mulai,
            'selesai' => $selesai,
            'pemimpin_misa' => $pemimpin_misa,
            'petugas' => $petugas,
            'petugas_koor' => $petugas_koor,
            'organ' => $organ
        ]);
        return redirect('./tambah_jadwal_petugas');

    }

    public function PostEditJadwalPetugas(Request $request){
        $id = $request -> id;
        $tanggal= $request -> tanggal;
        $mulai = $request -> mulai;
        $selesai = $request -> selesai;
        $pemimpin_misa = $request -> pemimpin_misa;
        $petugas = $request -> petugas;
        $petugas_koor = $request -> petugas_koor;
        $organ = $request -> organ;
        
        DB::table('jadwal_petugas')->where('id', $id)->update([
            'tanggal' => $tanggal,
            'mulai' => $mulai,
            'selesai' => $selesai,
            'pemimpin_misa' => $pemimpin_misa,
            'petugas' => $petugas,
            'petugas_koor' => $petugas_koor,
            'organ' => $organ
        ]);
        return redirect('./daftar_jadwal_petugas');

    }

    public function index()
    {
        $jadwal_petugas = DB::table('jadwal_petugas')->orderBy('tanggal', 'desc')->orderBy('id', 'desc')->get();

        return view('daftar_jadwal_petugas', ['jadwal_petugas' => $jadwal_petugas]);
    }

    public function edit_jadwal_petugas(Request $request)
    {
        $id = $request -> id;

        $edit_jadwal_petugas = DB::table('jadwal_petugas')->where('id', $id)->get();

        return view('edit_jadwal_petugas', ['edit_jadwal_petugas' => $edit_jadwal_petugas]);
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$jadwal_petugas = DB::table('jadwal_petugas')->where('tanggal','like',"%".$cari."%")
        ->orwhere('pemimpin_misa','like',"%".$cari."%")->orwhere('petugas','like',"%".$cari."%")
        ->orwhere('petugas_koor','like',"%".$cari."%")->orwhere('organ','like',"%".$cari."%")
        ->orderBy('tanggal', 'desc')->orderBy('id', 'desc')->get();
 
		return view('./daftar_jadwal_petugas',['jadwal_petugas' => $jadwal_petugas]);
	}

    public function delete(Request $request)
    {
        $id = $request -> id;

        DB::table('jadwal_petugas')->where('id', $id)->delete();
        
        return redirect('./daftar_jadwal_petugas');
    }

}
?>
