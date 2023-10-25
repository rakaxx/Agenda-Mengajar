<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Cetak</title>

    @include('partials.guru.link')
    

</head>

<body id="page-top">

    <h3><center>Laporan Agenda Mengajar</center></h3>
    <div class="card-body"> 
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
        </div>
    </div>
    

    @include('partials.guru.script')

    <Script type="text/javascript">
        window.print();
    </Script>

</body>

</html>