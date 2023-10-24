@extends('layouts.indexAdmin')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h1 class="m-0">Lihat Agenda</h1>
      </div>
    </div>
  </div>
</div>

<form method="POST" action="{{ url('cetak/'.$model->id.'/view') }}" autocomplete="off">
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
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $model->tanggal }}" readonly>
                      </div>
                      <div class="col-sm-3">
                        <label>Mulai</label>
                        <input type="time" name="waktu_awal" class="form-control" value="{{ $model->waktu_awal }}" readonly>
                      </div>
                      <div class="col-sm-3">
                        <label>Selesai</label>
                        <input type="time" name="waktu_akhir" class="form-control" value="{{ $model->waktu_akhir }}" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                          <label>NIDN</label>
                          <input type="text" name="nidn" class="form-control" value="{{ $model->nidn }}" readonly>
                        </div>
                        <div class="col-8">
                          <label>Nama</label>
                          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="{{ $model->nama }}" readonly>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                          <label>Mata Pelajaran</label>
                          <input type="text" name="mapel" class="form-control" value="{{ $model->mapel }}" readonly>
                        </div>
                        <div class="col-6">
                          <label>Kelas</label>
                          <input type="text" name="kelas" class="form-control" value="{{ $model->kelas }}" readonly>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Materi</label>
                    <input type="text" class="form-control" name="materi" placeholder="Masukkan Materi" value="{{ $model->materi }}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Jumlah Siswa</label>
                    <input type="text" class="form-control" name="jumlah_siswa" placeholder="Masukkan Jumlah Siswa" value="{{ $model->jumlah_siswa }}" readonly>
                  </div>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                          <label>Siswa Hadir</label>
                          <input type="text" class="form-control" name="hadir" placeholder="Jumlah Siswa Hadir" value="{{ $model->hadir }}" readonly>
                        </div>
                        <div class="col-3">
                          <label>Siswa Sakit</label>
                          <input type="text" class="form-control" name="sakit" placeholder="Jumlah Siswa Sakit" value="{{ $model->sakit }}" readonly>
                        </div>
                        <div class="col-3">
                          <label>Siswa Izin</label>
                          <input type="text" class="form-control" name="izin" placeholder="Jumlah Izin" value="{{ $model->izin }}" readonly>
                        </div>
                        <div class="col-3">
                          <label>Siswa Tanpa Keterangan</label>
                          <input type="text" class="form-control" name="tanpa_ket" placeholder="Jumlah Siswa Tanpa Ket" value="{{ $model->tanpa_ket }}" readonly>
                        </div>
                    </div>
                  </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="form-group">
        <a href="{{ url('admin/draf') }}" class="btn btn-warning">Kembali</a>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</form>
@endsection