<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $username = Session::get('username');

        $jumlah_pemesanan = DB::table('pemesanan_aula')->select(DB::raw('count(*) as jumlah_pemesanan'))->where('username', $username)->get();
        $pemesanan_disetujui = DB::table('pemesanan_aula')->select(DB::raw('count(*) as jumlah_pemesanan'))->where('username', $username)
        ->where('status', 'disetujui')->get();
        $jumlah_mengajukan_baptis = DB::table('data_baptis')->select(DB::raw('count(*) as jumlah_mengajukan_baptis'))
        ->where('username', $username)->get();
        $jumlah_petugas = DB::table('petugas')->select(DB::raw('count(*) as jumlah_petugas'))->get();
        $jumlah_pengumuman = DB::table('pengumuman')->select(DB::raw('count(*) as jumlah_pengumuman'))->get();
        $jumlah_umat = DB::table('data_umat')->select(DB::raw('count(*) as jumlah_umat'))->get();
        $jumlah_pesanan = DB::table('pemesanan_aula')->select(DB::raw('count(*) as jumlah_pesanan'))->get();
        $jumlah_pengguna = DB::table('data_user')->select(DB::raw('count(*) as jumlah_pengguna'))
        ->join('akun', 'data_user.username', '=', 'akun.username')->where('role', 'umat')->orwhere('role', 'masyarakat')->get();
        $jumlah_ajuan_umat = DB::table('ajuan_umat')->select(DB::raw('count(*) as jumlah_ajuan_umat'))->get();
        $jumlah_akun_umat = DB::table('data_user')->select(DB::raw('count(*) as jumlah_akun_umat'))
        ->join('akun', 'data_user.username', '=', 'akun.username')->where('role', 'umat')->get();
        $jumlah_baptis = DB::table('data_baptis')->select(DB::raw('count(*) as jumlah_baptis'))->get();

        return view('dashboard')->with('jumlah_pemesanan', $jumlah_pemesanan)
        ->with('pemesanan_disetujui', $pemesanan_disetujui)
        ->with('jumlah_mengajukan_baptis', $jumlah_mengajukan_baptis)
        ->with('jumlah_petugas', $jumlah_petugas)
        ->with('jumlah_pengumuman', $jumlah_pengumuman)
        ->with('jumlah_umat', $jumlah_umat)
        ->with('jumlah_pesanan', $jumlah_pesanan)
        ->with('jumlah_pengguna', $jumlah_pengguna)
        ->with('jumlah_ajuan_umat', $jumlah_ajuan_umat)
        ->with('jumlah_akun_umat', $jumlah_akun_umat)
        ->with('jumlah_baptis', $jumlah_baptis);
    }
}

?>