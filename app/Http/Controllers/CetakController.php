<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CetakController extends Controller
{
    public function show($id)
    {
        $model = Cetak::find($id);

        if (Auth::user()->role == 'guru') {
            return view('guru.lihatCetak', compact('model'));
        }elseif (Auth::user()->role == 'admin') {
            return view('admin.lihatDraf', compact('model'));
        }elseif (Auth::user()->role == 'kepalasekolah') {
            return view('kepsek.lihatDraf', compact('model'));
        } 
        
    }
}
