<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cetak;
use App\Models\Draf;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultiController extends Controller
{
    function admin(){
        $jumlah_akun = User::all()->count();
        $jumlah_mapel = Mapel::all()->count();
        $jumlah_kelas = Kelas::all()->count();
        $jumlah_agenda = Agenda::all()->count();
        $jumlah_cetak = Cetak::all()->count();
        
        return view('admin.dashboard', compact('jumlah_akun', 'jumlah_mapel', 'jumlah_kelas', 'jumlah_agenda', 'jumlah_cetak'));
    }

    function guru(){
        $nidn = Auth::user()->nidn;
        $jumlah_agenda = Agenda::where('nidn', $nidn)->get()->count();
        $jumlah_draf = Draf::where('nidn', $nidn)->get()->count();
        $jumlah_cetak = Cetak::where('nidn', $nidn)->get()->count();
        
        return view('guru.dashboard', compact('jumlah_agenda', 'jumlah_draf', 'jumlah_cetak'));
    }

    function kepalasekolah(){
        $jumlah_draf = Draf::all()->count();
        $jumlah_cetak = Cetak::all()->count();
        
        return view('kepsek.dashboard', compact('jumlah_draf', 'jumlah_cetak'));
    }

    function about(){
        return view('about');
    }
}
