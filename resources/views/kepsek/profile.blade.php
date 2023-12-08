@extends('layouts.indexKepsek')

<title>E-Agenda | Dashboard</title>

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{ asset('img/profile.jpg') }}"
                   alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{ auth()->user()->nama }}</h3>

            <p class="text-muted text-center">{{ auth()->user()->nidn }}</p>

            <a href="#" class="btn btn-primary btn-block"><b>Change Photo</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      @foreach ($tprofile as $key => $value)
          <div class="col-md-9">
        <div class="card">
         <div class="card-body">
          <div class="form-group">
            <label>NIDN</label>
            <input type="text" class="form-control" name="nidn" value="{{ $value->nidn }}" readonly>
          </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="{{ $value->nama }}" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="{{ $value->email }}" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" value="{{ $value->password }}" placeholder="Masukkan Password">
            </div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
      @endforeach
    <div class="form-group">
      <a href="{{ url('kepsek/dashboard') }}" class="btn btn-warning ion-ios-arrow-back float-right"> Kembali</a>
      <button type="submit" class="btn btn-primary ion-android-done float-right" style="margin-right: 10px"> Simpan</button>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection