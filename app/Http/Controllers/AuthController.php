<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function register()
    {
        if(isset(Auth::user()->id)){
            return redirect()->route('dashboard');
        }
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nik'=>'required',
            'username'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'password' => 'required|confirmed|min:6'
        ]);
        // dd($request->all());    
        $password = $request->password;
        $store = [
            'nik'=> $request->nik,
            'role' => 'user',
            'nama'=> $request->nama,
            'email' => $request->email,
            'telp'=> $request->telp,
            'email'=> $request->email,
            'username'=> $request->username,
            'password'=> Hash::make($password),
            'confirm_password'=> $request->password_confirmation,
            'remember_token'=> Str::random(32)
        ];

        User::create($store);
        Alert::toast('Berhasil Daftar', 'success');
        return redirect()->route('login');
        
    }

    public function login()
    {
        if(isset(Auth::user()->id)){
            Alert::toast('Anda Sudah Login', 'warning');
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }


    public function postlogin(Request $request)
    {
        
        if(Auth::guard()->attempt($request->only('username','password'))){
            // echo true;
            Alert::toast('Berhasil Login', 'success');
            return redirect()->route('dashboard');
            // dd(Auth::user());
        }else{
            // echo "err0r";
            Alert::toast('Gagal Login', 'error');
            return redirect()->route('login')->with('message','Username Atau Password Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        // Session::flush();
        Alert::toast('Berhasil Logout', 'success');
        return redirect()->route('welcome')->with('message','Berhasil Logout');
    }

}
