<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class RegistrasiController extends Controller
{
    public function PostRegistrasi(Request $request){
        $username = $request -> username;
        $password = $request -> password;
        $role = $request -> role;

        $id = $request -> id;
        $nama = $request -> nama;
        $username = $request -> username;
        $tanggal_lahir = $request -> tanggal_lahir;
        $alamat = $request -> alamat;
        $email = $request -> email;
        $no_telepon = $request -> no_telepon;
        $foto = $request -> foto;
        
        $cek_username = DB::table('akun')->where('username',$username)->first();   
        $cek_email = DB::table('data_user')->where('email',$email)->first();   
        
        if(empty($username) || empty($password) || empty($role) || empty($nama) || empty($email) || empty($no_telepon)){
            return redirect('./registrasi')->with('alert1','Tidak boleh ada form yang kosong.');
        }
        else if($cek_username && $cek_email){
            return redirect('./registrasi')->with('alert2','Username ini telah digunakan. ')->with('alert3','Email ini sudah ada. ');
        }
        else if($cek_username || $cek_email){
            if($cek_username){
                return redirect('./registrasi')->with('alert2','Username ini telah digunakan. ');
            }
            if($cek_email){
                return redirect('./registrasi')->with('alert3','Email ini sudah ada. ');
            }
        }
        
        DB::table('akun')->insert([
            'username' => $username,
            'password' => $password,
            'role' => $role,
        ]);
        DB::table('data_user')->insert([
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'email' => $email,
            'no_telepon' => $no_telepon,
            'foto' => $foto,
        ]);
        return redirect('./login')->with('alert4','Akun anda telah terdaftar.');

    }
}
?>
