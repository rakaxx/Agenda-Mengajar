<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cetak;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function akun(Request $request){
        // $keyword = $request->keyword;
        // $takun = User::where('name', 'LIKE', '%'.$keyword.'%')
        // ->orwhere('kode', 'LIKE', '%'.$keyword.'%')
        // ->orwhere('role', 'LIKE', '%'.$keyword.'%')
        // ->orwhere('email', 'LIKE', '%'.$keyword.'%')
        // ->paginate();

        $tuser = User::paginate(5);
        
        return view('admin.kelolaAkun', compact('tuser'));
    }

    function mapel(){
        $tmapel = Mapel::paginate(5);
        
        return view('admin.kelolaMapel', compact('tmapel'));
    }

    function kelas(){ 
        $tkelas = Kelas::paginate(5);
        // $tkelas = Kelas::all();
        
        return view('admin.kelolaKelas', compact('tkelas'));
    }

    function agenda(){
        $tagenda = Agenda::all();
        
        return view('admin.kelolaAgenda', compact('tagenda'));
    }

    function draf(){
        $tcetak = Cetak::paginate(10);

        return view('admin.kelolaDraf', compact('tcetak'));
    }

    function profile(){
        $nidn = Auth::user()->nidn;
        $tprofile = User::where('nidn', $nidn)->get();

        return view('admin.profile', compact('tprofile'));
    }



    function tambahAkun(){
        return view('admin.tambahAkun');
    }

    function tambahMapel(){
        return view('admin.tambahMapel');
    }

    function tambahKelas(){
        return view('admin.tambahKelas');
    }

    function tambahAgenda(){
        $takun = User::all();
        $tmapel = Mapel::all();
        $tkelas = Kelas::all();
        
        return view('admin.tambahAgenda', compact('takun', 'tmapel', 'tkelas'));
    }

    function get_nama($nidn){
        $nama = User::where('nidn', $nidn)->value('nama');

        return response()->json(['nama' => $nama]);
    }

    function get_nama_mapel($kode){
        $nama = Mapel::where('kode', $kode)->value('nama');

        return response()->json(['nama' => $nama]);
    }

    function get_kelas($kode){
        $nama = Kelas::where('kode', $kode)->value('nama');

        return response()->json(['nama' => $nama]);
    }
}
