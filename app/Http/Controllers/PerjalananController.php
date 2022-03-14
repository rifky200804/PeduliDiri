<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perjalanan;
use App\User;
use Illuminate\Support\Facades\Auth;
class PerjalananController extends Controller
{
    public function getData(){
        // 'admin' atau 'user'
        // if(Auth::user()->role == 'admin'){
        //     $data = Perjalanan::all();
        //     $users = User::all();
        // }else{
        //     $id = Auth::user()->id;
        //     $data = Perjalanan::where('id_user',$id)->get();
        //     $users = User::all();
        // }
        $id = Auth::user()->id;
        $data = Perjalanan::where('id_user',$id)->get();
        return view('perjalanan.index', compact('data'));
    }

    public function create(){
        return view('perjalanan.create');
    }

    public function saveData(Request $request){
        // dd(Auth::user()->id);
        if(isset($request->id_user) > 0){
            $user = $request->id_user;
        }else{
            $user = Auth::user()->id;
        }

        $data = [
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu_tubuh'=>$request->suhu_tubuh,
            'id_user'=> $user
        ];
        Perjalanan::create($data);
        return redirect()->route('perjalanan.data')->with('message','Success Menambahkan Data');
    }
    public function delete($id){
        $where = Perjalanan::find($id);
        $where->delete();
        return redirect()->route('perjalanan.data')->with('message','Success menghapus Data');
    }
    
}
