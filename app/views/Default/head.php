<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL.APP_PATH.'views/'.DFT ?>img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo URL.APP_PATH.'views/'.DFT ?>img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

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
    					<li><a href="<?php echo URL.'Main/index'; ?>">Inicio</a></li>
							<li><a href="<?php echo isset($_SESSION['Admin']) ? URL.'Admin/productos' : URL.'Detalle/index'; ?>">Todos</a></li>
    	        <li><a href="<?php echo URL.'Detalle/categoria/sorpresas'; ?>">Cajas Sorpresas</a></li>
							<li><a href="<?php echo URL.'Detalle/categoria/carteles'; ?>">Carteles</a></li>
							<li><a href="<?php echo URL.'Detalle/categoria/arreglos'; ?>">Arreglos</a></li>
    	    	</ul>
            <ul class="nav navbar-nav navbar-right">
							<?php if(Sesion::getSesion('Usuario') == ''){ ?>
							<li>
								<a href="#" data-toggle="modal" data-target= "#login">Login/Singup</a>
							</li>
							<li>
		          	<a href="https://www.facebook.com/Un-mill%C3%B3n-de-momentos-1189791587730712/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
									<i class="fa fa-facebook-square"></i>
								</a>
		          </li>
							<li>
		          	<a href="https://www.instagram.com/unmillondemomentos/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
									<i class="fa fa-instagram"></i>
								</a>
		          </li>
							<?php }else{ ?>
								<li class="active dropdown">
									<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="material-icons">account_circle</i> <?php echo Sesion::getSesion('Usuario'); ?></a>
									<ul class="dropdown-menu">
										<li><a href="#" id="<?php echo Sesion::getSesion('id'); ?>" name="actualizar">Actuaizar Datos</a></li>
										<li><a href="<?php echo URL.'User/cerrarSesion';?>">Cerrar Sesion</a></li>
									</ul>
								</li>
							<?php } ?>
        		</ul>
        	</div>
    	</div>
    </nav>
		<?php  if(Sesion::getSesion('Usuario') == ''){ ?>
		<!--Modal de Inicio de Sesion-->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <button type="button" class="btn btn-info" data-toggle="popover" data-placement="bottom" title="Ayuda" data-content="Iniciar sesión te sirve para realizar pedidos a nuestra tienda, y tener un contacto contigo.">
							<i class="fa fa-info" aria-hidden="true"></i>
						</button>
		      </div>
		      <div class="modal-body">
						<div class="row">
							<div class=" col-md-5">
								<div class="card card-signup">
									<!-- Formulario de Inicio de Sesion-->
									<form class="contact-form" role="form" id="Sesion" name="Sesion">
										<div class="hsm header header-primary text-center">
											<h4>Iniciar Sesión</h4>
										</div>
											<div class="content">
												<div class="input-group col-md-10 col-md-offset-1">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group is-empty">
														<input type="email" placeholder="Correo Electrónico" name="email" id="email" class="form-control" required>
														<span class="matrial-input"></span>
													</div>
												</div>
												<div class="input-group col-md-10 col-md-offset-1">
													<div class="input-group-addon">
														<span class="material-icons">lock_outline</span>
													</div>
													<div class="form-group is-empty">
														<input type="password" placeholder="Contraseña" name="password" class="form-control" required>
														<span class="matrial-input"></span>
													</div>
												</div>
											</div>

											<div class="footer text-center">
												<button type="submit" id="btnLogin" class="btn btn-primary btn-raised">
													Iniciar Sesion
												</button>
												<button type="button"class="btn btn-danger btn-raised" data-dismiss="modal">
													Cancelar
												</button>
											</div>
									 </form>
									 <br>
									 <!--Fin Formulario de Inicio-->
								</div>
							</div>
							<div class="col-md-7">
								<div class="card card-signup">
									<form class="contact-form" id="Registrar">
										<div class="hsm header header-primary text-center">
											<h4>Registrate Ahora!</h4>
										</div>
										<div class="content">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Nombre</label>
														<input type="text" class="form-control" name="nombre" id="nombre">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Username</label>
														<input type="text" class="form-control" name="username" id="username" >
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Correo Electrónico</label>
														<input type="email" class="form-control" name="email" id="email">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Teléfono</label>
														<input type="number" class="form-control" name="telefono" id="telefono">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Contraseña</label>
														<input type="password" class="form-control" name="password" id="password">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group label-floating">
														<label class="control-label">Confirmar Contraseña</label>
														<input type="password" class="form-control"  name="password_confirmacion" id="password_confirmacion">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<button type="submit" class="btn btn-primary btn-raised" id="btnRegistro">
														Registrar!
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
		      </div>
		      <div class="modal-footer">
						<center>Un Millón de Momentos Colombia</center>
		      </div>
		    </div>
		  </div>
		</div>
		<!--Final Modal Inicio de Sesion -->
<?php } ?>
