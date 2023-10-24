@extends('layouts.indexGuru')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h1 class="m-0">Agenda Mengajar</h1>
      </div>
    </div>
  </div>
</div>

 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
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
                  <th class="text-center">Tanggal</th>
                  <th>Waktu</th>
                  <th>Nama</th>
                  <th>Mapel</th>
                  <th class="text-center">Kelas</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="text-center">{{ $value->tanggal }}</td>
                  <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                  <td>{{ $value->nama }}</td>
                  <td>{{ $value->mapel }}</td>
                  <td class="text-center">{{ $value->kelas }}</td>
                  <td class="text-center"><a href="{{ url('agenda/'.$value->id.'/edit') }}" class="btn btn-primary">Isi Agenda</a></td>
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