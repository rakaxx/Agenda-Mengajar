@extends('layouts.indexGuru')

<title>E-Agenda | Cetak Agenda</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb">
                <div class="col-sm-6">
                    <h1 class="m-0">Cetak Agenda (Pertanggal)</h1>
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
                            <div class="form-group">
                                <label>Tanggal Awal</label>
                                <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <a href="" onclick="this.href='/guru/cetak/pertanggal/' + document.getElementById('tanggal_awal').value + '/' + document.getElementById('tanggal_akhir').value" target="_blank" class="btn btn-primary ion-ios-calendar"> Cetak</a>
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
