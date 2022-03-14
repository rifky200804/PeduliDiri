<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kota;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index(){
        $data = User::all();
        return view('profile.index',compact('data'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'role'=>'required'
        ]); 

        $password = $request->password;
        $data = [
            'nik'=> $request->nik,
            
            'nama'=> $request->nama,
            'email' => $request->email,
            'username'=> $request->username,
            'password'=> Hash::make($password),
            'confirm_password'=> $request->confirm_password,
            'remember_token'=> Str::random(32)
        ];

        // dd($data);
        // die;

        User::create($data);
        
        return redirect()->route('user.data');
    }

    public function show($id){

        $data = User::find($id);
        return view('profile.show',compact('data'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        $kota = Kota::all();
        // dd($data->nik);
        return view('profile.edit',compact('data','kota'));
    }

    public function update(Request $request, $id)
    {
        
       
        // dd($request->id_kota);
        // die;
        if($request->foto > 0)
        {    
            $foto = $request->foto;
            $v_foto = time().rand(100,999)."-".$foto->getClientOriginalName();
        }

        // dd($v_foto);
        // die;
        
        $where = User::find($id);
        // dd($request->alamat);

        $data = [
            'nik'=> $request->nik,
            'nama'=> $request->nama,
            'telp'=> $request->telp,
            'email'=> $request->email,
            'alamat' => $request->alamat,
        ];

        

        if($request->foto > 0 && isset($v_foto)){
            $where->foto = $v_foto;
        }

        if(isset($v_foto) > 0){
            $foto->move(public_path().'/foto',$v_foto);
        }


        $where->update($data);
        
        return redirect()->route('user.edit',$id);
    }

    public function delete($id)
    {
        $where = User::find($id);

        $where->delete();

        return redirect()->route('user.data');
    }
}
