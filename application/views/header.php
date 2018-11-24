<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sistema Zona Azul</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    


    <!-- Animation library for notifications   -->
    <link href=" <?= base_url('assets/css/animate.min.css') ?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?= base_url('assets/css/light-bootstrap-dashboard.css?v=1.4.0') ?>" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url('assets/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('assets/js/jquery.3.2.1.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap-notify.js') ?>"></script>
    <script src="<?= base_url('assets/js/scripts.js') ?>" type="text/javascript"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Sistema Zona Azul
                </a>
            </div>

            <ul class="nav">
                <li class="<?= $c1 ?>">
                    <a href="<?= base_url() ?>">
                        <i class="fa fa-home"></i>
                        <p>Início</p>
                    </a>
                </li>
            </ul>

            <ul class="nav">
                <li class="<?= $c2 ?>">
                    <a href="<?= base_url('index.php/Servical') ?>">
                        <i class="fa fa-users"></i>
                        <p>Serviçais</p>
                    </a>
                </li>
            </ul>

            <ul class="nav">
                <li class="<?= $c3 ?>">
                    <a href="<?= base_url('index.php/Multas') ?>">
                        <i class="fa fa-car"></i>
                        <p>Multas</p>
                    </a>
                </li>
            </ul>

            <ul class="nav">
                <li class="<?= $c4 ?>">
                    <a href="<?= base_url('index.php/Vendas') ?>">
                        <i class="far fa-money-bill-alt"></i>
                        <p>Vendas</p>
                    </a>
                </li>
            </ul>
<!-- 
            <ul class="nav">
                <li class="< $c4 ?>">
                    <a href="<= base_url() ?>">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Adicionar vagas</p>
                    </a>
                </li>
            </ul> -->

           

    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Painel Central</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Sair
                               <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>