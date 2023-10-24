<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Agenda - LOGIN</title>
    
    <style>
           *{
    margin: 0;
    padding: 0;
   }

   /*HEAD*/
    .head{
        background-color: #2D3E50;
        margin: 0 400px;
        margin-top: 40px;
        border-radius: 10px;
        color: white;
    }

    .head img{
        width: 100px;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .head h4{
        font-size: 25px;
        margin-bottom: 10px;
    }

    .head h5{
        font-size: 18px;
        margin-bottom: 10px;
    }

    .head p{
        font-size: 14px;
        padding-bottom: 20px;
    }

    .head hr{
        width: 50%;
        border: 1px solid #86C1FF;
        margin-bottom: 10px;
        margin-top: 0;
        opacity: 100%;
    }

/*BODY*/
    .body{
        background-color: white;
        margin: 0 400px;
        padding: 15px;
        border-radius: 10px;
    }    
    </style>
</head>

<body style="background-color: #E0E0E0">
    <div class="head">
        <center>
            <img src="img/logo.png">
            <h4>E-Agenda</h4>
            <hr>
            <h5>SMK Dharma Kusuma Cianjur</h5>
            <p>Jl.Kh Abdullah Bin Nuh, Kel.Pamoyanan, Kec.Cianjur, KP : 43211 <br>
                email : info@smkdharmakusumacianjur.sch.id</p>
        </center> 
    </div>

    <div class="body">
        <h5>LOGIN</h5>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST" autocomplete="off">
            @csrf
            <div class="input-group flex-nowrap" style="margin-bottom: 10px">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="nidn" value="{{ old('kode') }}">
            </div>
            <div class="input-group flex-nowrap" style="margin-bottom: 10px">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key-fill"></i></span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password" value="">
            </div>
            <div class="button" style="padding-top: 10px">
                <input class="btn btn-primary" type="submit" value="Masuk" style="padding: 5px 20px">  
                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." style="margin-top: 10px; margin-left: 10px;"> 
            </div>
        </form>
    </div>
</body>
</html>