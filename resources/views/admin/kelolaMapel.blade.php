@extends('layouts.indexAdmin')

<title>E-Agenda | Mata Pelajaran</title>

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h1 class="m-0">Kelola Mata Pelajaran</h1>
      </div>
    </div>
  </div>
</div>

 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Mata Pelajaran</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($tmapel as $key => $value)
                  <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $value->nama }}</td>
                    <td class="text-center">
                      <form method="POST" action="{{ url('mapel/'. $value->id) }}">
                      @csrf
                      <a href="{{ url('mapel/'.$value->id.'/edit') }}" class="btn btn-success ion-edit"> Edit</a>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger ion-android-delete"> Hapus</button>
                      </form>
                    </td>
                  </tr>
                  </tbody>
                  @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="form-group">
            <a href="{{ url('admin/mapel/tambah') }}" class="btn btn-primary ion-ios-plus-outline"> Tambah Mapel</a>
          </div>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
    
@endsection