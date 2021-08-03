<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Iudop</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css" media="screen">
        body{
            background-image: url('/img/background.jpg');
            background-size: cover;
            background: rgb(0,0,0);
            background: linear-gradient(0deg, rgba(0,0,0,0.3676821070224965) 0%, rgba(4,43,119,0.9587185215883228) 60%);
        }
        .cst-container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
        .cst-card{
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 50%) !important;
            padding: 20px;
            margin: 10px;
            width: 400px; 
            margin: 30px;     
        }
        .cst-flex-wrap{
            display: flex;
            flex-wrap: wrap;
        }
        .cst-flex-v{
            display: flex;
            flex-direction: column;
        }
        .cst-flex-center{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cst-content{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            flex-wrap: wrap;
            text-align: center;
        }

        .bordered{
            border-radius: 12px;
        }

        .unselectable {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>

<body>
    <div class="cst-content cst-flex-wrap unselectable">
        <div class="cst-card cst-flex-center cst-flex-v unselectable">
            <h4>IMPORTAR ARCHIVO EXCEL PARA INFORMES</h4>
            <form action="<?php echo e(url('/informe/import')); ?>" method="POST" enctype="multipart/form-data" class="cst-flex-v ">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <button class="btn btn-primary bordered">Import data</button>
            </form>
        </div>

        <div class="cst-card cst-flex-center cst-flex-v unselectable">
            <h4>IMPORTAR ARCHIVO EXCEL PARA INDICE</h4>
            <form action="<?php echo e(url('/indice/import')); ?>" method="POST" enctype="multipart/form-data" class="cst-flex-v">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <button class="btn btn-danger bordered">Import data</button>
            </form>
        </div>
    </div>
</body>

</html><?php /**PATH C:\projects\excel_tool\resources\views/all.blade.php ENDPATH**/ ?>