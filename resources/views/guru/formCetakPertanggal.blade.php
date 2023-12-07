<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Cetak</title>

    @include('partials.link')


</head>

<body id="page-top">

    <center><img src="{{ asset('img/logo.png') }}" style="width: 10%"></center><br>
    <h3>
        <center>Laporan Agenda Mengajar</center>
    </h3>
    <h4>
        <center>SMK Dharma Kusuma</center>
    </h4><br>

    <div class="card-body">
        <h5>Nama : {{ auth()->user()->nama }}</h5>
        <h5>NIDN : {{ auth()->user()->nidn }}</h5><br>
        <table class="table table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Mata Pelajaran</th>
                    <th>Materi Pokok</th>
                    <th>Kelas</th>
                    <th>Jumlah Siswa</th>
                    <th>Hadir</th>
                    <th>S</th>
                    <th>I</th>
                    <th>TP</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($tcetak as $key => $value)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $value->tanggal }}</td>
                        <td>{{ $value->waktu_awal }} - {{ $value->waktu_akhir }}</td>
                        <td>{{ $value->mapel }}</td>
                        <td>{{ $value->materi }}</td>
                        <td>{{ $value->kelas }}</td>
                        <td>{{ $value->jumlah_siswa }}</td>
                        <td>{{ $value->hadir }}</td>
                        <td>{{ $value->sakit }}</td>
                        <td>{{ $value->izin }}</td>
                        <td>{{ $value->tanpa_ket }}</td>
                    </tr>
                @endforeach
        </table>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4" style="">
                    <center>
                        <br><br>
                        <h5>Mengetahui,</h5>
                        <h5>Kepsek SMK Dharma Kusuma</h5>
                        <br><br><br><br>
                        <h5>Kepala Sekolah</h5>
                        <h5>NIP: 127816375391391</h5>
                    </center>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <center>
                        <br><br>
                        <h5>Cianjur, 07 December 2023</h5>
                        <h5>Guru Mata Pelajaran</h5>
                        <br><br><br><br>
                        <h5>Nama Guru</h5>
                        <h5>NIP: 127816375391391    </h5>
                    </center>
                </div>
            </div>
        </div>
    </div>


    @include('partials.script')

    <Script type="text/javascript">
        window.print();
    </Script>

</body>

</html>
