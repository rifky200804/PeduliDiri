<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());    
        $password = $request->password;
        $store = [
            'nik'=> $request->nik,
            'role'=> $request->role,
            'nama'=> $request->nama,
            'telp'=> $request->telp,
            'email'=> $request->email,
            'username'=> $request->username,
            'password'=> Hash::make($password),
            'confirm_password'=> $request->confirm_password,
            'remember_token'=> Str::random(32)
        ];

        User::create($store);
        
        return redirect()->route('login');
        
    }

    public function login()
    {
        return view('auth.login');
    }


    public function postlogin(Request $request)
    {
        
        if(Auth::guard()->attempt($request->only('username','password'))){
            // echo true;
            
            return redirect()->route('dashboard');
            // dd(Auth::user());
        }else{
            // echo "err0r";
            return redirect()->route('login')->with('message','Username Atau Password Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message','Berhasil Logout');
    }

}
