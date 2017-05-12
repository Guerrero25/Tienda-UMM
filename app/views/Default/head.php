<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL.APP_PATH.'views/'.DFT ?>img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo URL.APP_PATH.'views/'.DFT ?>img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Un Millón de Momentos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

   <script src="<?php echo URL.APP_PATH.'views/'.DFT ?>js/jquery.min.js" type="text/javascript"></script>

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo URL.APP_PATH.'views/'.DFT ?>css/vendor/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo URL.APP_PATH.'views/'.DFT ?>css/vendor/material-kit.css" rel="stylesheet"/>
		<link href="<?php echo URL.APP_PATH.'views/'.DFT ?>css/estilos.css" rel="stylesheet" />

</head>
<body class="landing-page">
    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-doc">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a href="<?php echo isset($_SESSION['Usuario']) ? URL.'Principal/index' : URL.'Main/index'; ?>">
							<div class="logo-container">
								<div class="logo">
									<img src="<?php echo URL.APP_PATH.'views/'.DFT; ?>img/logo.png" alt="Un Millon de Momentos Logo">
								</div>
							</div>
						</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-doc">
            <ul class="nav navbar-nav ">
    					<li><a href="<?php echo isset($_SESSION['Usuario']) ? URL.'Principal/index' : URL.'Main/index'; ?>">Inicio</a></li>
                  <?php if(isset($_SESSION['Usuario'])){ ?>
                  <li><a href="#">Perfil</a></li>
                  <?php } ?>
    	        		<li class="active dropdown">
    	        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
    	        			<ul class="dropdown-menu">
        						  <li><a href="<?php echo isset($_SESSION['Admin']) ? URL.'Admin/productos' : URL.'Detalle/index'; ?>">Ver todos</a></li>
        						  <li class="divider"></li>
        						  <li><a href="#">Cajas Sorpresas</a></li>
        						  <li><a href="#">Decoraciones</a></li>
        						  <li><a href="#">Arreglos</a></li>
    	        			</ul>
                    <?php if(isset($_SESSION['Usuario'])){ ?>
                      <li><a href="<?php echo URL.'User/cerrarSesion';?>">Cerrar Sesion</a></li>
                    <?php } ?>
    	        		</li>
    	    		</ul>
            <ul class="nav navbar-nav navbar-right">

		            <li>
		                <a href="https://www.facebook.com/Un-mill%C3%B3n-de-momentos-1189791587730712/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i> Facebook!
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/unmillondemomentos/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i> Instagram
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>
