<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perjalanan;
use App\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
class PerjalananController extends Controller
{
    public function getData(Request $request){
        // 'admin' atau 'user'
        $urut = "";
        if(Auth::user()->role == 'admin'){

            
            if(isset($request->urutan)){
                $urut = $request->urutan;
                $data = Perjalanan::where('tanggal','<=',"$urut")->orderBy('id_perjalanan','desc')->get();
                return view('perjalanan.index', compact('data','urut'));
            }else{
                $data = Perjalanan::orderBy('id_perjalanan','desc')->paginate(3);
                return view('perjalanan.index', compact('data'));
            }
        }else{

            $id = Auth::user()->id;
            if(isset($request->urutan)){
                $urut = $request->urutan;
                $data = Perjalanan::where('id_user',$id)->where('tanggal', '<=' ,$urut)->orderBy('id_perjalanan','desc')->get();
                return view('perjalanan.index', compact('data','urut'));
            }else{
                $data = Perjalanan::where('id_user',$id)->orderBy('id_perjalanan','desc')->paginate(3);
                return view('perjalanan.index', compact('data'));
            }
            
        }
        // $id = Auth::user()->id;
        // $data = Perjalanan::where('id_user',$id)->get();
        // return view('perjalanan.index', compact('data'));
    }

    public function create(){
        return view('perjalanan.create');
    }

    public function saveData(Request $request){
        // dd(Auth::user()->id);
            $request->validate([
                'tanggal'=>'required',
                'jam'=>'required',
                'lokasi_awal' => 'required',
                'lokasi_tujuan' => 'required',
                'suhu_tubuh'=>'required'
            ]);
        

            $user = Auth::user()->id;


        $data = [
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi_awal' => $request->lokasi_awal,
            'lokasi_tujuan' => $request->lokasi_tujuan,
            'suhu_tubuh'=>$request->suhu_tubuh,
            'id_user'=> $user
        ];
        Perjalanan::create($data);
        Alert::toast('Success Menambahkan Data', 'success');
        return redirect()->route('perjalanan.data')->with('success','Success Menambahkan Data');
    }
    public function delete($id){
        $where = Perjalanan::find($id);
        $where->delete();
        Alert::toast('Success Menghapus Data', 'success');
        return redirect()->route('perjalanan.data');
    }
    
    public function cetak_pdf()
    {
    	// $user = User::where('role','user')->get();
        if (Auth::user()->role == 'admin') {
            $perjalanan = Perjalanan::all();
            $pdf = PDF::loadview('print.perjalanan_pdf',['perjalanan'=>$perjalanan]);
        }else{
            $perjalanan = Perjalanan::where('id_user',Auth::user()->id)->get();
            $pdf = PDF::loadview('print.perjalanan_pdf',['perjalanan'=>$perjalanan]);
        }
    	// return $pdf->download('laporan-user.pdf');
        return $pdf->stream();
    }
}
