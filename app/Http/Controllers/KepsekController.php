<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use App\Models\Draf;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepsekController extends Controller
{
    function agenda(){
        $tdraf = Draf::all();
        
        return view('kepsek.agenda', compact('tdraf'));
    }

    function draf(){
        $tcetak = Cetak::all();

        return view('kepsek.draf', compact('tcetak'));
    }

    function profile(){
        $nidn = Auth::user()->nidn;
        $tprofile = User::where('nidn', $nidn)->get();

        return view('kepsek.profile', compact('tprofile'));
    }

}
