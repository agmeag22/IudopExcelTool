<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="/fontawesome/css/all.css" rel="stylesheet"> 
    <!--===============================================================================================-->
    <link href="/css/normalize.css" rel="stylesheet"> 
    <!--===============================================================================================-->
    <link href="/css/property.css" rel="stylesheet"> 
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_layout/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--===============================================================================================-->
    <script src="/js/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <!--===============================================================================================-->
    
    <!--===============================================================================================-->
    
    <!--===============================================================================================-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!--===============================================================================================-->
    <style type="text/css" media="screen">
        body{
            width: 100%;
            height: 100%;
            margin: 0;
            display: flex;
            background: url(/img/cubes.png);
            background-size: 107px;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        @font-face {
            font-family: OpenSans;
            src: url('/fonts/OpenSans-Regular.ttf');
        }

        *:not(i,p) {
            font-family: 'OpenSans' !important;
        }
        /*.menu{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100vh;
            background-color: black;
            color: white;
            opacity: 0.9;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 50%) !important;
            background-color: rgb(0 0 0 / 65%);
        }
        */
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <!--===============================================================================================-->
</head>
<body>
    <div data-component="navbar">

        <nav class="navbar p-0 fixed-top cst-nav-bar">
            <div><a class="navbar-brand px-1 cst-nav-brand-cnt" href="#"><img src="/img/cserco_logo_min_blanco.svg" class="d-inline-block mt-1" alt="AgentFire Logo" height="40"></a>

                <div class="right-links float-right mr-4 cst-right-links">
                    <a href="#" class="home"><i class="fa fa-home mr-3"></i></a>

                    <div class="d-inline dropdown rounded-0 mx-3">
                        <a class="dropdown-toggle" id="tools" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                        <div class="dropdown-menu dropdown-menu-right rounded-0 text-center" aria-labelledby="tools">
                            <a class="dropdown-item px-2" href="#">Recompile CSS</a>
                        </div>
                    </div> <!-- /.dropdown -->

                    <div class="d-inline dropdown">
                        <a class="dropdown-toggle" id="messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <img src="http://1.gravatar.com/avatar/47db31bd2e0b161008607d84c74305b5?s=96&d=mm&r=g">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="messages">
                            <a class="dropdown-item" href="#">Edit my profile</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div> <!-- /.dropdown-menu -->
                    </div> <!-- /.dropdown -->

                </div> <!-- /.right-links -->

            </div>
        </div>
    </nav>
</div> <!-- END TOP NAVBAR -->

<div data-component="sidebar">
    <div class="sidebar">
        <ul class="list-group flex-column d-inline-block first-menu cst-primary-list" >
            <li class="list-group-item pl-3 py-2 cst-primary-list-item">
                <a href="<?php echo e(url('menu')); ?>">
                    <a href="#"><i class="fas fa-building"><span class="ml-2 align-middle">Inicio</span></i></a>
                </a>

                <ul class="list-group flex-column d-inline-block submenu cst-secondary-list">
                    <li class="list-group-item pl-4 cst-link">
                        <a href="<?php echo e(url('home')); ?>" class="">Dashboard</a>
                    </li>

                    <li class="list-group-item pl-4 cst-link">
                        <a href="<?php echo e(url('home')); ?>">SEO</a>

                        <ul class="list-group flex-column d-inline-block sub-submenu">
                            <span class="arrow" style="top:113px;"></span>
                            <li class="list-group-item pl-4 cst-link">
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>

                    </li>
                </ul> <!-- /.submenu -->
            </li> <!-- /.list-group-item -->
            <li class="list-group-item pl-3 py-2 cst-primary-list-item">
                <a href="#">
                    <a href="#"><i class="fas fa-building"><span class="ml-2 align-middle">Inicio</span></i></a>
                </a>

                <ul class="list-group flex-column d-inline-block submenu cst-secondary-list">
                    <li class="list-group-item pl-4 cst-link">
                        <a href="#" class="">Dashboard</a>
                    </li>

                    <li class="list-group-item pl-4 cst-link">
                        <a href="">SEO</a>

                        <ul class="list-group flex-column d-inline-block sub-submenu">
                            <span class="arrow" style="top:113px;"></span>
                            <li class="list-group-item pl-4 cst-link">
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>

                    </li>
                </ul> <!-- /.submenu -->
            </li> <!-- /.list-group-item -->
            <li class="list-group-item pl-3 py-2 cst-primary-list-item">
                <a href="#">
                    <a href="#"><i class="fas fa-building"><span class="ml-2 align-middle">Configuracion</span></i></a>
                </a>

                <ul class="list-group flex-column d-inline-block submenu cst-secondary-list">
                    <li class="list-group-item pl-4">
                        <a href="<?php echo e(url('users')); ?>" >Usuarios</a>
                    </li>

                    <li class="list-group-item pl-4">
                        <a href="<?php echo e(url('empresa')); ?>">Empresas</a>
                    </li>
                </ul> <!-- /.submenu -->
            </li> <!-- /.list-group-item -->
        </ul> <!-- /.first-menu -->
    </div> <!-- /.sidebar -->
</div>

<div class="wp-content" style="width: 100% !important;">
    <div class="container-fluid content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\projects\c-serco\resources\views/layouts/app.blade.php ENDPATH**/ ?>