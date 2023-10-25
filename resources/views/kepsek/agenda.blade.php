@extends('layouts.indexKepsek')

<title>E-Agenda | Agenda Mengajar</title>

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h1 class="m-0">Persetujuan Agenda</h1>
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
                  <th>Waktu</th>
                  <th>Nama</th>
                  <th>Mapel</th>
                  <th class="text-center">Kelas</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($tdraf as $key => $value)
                  <tr>
                    <td class="text-center">{{ $value->tanggal }}</td>
                    <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->mapel }}</td>
                    <td class="text-center">{{ $value->kelas }}</td>
                    <td class="text-center">Belum Diterima</td>
                    <td class="text-center"><a href="{{ url('draf/'.$value->id.'/edit') }}" class="btn btn-info ion-eye"> View</a></td>
                  </tr>
                  @endforeach
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