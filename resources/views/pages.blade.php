<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Iudop</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css" media="screen">
        body{
            background-image: url('/img/animated_background.svg') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
        }
        .cst-container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }
        .cst-card{
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 50%) !important;
            padding:20px;
            width: 400px;
        }

        .cst-flex-v{
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }

        .cst-flex-center{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container cst-container cst-flex-center">
        <div class="cst-card cst-flex-center">
           {{session('msg')}} El documento ha sido importado correctamente.
           <a href="{{url('all')}}" title="">Regresar</a>
        </div>
    </div>
</body>

</html>