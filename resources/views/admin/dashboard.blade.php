@extends('layouts.indexAdmin')

<title>E-Agenda | Dashboard</title>

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-3">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div>
    </div>
  </div>
</div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlah_akun }}</h3>

                <p>Jumlah Akun</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="{{ url('admin/akun') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlah_mapel }}</h3>

                <p>Jumlah Mata Pelajaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-book"></i>
              </div>
              <a href="{{ url('admin/mapel') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlah_kelas }}</h3>

                <p>Jumlah Kelas</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-box"></i>
              </div>
              <a href="{{ url('admin/kelas') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlah_agenda }}</h3>

                <p>Jumlah Agenda Hari Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-calendar"></i>
              </div>
              <a href="{{ url('admin/agenda') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlah_cetak }}</h3>

                <p>Jumlah Draf Agenda</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-done-all"></i>
              </div>
              <a href="{{ url('admin/draf') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    
@endsection