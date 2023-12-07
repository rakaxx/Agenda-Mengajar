@extends('layouts.indexAdmin')

<title>E-Agenda | Akun</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Akun</h1>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ url('user') }}" enctype="multipart/form-data" autocomplete="off">
        @csrf
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
                                            <div class="col-sm-3">
                                                <label>Role</label>
                                                <select class="custom-select" name="role" required>
                                                    <option value="guru">Guru</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="kepalasekolah">Kepala Sekolah</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-9">
                                                <label>NIDN</label>
                                                <input type="text" class="form-control" name="nidn"
                                                    placeholder="Masukkan NIDN" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama"
                                            placeholder="Masukkan Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Masukkan Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Masukkan Nama" value="12345" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <br>
                                        <input type="file" name="foto" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ion-android-done"> Simpan</button>
                            <a href="{{ url('admin/akun') }}" class="btn btn-warning ion-ios-arrow-back"> Kembali</a>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </form>
@endsection
