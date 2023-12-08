<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User;
        return view('admin.tambahAkun', compact(
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
        $validateData = $request->validate([
            'foto' => 'mimes:jpg,png,jpeg|image|max:2048'
        ]);

        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('uploads');
        }else{
            $path = '';
        }

        $model = new User;
        $model->role = $request->role;
        $model->nidn = $request->nidn;
        $model->nama = $request->nama;
        $model->foto = $path;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->password = bcrypt($model['password']);
        $model->save();
        return redirect('admin/akun')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::find($id);
        $model->delete();
        return redirect('admin/akun')->with('toast_success', 'Data Berhasil Dihapus');;
    }
}
