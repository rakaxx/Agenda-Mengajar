@extends('layouts.indexAdmin')

<title>E-Agenda | Kelas</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Kelas</h1>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ url('kelas/' . $model->id . '/edit') }}">
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
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Kode</label>
                                            <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode" value="{{ $model->kode }}" required>
                                        </div>
                                        <div class="col-sm-8">
                                            <label>Kelas</label>
                                            <input type="text" class="form-control" name="nama"
                                                placeholder="Masukkan Kelas" value="{{ $model->nama }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ion-android-done"> Simpan</button>
                            <a href="{{ url('admin/kelas') }}" class="btn btn-warning ion-ios-arrow-back"> Kembali</a>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </form>
@endsection
