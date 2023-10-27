@extends('layouts.indexGuru')

<title>E-Agenda | Draf Agenda</title>

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h1 class="m-0">Draf Agenda</h1>
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
                  <th class="text-center">Tanggal</th>
                  <th>Mapel</th>
                  <th>Materi</th>
                  <th class="text-center">Kelas</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($tdraf as $key => $value)
                  <tr>
                    <td class="text-center">{{ $value->tanggal }}</td>
                    <td>{{ $value->mapel }}</td>
                    <td>{{ $value->materi }}</td>
                    <td class="text-center">{{ $value->kelas }}</td>
                    <td class="text-center">Belum Diterima</td>
                    <td class="text-center">
                      <form method="POST" action="{{ url('draf/'. $value->id) }}" style="margin: 0; padding: 0;">
                       @csrf
                      <a href="{{ url('draf/'.$value->id.'/view') }}" class="btn btn-info ion-eye"> View</a>
                      <a href="{{ url('draf/'.$value->id.'/edit') }}" class="btn btn-success ion-edit"> Edit</a>
                      
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger ion-android-delete"> Hapus</button>
                    </form>
                    </td>
                  </tr>
                  @endforeacH
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
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
    
@endsection