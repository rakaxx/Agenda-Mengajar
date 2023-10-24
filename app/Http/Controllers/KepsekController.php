<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use App\Models\Draf;
use Illuminate\Http\Request;

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
}
