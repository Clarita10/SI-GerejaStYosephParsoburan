<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;



class ProfilUserController extends Controller
{
    public function index()
    {
        $user = DB::table('data_user')->join('akun', 'data_user.username', '=', 'akun.username')
        ->orderBy('role', 'desc')->orderBy('data_user.username', 'asc')->get();

        return view('user', ['user' => $user]);
    }    

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$user = DB::table('data_user')->join('akun', 'data_user.username', '=', 'akun.username')
        ->where('nama','like',"%".$cari."%")->orwhere('data_user.username','like',"%".$cari."%")
        ->orwhere('tanggal_lahir','like',"%".$cari."%")->orwhere('alamat','like',"%".$cari."%")
        ->orwhere('email','like',"%".$cari."%") ->orwhere('no_telepon','like',"%".$cari."%")
        ->orwhere('role','like',"%".$cari."%")->orderBy('role', 'desc')
        ->orderBy('data_user.username', 'asc')->get();
 
		return view('./user',['user' => $user]);
 
	}

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function detail_profil()
    {
        $username = Session::get('username');

        $profil = DB::table('data_user')->where('data_user.username', $username)
        ->join('akun', 'data_user.username', '=', 'akun.username')->get();
        
        return view('profil', ['profil' => $profil]);
    }

    public function EditProfil(Request $request)
    {
        $username = $request -> username;
        $password = $request -> password;
        $cek_password = $request -> cek_password;
        $role = $request -> role;

        $nama = $request -> nama;
        $tanggal_lahir = $request -> tanggal_lahir;
        $alamat = $request -> alamat;
        $email = $request -> email;
        $no_telepon = $request -> no_telepon;
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
        
        $confirm_password = DB::table('akun')->where('username',$username)
        ->where('password', $cek_password)->first();
        
        if($confirm_password){

            DB::table('akun')->where('username', $username)->update([
                'username' => $username,
                'password' => $password,
            ]);

            DB::table('data_user')->where('username', $username)->update([
                'nama' => $nama,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
                'email' => $email,
                'no_telepon' => $no_telepon,
                'foto' => $nama_file,
            ]);
        return redirect("./profil/$username");
        }
        elseif(empty($confirm_password)){
            return redirect("./profil/$username");
        }
        

    }

    public function detail_user($id)
    {
        $detail_user = DB::table('data_user')->where('id', $id)->join('akun', 'data_user.username', '=', 'akun.username')->get();
        
        // $data = DB::table('data_user')->where('id', $id)
        //->join('akun', 'data_user.username', '=', 'akun.username')->first();
        // Session::put('role',$data->role);
        // Session::put('username',$data->username);
        

        return view('detail_user', ['detail_user' => $detail_user]);
    }

    public function ChangeRole(Request $request)
    {
        // $username = Session::get('username');
        $username = $request -> username;
        $role = $request -> role;
        
        DB::table('akun')->where('username', $username)->update([
            'role' => $role,
        ]);
        return redirect('./user');
    }

    public function update(Request $request, $id)
    {
        
    }

    public function delete(Request $request)
    {

        $id = $request -> id;

        DB::table('data_user')->where('id', $id)->delete();

        // $username = Session::get('username');

        // DB::table('akun')->where('username', $username)->delete();
        
        return redirect('./user');
    }

    public function destroy($id)
    {
        
    }
}

?>