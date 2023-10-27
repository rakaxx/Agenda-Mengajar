<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

    @include('partials.link')

</head>

<body>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">E-Agenda</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="{{ asset('img/logo.png') }}" style="width: 50%">
                        <h2><strong>E-Agenda</strong></h2>
                        <a href="https://www.smkdharmakusumacianjur.sch.id/">https://www.smkdharmakusumacianjur.sch.id/</a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="inputName">Sekolah</label>
                        <input type="text" class="form-control" value="SMK Dharma Kusuma Cianjur" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Alamat</label>
                        <input type="text" class="form-control" value="Jln. KH. Abdullah bin Nuh, RT. 005/018, Kel. Pamoyanan, Kec. Cianjur, Kab. Cianjur" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Email</label>
                        <input type="text" class="form-control" value="info@smkdharmakusumacianjur.sch.id" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Phone Number</label>
                        <input type="text" class="form-control" value="0855 5958 8185" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea id="inputMessage" class="form-control" rows="4" readonly>E-Agenda adalah aplikasi agenda mengajar guru di SMK Dharma Kusuma Cianjur</textarea>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

    @include('partials.script')

</body>

</html>
