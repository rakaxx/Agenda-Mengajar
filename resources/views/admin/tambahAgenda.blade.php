@extends('layouts.indexAdmin')

<title>E-Agenda | Agenda Mengajar</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Agenda</h1>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ url('agenda') }}" autocomplete="off">
        @csrf
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <div class="card card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/profile.jpg') }}"
                                        alt="User profile picture">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-10">
                        <div class="card">
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Mulai</label>
                                                <input type="time" name="waktu_awal" class="form-control" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Selesai</label>
                                                <input type="time" name="waktu_akhir" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label>NIDN</label>
                                                <select class="custom-select" name="nidn" id="nidn" required>
                                                    <option value="">-- Pilih NIDN --</option>
                                                    @foreach ($takun as $key => $value)
                                                        <option value="{{ $value->nidn }}">{{ $value->nidn }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-8">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-2">
                                                <label>Mata Pelajaran</label>
                                                <select class="custom-select" name="kode_mapel" id="kode_mapel" required>
                                                    <option value="">-- Kode --</option>
                                                    @foreach ($tmapel as $key => $value)
                                                        <option value="{{ $value->kode }}">{{ $value->kode }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" name="mapel" id="mapel" readonly/>
                                            </div>
                                            <div class="col-2">
                                                <label>Kelas</label>
                                                <select class="custom-select" name="kode_kelas" id="kode_kelas" required>
                                                    <option value="">-- Kode --</option>
                                                    @foreach ($tkelas as $key => $value)
                                                        <option value="{{ $value->kode }}">{{ $value->kode }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" name="kelas" id="kelas" readonly/>
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

@section('script')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#nidn').change(function () {
            var nidn = $(this).val();
            
            if (nidn !== '') {
                $.ajax({
                    type: 'GET',
                    url: '/get-nama/' + nidn,
                    success: function (data) {
                        $('#nama').val(data.nama);
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            } else {
                $('#nama').val('');
            }
        });
    });

    $(document).ready(function () {
        $('#kode_mapel').change(function () {
            var kode = $(this).val();
            
            if (nidn !== '') {
                $.ajax({
                    type: 'GET',
                    url: '/get-nama-mapel/' + kode,
                    success: function (data) {
                        $('#mapel').val(data.nama);
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            } else {
                $('#mapel').val('');
            }
        });
    });

    $(document).ready(function () {
        $('#kode_kelas').change(function () {
            var kode = $(this).val();
            
            if (nidn !== '') {
                $.ajax({
                    type: 'GET',
                    url: '/get-kelas/' + kode,
                    success: function (data) {
                        $('#kelas').val(data.nama);
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            } else {
                $('#kelas').val('');
            }
        });
    });
</script>
@endsection
