@extends('layouts.indexAdmin')

<title>E-Agenda | Agenda Mengajar</title>

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb">
      <div class="col-sm-6">
        <h1 class="m-0">Kelola Agenda</h1>
      </div>
    </div>
  </div>
</div>

 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="form-group">
        <div class="row">
          <div class="col-6">
  
          </div>
          <div class="col-6">
            <a href="{{ url('admin/agenda/tambah') }}" class="btn btn-primary float-right ion-ios-plus-outline"> Buat Agenda</a>
          </div>
        </div>
      </div>

      @php
      $no = 1;
      @endphp
      @foreach ($tagenda as $key => $value)
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Nama</th>
                  <th>Mapel</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $value->tanggal }}</td>
                    <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->mapel }}</td>
                    <td>{{ $value->kelas }}</td>
                    <td class="text-center">
                      <form method="POST" action="{{ url('agenda/'. $value->id) }}">
                      @csrf
                      <a href="{{ url('agenda/'.$value->id.'/edit') }}" class="btn btn-success ion-edit"> Edit</a>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-danger ion-android-delete"> Hapus</button>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      @endforeach
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
    
@endsection