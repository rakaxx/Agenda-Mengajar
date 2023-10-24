@extends('layouts.indexAdmin')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Mata Pelajaran</h1>
      </div>
    </div>
  </div>
</div>

<form method="POST" action="{{ url('mapel/'.$model->id.'/edit') }}"> 
@csrf
<input type="hidden" name="_method" value="PATCH">
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Mata Pelajaran" value="{{ $model->nama }}">
                </div>
              </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('admin/mapel') }}" class="btn btn-warning">Kembali</a>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</form>
@endsection