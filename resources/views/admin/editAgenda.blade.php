@extends('layouts.indexAdmin')

<title>E-Agenda | Agenda Mengajar</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Agenda</h1>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ url('agenda/' . $model->id . '/edit') }}">
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
                                                <input type="date" name="tanggal" class="form-control"
                                                    value="{{ $model->tanggal }}">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Mulai</label>
                                                <input type="time" name="waktu_awal" class="form-control"
                                                    value="{{ $model->waktu_awal }}">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Selesai</label>
                                                <input type="time" name="waktu_akhir" class="form-control"
                                                    value="{{ $model->waktu_akhir }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label>NIDN</label>
                                                <input type="text" name="nidn" class="form-control"
                                                    value="{{ $model->nidn }}" readonly>
                                            </div>
                                            <div class="col-8">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama"
                                                    placeholder="Masukkan Nama" value="{{ $model->nama }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-2">
                                                <label>Mata Pelajaran</label>
                                                <select class="custom-select" name="kode_mapel" required>
                                                    @foreach ($tmapel as $key => $value)
                                                        <option value="{{ $value->kode }}">{{ $value->kode }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>‎</label>
                                                <select class="custom-select" name="mapel" required>
                                                    @foreach ($tmapel as $key => $value)
                                                        <option value="{{ $value->nama }}">{{ $value->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label>Kelas</label>
                                                <select class="custom-select" name="kode_kelas" required>
                                                    @foreach ($tkelas as $key => $value)
                                                        <option value="{{ $value->kode }}">{{ $value->kode }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>‎</label>
                                                <select class="custom-select" name="kelas" required>
                                                    @foreach ($tkelas as $key => $value)
                                                        <option value="{{ $value->nama }}">{{ $value->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Materi</label>
                                        <input type="text" class="form-control" name="materi"
                                            placeholder="Masukkan Materi" value="Materi" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Siswa</label>
                                        <input type="text" class="form-control" name="jumlah_siswa"
                                            placeholder="Masukkan Jumlah Siswa" value="Jumlah Siswa" readonly>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-3">
                                                <label>Siswa Hadir</label>
                                                <input type="text" class="form-control" name="hadir"
                                                    placeholder="Jumlah Siswa Hadir" value="Siswa Hadir" readonly>
                                            </div>
                                            <div class="col-3">
                                                <label>Siswa Sakit</label>
                                                <input type="text" class="form-control" name="sakit"
                                                    placeholder="Jumlah Siswa Sakit" value="Jumlah Sakit" readonly>
                                            </div>
                                            <div class="col-3">
                                                <label>Siswa Izin</label>
                                                <input type="text" class="form-control" name="izin"
                                                    placeholder="Jumlah Izin" value="Jumlah Izin" readonly>
                                            </div>
                                            <div class="col-3">
                                                <label>Siswa Tanpa Keterangan</label>
                                                <input type="text" class="form-control" name="tanpa_ket"
                                                    placeholder="Jumlah Siswa Tanpa Ket" value="Jumlah Tanpa Ket" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ion-android-done"> Simpan</button>
                            <a href="{{ url('admin/agenda') }}" class="btn btn-warning ion-ios-arrow-back"> Kembali</a>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </form>
@endsection
