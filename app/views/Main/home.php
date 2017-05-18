<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo URL.APP_PATH.'views/'.DFT?>img/bg1.png');">
  	<div class="container">
      <div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">TIENDA UN MILLÓN DE MOMENTOS</h1>
	        <h3 class="text-center"><strong>Bienvenido a la tienda diferente, donde cada momento especial se contruye con las manos.</strong></h3>
	        <br />
					<div class="text-center">
						<a href="#carousel" class="btn btn-danger btn-raised btn-lg">
								Destacados
						</a>
						<a href="<?php echo URL.'Detalle/index'; ?>" class="btn btn-primary btn-raised btn-lg">
								Ver Productos.
						</a>
					</div>
				</div>
      </div>
    </div>
  </div>

	<div class="main main-raised">
	  <div class="section" id="carousel">
	   	<div class="container">
	     	<div class="row">
	     		<div class="row">
						<div class="col-md-8 col-md-offset-2">
		     			<h2 class="title text-center">Ultimos Agregados</h2>
		     		</div>
						<div class="controls pull-rigth hidden-xs">
							<a class="left fa fa-chevron-left btn btn-primary" href="#carousel-detalles" data-slide="prev"></a>
							<a class="right fa fa-chevron-right btn btn-primary" href="#carousel-detalles" data-slide="next"></a>
						</div>
	     		</div>
					<!--Inicio Carusel-->
					<div id="carousel-detalles" class="carousel slide hidden-xs" data-ride="carousel">

						<!--Contenedor de los Slides-->
						<div class="carousel-inner" id="inner">


						</div><!--Final de item-->
					</div><!--Final carrusel-->
	     	</div>
			</div>
		</div>

		<div class="section landing-section " id="registro">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center title">Registrate</h2>
					<h4 class="text-center description">¿Aun no tienes una cuenta? No esperes mas y unete.</h4>
		        <form class="contact-form" id="Registrar">
	          	<div class="row">
	            	<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Nombre</label>
										<input type="text" class="form-control" name="nombre" id="nombre">
									</div>
								</div>

								<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Correo Electrónico</label>
										<input type="email" class="form-control" name="email" id="email">
									</div>
								</div>
							</div>
							<div class="row">
	            	<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Username</label>
										<input type="text" class="form-control" name="username" id="username" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Contraseña</label>
										<input type="password" class="form-control" name="password" id="password">
									</div>
								</div>

								<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Confirmar Contraseña</label>
										<input type="password" class="form-control"  name="password_confirmacion" id="password_confirmacion">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-md-offset-4 text-center">
									<button type="submit" class="btn btn-primary btn-raised" id="btnRegistro">
										Registrar!
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!--Modal de Ver detalle-->
	<div class="modal fade" id="detalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      </div>
	      <div class="modal-body">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="cont">
									<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
								</div>
							</div>
							<div class="col-md-6">
								<div class="descripcion">
									<h4 class="price-text-color" id="dnombre"></h4>
									<p id="ddescripcion"></p>
								</div>
								<div class="especificaciones">
									<h4>Especificaciones</h4>

								</div>
								<div class="precio">
									<h3 id="dprecio"></h3>
								</div>
								<div class="opciones">
									<a href="" class="btn btn-primary btn-sm"><i class="material-icons">favorite</i>Comprar</a>
									<button type="button" href="#" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
	      </div>
	      <div class="modal-footer">

	      </div>
	    </div>
	  </div>
	</div>
	<!--Final Modal Ver Detalle -->
	<script src="<?php echo URL.APP_PATH.'views/'.DFT; ?>js/ultimosAgregados.js" type="text/javascript"></script>
