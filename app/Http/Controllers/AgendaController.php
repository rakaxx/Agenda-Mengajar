<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Draf;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Agenda();
        return view('admin.tambahAgenda', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Agenda;
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
        return redirect('admin/agenda')->with('toast_success', 'Agenda Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Agenda::find($id);
        $tmapel = Mapel::all();
        $tkelas = Kelas::all();
        
        if (Auth::user()->role == 'guru') {
            return view('guru.isiAgenda', compact('model', 'tmapel', 'tkelas'));
        }elseif (Auth::user()->role == 'admin') {
            return view('admin.editAgenda', compact('model', 'tmapel', 'tkelas'));
        }elseif (Auth::user()->role == 'kepalasekolah') {
            return view('kepsek.validasiAgenda', compact('model' , 'tmapel', 'tkelas'));
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
        $model = Agenda::find($id);
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
            $model = new Draf();
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

            $model = Agenda::find($id);
            $model->delete();
<<<<<<< HEAD
            return redirect('guru/agenda');
        }elseif (Auth::user()->role == 'admin') {
            return redirect('admin/agenda');
=======
            return redirect('guru/draf')->with('toast_success', 'Agenda Berhasil Diisi');;
        }elseif (Auth::user()->role == 'admin') {
            return redirect('admin/agenda')->with('toast_success', 'Agenda Berhasil Diubah');
>>>>>>> 63745d8c70cd44214fce2470e64a0cd6d9a649f3
        }elseif (Auth::user()->role == 'kepalasekolah') {
            return redirect('kepsek/agenda');
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
        $model = Agenda::find($id);
        $model->delete();
<<<<<<< HEAD
        return redirect('admin/agenda');
=======
        return redirect('admin/agenda')->with('toast_success', 'Agenda Berhasil Dihapus');;
>>>>>>> 63745d8c70cd44214fce2470e64a0cd6d9a649f3
    }
}
