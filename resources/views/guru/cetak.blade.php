@extends('layouts.indexGuru')

<title>E-Agenda | Cetak Agenda</title>

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb">
      <div class="col-sm-6">
        <h1 class="m-0">Cetak Agenda</h1>
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
            <a href="{{ url('guru/cetak/cetak-semua') }}" class="btn btn-success float-right ion-printer" target="_blank"> Cetak Semua</a>
            <a href="{{ url('guru/cetak/cetak-semua') }}" class="btn btn-warning float-right ion-ios-calendar" style="margin-right: 10px"> Cetak Pertanggal</a>
          </div>
        </div>
      </div>

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
                  <th>Mapel</th>
                  <th>Materi</th>
                  <th class="text-center">Kelas</th>
                  <th class="text-center">Siswa Hadir</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($tcetak as $key => $value)
                  <tr>
                    <td class="text-center">{{ $value->tanggal }}</td>
                    <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                    <td>{{ $value->mapel }}</td>
                    <td>{{ $value->materi }}</td>
                    <td class="text-center">{{ $value->kelas }}</td>
                    <td class="text-center">{{ $value->hadir }}</td>
                    <td class="text-center"><a href="{{ url('cetak/'.$value->id.'/view') }}" class="btn btn-info ion-eye"> View</a></td>
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