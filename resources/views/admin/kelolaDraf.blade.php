@extends('layouts.indexAdmin')

<title>E-Agenda | Draf Agenda</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1 class="m-0">Draf Agenda Guru</h1>
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
                                        <th class="text-center">No</th>
                                        <th class="text-center">Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Nama</th>
                                        <th>Mapel</th>
                                        <th>Materi</th>
                                        <th class="text-center">Kelas</th>
                                        <th class="text-center">Siswa Hadir</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($tcetak as $key => $value)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td class="text-center">{{ $value->tanggal }}</td>
                                            <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->mapel }}</td>
                                            <td>{{ $value->materi }}</td>
                                            <td class="text-center">{{ $value->kelas }}</td>
                                            <td class="text-center">{{ $value->hadir }}</td>
                                            <td class="text-center"><a href="{{ url('cetak/' . $value->id . '/view') }}"
                                                    class="btn btn-info ion-eye"> View</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="margin-top: 10px">
                                {{ $tcetak->links('vendor.pagination.bootstrap-4') }}
                            </div>
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
