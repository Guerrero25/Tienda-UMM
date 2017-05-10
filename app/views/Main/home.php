<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo URL.APP_PATH.'views/'.DFT?>img/bg1.png');">
  	<div class="container">
      <div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="title text-center">TIENDA UN MILLÓN DE MOMENTOS</h1>
	        <h3 class="text-center"><strong>Bienvenido a la tienda diferente, donde cada momento especial se contruye con las manos.</strong></h3>
	        <br />
					<div class="text-center">
						<buttton class="btn btn-danger btn-raised btn-lg" data-toggle="modal" data-target= "#login">
								Inicia Sesión.
						</buttton>
						<a href="#" class="btn btn-primary btn-raised btn-lg">
								Ver Productos.
						</a>
					</div>
				</div>
      </div>
    </div>
  </div>
	<!--Modal de Inicio de Sesion-->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog ">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <button type="button" class="btn btn-info" data-toggle="popover" data-placement="bottom" title="Ayuda" data-content="Iniciar sesión te sirve para realizar pedidos a nuestra tienda, y tener un contacto contigo.">
						<i class="fa fa-info" aria-hidden="true"></i>
					</button>
	      </div>
	      <div class="modal-body">
					<div class="col-md-12">
						<div class="card card-signup">
							<!-- Formulario de Inicio de Sesion-->
							<form class="contact-form" role="form" id="Sesion" name="Sesion">
								<div class="hsm header header-primary text-center">
									<h4>Iniciar Sesión</h4>
								</div>
								<p class="text-divider">Divisor</p>

									<div class="content">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											<div class="form-group is-empty">
												<input type="email" placeholder="Correo Electrónico" name="email" id="email" class="form-control" required>
												<span class="matrial-input"></span>
											</div>
										</div>
										<div class="input-group">
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
	      </div>
	      <div class="modal-footer">

	      </div>
	    </div>
	  </div>
	</div>
	<!--Final Modal Inicio de Sesion -->
	<div class="main main-raised">
	  <div class="section" id="carousel">
	   	<div class="container">
	     	<div class="row">
	     		<div class="row">
						<div class="col-md-8 col-md-offset-2">
		     			<h2 class="title text-center">Productos Destacados</h2>
		     		</div>
						<div class="controls pull-rigth hidden-xs">
							<a class="left fa fa-chevron-left btn btn-success" href="#carousel-detalles" data-slide="prev"></a>
							<a class="right fa fa-chevron-right btn btn-success" href="#carousel-detalles" data-slide="next"></a>
						</div>
	     		</div>
					<!--Inicio Carusel-->
					<div id="carousel-detalles" class="carousel slide hidden-xs" data-ride="carousel">

							<!--Contenedor de los Slides-->
							<div class="carousel-inner">
								<div class="item"><!--Comienzo de item-->
									<div class="row">
										<div class="col-sm-3"><!--Inicio Detalle-->
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-6">
															<h5>Caja Sorpresa</h5>
															<h5 class="price-text-color">$50.000</h5>
														</div>
													</div>
													<div class="separato clear-left">
														<p class="btn-add">
															<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
														</p>
														<p class="btn-details">
															<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
														</p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div><!--Final detalle-->
										<div class="col-sm-3"><!--Inicio Detalle-->
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-6">
															<h5>Caja Sorpresa</h5>
															<h5 class="price-text-color">$50.000</h5>
														</div>
													</div>
													<div class="separato clear-left">
														<p class="btn-add">
															<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
														</p>
														<p class="btn-details">
															<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
														</p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div><!--Final detalle-->
										<div class="col-sm-3"><!--Inicio Detalle-->
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-6">
															<h5>Caja Sorpresa</h5>
															<h5 class="price-text-color">$50.000</h5>
														</div>
													</div>
													<div class="separato clear-left">
														<p class="btn-add">
															<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
														</p>
														<p class="btn-details">
															<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
														</p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div><!--Final detalle-->
										<div class="col-sm-3"><!--Inicio Detalle-->
											<div class="col-item">
												<div class="photo">
													<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
												</div>
												<div class="info">
													<div class="row">
														<div class="price col-md-6">
															<h5>Caja Sorpresa</h5>
															<h5 class="price-text-color">$50.000</h5>
														</div>
													</div>
													<div class="separato clear-left">
														<p class="btn-add">
															<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
														</p>
														<p class="btn-details">
															<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
														</p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div><!--Final detalle-->
									</div>
							</div><!--Final de item-->
							<div class="item active"><!--Comienzo de item-->
								<div class="row">
									<div class="col-sm-3"><!--Inicio Detalle-->
										<div class="col-item">
											<div class="photo">
												<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
											</div>
											<div class="info">
												<div class="row">
													<div class="price col-md-6">
														<h5>Caja Sorpresa</h5>
														<h5 class="price-text-color">$50.000</h5>
													</div>
												</div>
												<div class="separato clear-left">
													<p class="btn-add">
														<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
													</p>
													<p class="btn-details">
														<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
													</p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div><!--Final detalle-->
									<div class="col-sm-3"><!--Inicio Detalle-->
										<div class="col-item">
											<div class="photo">
												<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
											</div>
											<div class="info">
												<div class="row">
													<div class="price col-md-6">
														<h5>Caja Sorpresa</h5>
														<h5 class="price-text-color">$50.000</h5>
													</div>
												</div>
												<div class="separato clear-left">
													<p class="btn-add">
														<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
													</p>
													<p class="btn-details">
														<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
													</p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div><!--Final detalle-->
									<div class="col-sm-3"><!--Inicio Detalle-->
										<div class="col-item">
											<div class="photo">
												<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
											</div>
											<div class="info">
												<div class="row">
													<div class="price col-md-6">
														<h5>Caja Sorpresa</h5>
														<h5 class="price-text-color">$50.000</h5>
													</div>
												</div>
												<div class="separato clear-left">
													<p class="btn-add">
														<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
													</p>
													<p class="btn-details">
														<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
													</p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div><!--Final detalle-->
									<div class="col-sm-3"><!--Inicio Detalle-->
										<div class="col-item">
											<div class="photo">
												<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
											</div>
											<div class="info">
												<div class="row">
													<div class="price col-md-6">
														<h5>Caja Sorpresa</h5>
														<h5 class="price-text-color">$50.000</h5>
													</div>
												</div>
												<div class="separato clear-left">
													<p class="btn-add">
														<a href="#" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
													</p>
													<p class="btn-details">
														<a href="#" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
													</p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div><!--Final detalle-->
								</div>
						</div><!--Final de item-->
					</div><!--Final carrusel-->
	     	</div>
			</div>
		</div>

		<div class="section landing-section">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center title">Registrate</h2>
					<h4 class="text-center description">¿Aun no tienes una cuenta? No esperes mas y unete.</h4>
		        <form class="contact-form">
	          	<div class="row">
	            	<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Nombre</label>
										<input type="text" class="form-control" id="nombre">
									</div>
								</div>

								<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Correo Electrónico</label>
										<input type="email" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Contraseña</label>
										<input type="password" class="form-control">
									</div>
								</div>

								<div class="col-md-4 col-md-offset-4">
									<div class="form-group label-floating">
										<label class="control-label">Confirmar Contraseña</label>
										<input type="password" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-md-offset-4 text-center">
									<button class="btn btn-primary btn-raised">
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

	<script>
		$(function(){
			$("#btnLogin").click(function(){
				var email = $('form[name=Sesion] input[name=email]')[0].value;
				var password = $('form[name=Sesion] input[name=password]')[0].value;

				if (email == '' || password == '') {

				} else {
					$.ajax({
						type:"POST",
						url:"<?php echo URL;?>public/User/login",
						data:{email: email, password: password},
						success: function(response){
							if (response == '1') {
								location.href = '<?php echo URL;?>public/Principal/index';
							}
						}
					});
				}
				return false;
			});
		});
	</script>
