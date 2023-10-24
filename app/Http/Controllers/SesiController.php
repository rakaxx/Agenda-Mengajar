<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'nidn'=>'required',
            'password'=>'required'
        ],[
            'nidn.required'=>'Username wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'nidn' => $request->nidn,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            if (Auth::user()->role == 'guru') {
                return redirect('guru/dashboard');
            }elseif (Auth::user()->role == 'admin') {
                return redirect('admin/dashboard');
            }elseif (Auth::user()->role == 'kepalasekolah') {
                return redirect('kepsek/dashboard');
            }
        }else{
            return redirect('')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        } 
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
