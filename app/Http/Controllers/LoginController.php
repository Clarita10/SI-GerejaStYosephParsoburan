<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class LoginController extends Controller
{

    public function PostLogin(Request $request){

        $username = $request->username;
        $password = $request->password;
        

        $data = DB::table('akun')->where('akun.username',$username)->where('password',$password)
        ->join('data_user', 'akun.username', '=', 'data_user.username')->first(); 
        if($data){
            if($data->role =='masyarakat'){
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('role',$data->role);
                Session::put('foto',$data->foto);
                Session::put('login',TRUE);
                return redirect('./dashboard');
            }
            elseif ($data->role =='umat') {
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('role',$data->role);
                Session::put('foto',$data->foto);
                Session::put('login',TRUE);
                return redirect('./dashboard');    
            }
            elseif ($data->role =='pastor') {
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('role',$data->role);
                Session::put('foto',$data->foto);
                Session::put('login',TRUE);
                return redirect('./dashboard');    
            }  
            elseif ($data->role =='sekretariat') {
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('role',$data->role);
                Session::put('foto',$data->foto);
                Session::put('login',TRUE);
                return redirect('./dashboard');    
            }  
            elseif ($data->role =='dpph') {
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('role',$data->role);
                Session::put('foto',$data->foto);
                Session::put('login',TRUE);
                return redirect('./dashboard');    
            }
        }
        else if(empty($username) && empty($password)){
            return redirect('./login')->with('alert1','Username tidak boleh kosong.')->with('alert2','Password tidak boleh kosong.');
            }
        else if(empty($username)){
            return redirect('./login')->with('alert1','Username tidak boleh kosong.');
            }
        else if(empty($password)){
            return redirect('./login')->with('alert2','Password tidak boleh kosong.');
                }
        else{
            return redirect('./login')->with('alert3','Username atau Password salah !');
        }
    }

    // public function logout(){
    //     Session::flush();
    //     return redirect('login')->with('alert','Kamu sudah logout');
    // }

    // public function register(Request $request){
    //     return view('register');
    // }

    // public function registerPost(Request $request){
    //     $this->validate($request, [
    //         'name' => 'required|min:4',
    //         'email' => 'required|min:4|email|unique:users',
    //         'password' => 'required',
    //         'confirmation' => 'required|same:password',
    //     ]);

    //     $data =  new ModelUser();
    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     $data->password = bcrypt($request->password);
    //     $data->save();
    //     return redirect('login')->with('alert-success','Kamu berhasil Register');
    // }
}
?>
