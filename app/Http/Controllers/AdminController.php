<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cetak;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function akun(Request $request){
        // $keyword = $request->keyword;
        // $takun = User::where('name', 'LIKE', '%'.$keyword.'%')
        // ->orwhere('kode', 'LIKE', '%'.$keyword.'%')
        // ->orwhere('role', 'LIKE', '%'.$keyword.'%')
        // ->orwhere('email', 'LIKE', '%'.$keyword.'%')
        // ->paginate();

        // $takun = User::paginate(3);

        $tuser = User::all();
        
        return view('admin.kelolaAkun', compact('tuser'));
    }

    function mapel(){
        $tmapel = Mapel::all();
        
        return view('admin.kelolaMapel', compact('tmapel'));
    }

    function kelas(){ 
        $tkelas = Kelas::all();
        
        return view('admin.kelolaKelas', compact('tkelas'));
    }

    function agenda(){
        $tagenda = Agenda::all();
        
        return view('admin.kelolaAgenda', compact('tagenda'));
    }

    function draf(){
        $tcetak = Cetak::all();

        return view('admin.kelolaDraf', compact('tcetak'));
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

}
