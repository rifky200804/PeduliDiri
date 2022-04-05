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
        if(Auth::user()->role == 'admin'){
            $data = Perjalanan::orderBy('id_perjalanan','desc')->paginate(3);
        }else{
            $id = Auth::user()->id;
            $data = Perjalanan::where('id_user',$id)->orderBy('id_perjalanan','desc')->paginate(3);
        }
        // $id = Auth::user()->id;
        // $data = Perjalanan::where('id_user',$id)->get();
        return view('perjalanan.index', compact('data'));
    }

    public function create(){
        return view('perjalanan.create');
    }

    public function saveData(Request $request){
        // dd(Auth::user()->id);
        if (Auth::user()->role == 'admin') {
            $request->validate([
                'tanggal' => 'required',
                'jam' => 'required',
                'lokasi' => 'required',
                'suhu_tubuh' => 'required',
                'nik_user' => 'required'
            ]);
        }else{
            $request->validate([
                'tanggal'=>'required',
                'jam'=>'required',
                'lokasi'=>'required',
                'suhu_tubuh'=>'required'
            ]);
        }

        if(isset($request->nik_user) > 0){
            $nik = $request->nik_user;
            $id = User::where('nik',$nik)->first();
            // dd($id->id);
            if($id != NULL){
                $user = $id->id;
            }else {
                return back()->with('message','Anda Gagal Menambahkan Data');
            }
            // dd($user);
            
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
        return redirect()->route('perjalanan.data')->with('success','Success Menambahkan Data');
    }
    public function delete($id){
        $where = Perjalanan::find($id);
        $where->delete();
        return redirect()->route('perjalanan.data')->with('message','Success menghapus Data');
    }
    
}
