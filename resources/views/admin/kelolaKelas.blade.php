@extends('layouts.indexAdmin')

<title>E-Agenda | Kelas</title>

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola Kelas</h1>
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
                                        <th class="text-center">Kode</th>
                                        <th>Kelas</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($tkelas as $key => $value)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td class="text-center">{{ $value->kode }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td class="text-center">
                                                <form method="POST" action="{{ url('kelas/' . $value->id) }}" style="margin: 0; padding: 0;">
                                                    @csrf
                                                    <a href="{{ url('kelas/' . $value->id . '/edit') }}"
                                                        class="btn btn-success ion-edit"> Edit</a>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger ion-android-delete">
                                                        Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <div style="margin-top: 10px">
                                {{ $tkelas->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    <div class="form-group">
                        <a href="{{ url('admin/kelas/tambah') }}" class="btn btn-primary ion-ios-plus-outline"> Tambah
                            Kelas</a>
                    </div>
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
