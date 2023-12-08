<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use App\Models\Draf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrafController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Draf::find($id);

        return view('guru.lihatDraf', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Draf::find($id);
        
        
        if (Auth::user()->role == 'guru') {
            return view('guru.editDraf', compact('model'));
        }elseif (Auth::user()->role == 'kepalasekolah') {
            return view('kepsek.lihatAgenda', compact('model'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
         
        $model = Draf::find($id);
        $model->tanggal = $request->tanggal;
        $model->waktu_awal = $request->waktu_awal;
        $model->waktu_akhir = $request->waktu_akhir;
        $model->nidn = $request->nidn;
        $model->nama = $request->nama;
        $model->kode_mapel = $request->kode_mapel;
        $model->mapel = $request->mapel;
        $model->kode_kelas = $request->kode_kelas;
        $model->kelas = $request->kelas;
        $model->materi = $request->materi;
        $model->jumlah_siswa = $request->jumlah_siswa;
        $model->hadir = $request->hadir;
        $model->sakit = $request->sakit;
        $model->izin = $request->izin;
        $model->tanpa_ket = $request->tanpa_ket;
        $model->save();

        if (Auth::user()->role == 'guru') { 
            return redirect('guru/draf')->with('toast_success', 'Agenda Berhasil Diubah');
        }elseif (Auth::user()->role == 'admin') {
            return redirect('admin/agenda');
        }elseif (Auth::user()->role == 'kepalasekolah') {
            $model = new Cetak();
            $model->tanggal = $request->tanggal;
            $model->waktu_awal = $request->waktu_awal;
            $model->waktu_akhir = $request->waktu_akhir;
            $model->nidn = $request->nidn;
            $model->nama = $request->nama;
            $model->kode_mapel = $request->kode_mapel;
            $model->mapel = $request->mapel;
            $model->kode_kelas = $request->kode_kelas;
            $model->kelas = $request->kelas;
            $model->materi = $request->materi;
            $model->jumlah_siswa = $request->jumlah_siswa;
            $model->hadir = $request->hadir;
            $model->sakit = $request->sakit;
            $model->izin = $request->izin;
            $model->tanpa_ket = $request->tanpa_ket;
            $model->save();

            $model = Draf::find($id);
            $model->delete();

            return redirect('kepsek/agenda')->with('toast_success', 'Agenda Berhasil Ditandatangan');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Draf::find($id);
        $model->delete();
        return redirect('guru/draf')->with('toast_success', 'Agenda Berhasil Dihapus');
    }
}
