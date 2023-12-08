<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Mapel;
        return view('admin.tambahMapel', compact(
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
        $model = new Mapel;
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        $model->save();
        return redirect('admin/mapel');
        return redirect('admin/mapel')->with('toast_success', 'Data Berhasil Disimpan');
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
        $model = Mapel::find($id);
        return view('admin.editMapel', compact(
            'model'
        ));
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
        $model = Mapel::find($id);
        $model->kode = $request->kode;
        $model->nama = $request->nama;
        $model->save();
        return redirect('admin/mapel')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Mapel::find($id);
        $model->delete();
<<<<<<< HEAD
        return redirect('admin/mapel');
=======
        return redirect('admin/mapel')->with('toast_success', 'Data Berhasil Dihapus');
>>>>>>> 63745d8c70cd44214fce2470e64a0cd6d9a649f3
    }
}
