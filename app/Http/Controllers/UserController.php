<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PDF;

class UserController extends Controller
{
    
    public function index(){
        
        // $this->middleware('admin');
        
    
        $data = User::paginate(3);
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
            'nik'=>'required|unique:users|max:16|min:16',
            'username'=>'required|unique:users',
            'nama'=>'required',
            'email'=>'required|unique:users',
            'role'=>'required',
            'password' => 'required|confirmed|min:6'
            
        ]); 

        $password = $request->password;
        $data = [
            'nik'=> $request->nik,
            'role'=> $request->role,
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
        // dd($data->nik);
        return view('profile.edit',compact('data'));
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
        
        return redirect()->route('user.show',$id);
    }

    public function delete($id)
    {
        $where = User::find($id);

        $where->delete();

        return redirect()->route('user.data');
    }

    public function cetak_pdf()
    {
    	// $user = User::where('role','user')->get();
        $user = User::all();
    	$pdf = PDF::loadview('user_pdf',['user'=>$user]);
    	// return $pdf->download('laporan-user.pdf');
        return $pdf->stream();
    }

    public function detail($id)
    {
        $data = User::find($id);
        return view('profile.detail',compact('data'));
    }
}
