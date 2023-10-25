<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cetak;
use App\Models\Draf;
use App\Models\User;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Auth;
class GuruController extends Controller
{
    function agenda(){
        $nidn = Auth::user()->nidn;
        $tagenda = Agenda::where('nidn', $nidn)->get();
        
        return view('guru.agenda', compact('tagenda'));
    }


    function draf(){
        $nidn = Auth::user()->nidn;
        $tdraf = Draf::where('nidn', $nidn)->get();
        
        return view('guru.draf', compact('tdraf'));
    }


    function cetak(){
        $nidn = Auth::user()->nidn;
        $tcetak = Cetak::where('nidn', $nidn)->get();
        
        return view('guru.cetak', compact('tcetak'));
    }

    function profile(){
        $nidn = Auth::user()->nidn;
        $tprofile = User::where('nidn', $nidn)->get();

        return view('guru.profile', compact('tprofile'));
    }





    function isiAgenda(){
        return view('guru.isiAgenda');
    }
    
}
