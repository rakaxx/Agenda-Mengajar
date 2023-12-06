@extends('layouts.indexAdmin')

<title>E-Agenda | Agenda Mengajar</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb">
                <div class="col-sm-6">
                    <h1 class="m-0">Agenda Mengajar</h1>
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
                        <a href="{{ url('admin/agenda/tambah') }}" class="btn btn-primary float-right ion-ios-plus-outline">
                            Buat Agenda</a>
                    </div>
                </div>
            </div>

            @php
                $no = 1;
                
            @endphp

            @foreach ($tagenda as $key => $value)
                @php
                    $currentTime = now()->timezone('Asia/Jakarta');
                    $waktuAwal = Carbon\Carbon::createFromFormat('H:i:s', $value->waktu_awal, 'Asia/Jakarta');
                    $waktuAkhir = Carbon\Carbon::createFromFormat('H:i:s', $value->waktu_akhir, 'Asia/Jakarta');
                    $expire_date
                @endphp
                
                @if ($currentTime < $waktuAwal)
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Nama</th>
                                            <th>Mapel</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $value->tanggal }}</td>
                                            <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->mapel }}</td>
                                            <td class="text-center">{{ $value->kelas }}</td>
                                            <td class="text-center">
                                                <form method="POST" action="{{ url('agenda/' . $value->id) }}"
                                                    style="margin: 0; padding: 0;">
                                                    @csrf
                                                    <a href="{{ url('agenda/' . $value->id . '/edit') }}"
                                                        class="btn btn-success ion-edit" disabled> Edit</a>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit"
                                                        class="btn btn-danger ion-android-delete">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>                
                @elseif ($currentTime >= $waktuAwal && $currentTime <= $waktuAkhir)
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Nama</th>
                                            <th>Mapel</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $value->tanggal }}</td>
                                            <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->mapel }}</td>
                                            <td class="text-center">{{ $value->kelas }}</td>
                                            <td class="text-center">
                                                <form method="POST" action="{{ url('agenda/' . $value->id) }}"
                                                    style="margin: 0; padding: 0;">
                                                    @csrf
                                                    <a href="{{ url('agenda/' . $value->id . '/edit') }}"
                                                        class="btn btn-success ion-edit" > Edit</a>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit"
                                                        class="btn btn-danger ion-android-delete" >Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>          
                @elseif ($currentTime > $waktuAkhir)   
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Nama</th>
                                            <th>Mapel</th>
                                            <th class="text-center">Kelas</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $value->tanggal }}</td>
                                            <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->mapel }}</td>
                                            <td class="text-center">{{ $value->kelas }}</td>
                                            <td class="text-center">
                                                <button type="submit"
                                                        class="btn btn-warning" disabled>X Expired</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>          
                @endif

            @endforeach
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
