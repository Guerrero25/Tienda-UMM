<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo URL.APP_PATH.'views/'.DFT?>img/bg2.jpg');">
  	<div class="container">
      <div class="row">
				<div class="col-md-6">
					<h1 class="title">Regala algo diferente!</h1>
	        <h4>Toda ocacion especial se merece un detalle igual de especial! Compartamos mas momentos, un millón de momentos.</h4>
	        <br />
	        <a href="#sesion" class="btn btn-danger btn-raised btn-lg">
							Inicia Sesión.
					</a>
					<a href="productos.html" class="btn btn-danger btn-raised btn-lg">
							Ver Productos.
					</a>
				</div>
      </div>
    </div>
  </div>

	<div class="main main-raised">
		<div class="container">

	    	<div class="section landing-section" id="sesion">
	      	<div class="row">
	        	<div class="col-md-8 col-md-offset-2">
	          	<h2 class="text-center title">Iniciar Sesión</h2>
							<h4 class="text-center description">Para poder informarte acerca de tus pedidos</h4>
	            <form class="contact-form" role="form" id="Sesion" name="Sesion">
	            	<div class="row">
	              	<div class="col-md-6 col-md-offset-3">
										<div class="form-group label-floating">
											<label class="control-label" for="email">Correo Electrónico</label>
											<input type="email" name="email" id="email" class="form-control">
										</div>
										<div class="form-group label-floating">
											<label class="control-label" for="password">Contraseña</label>
											<input type="password" name="password" class="form-control">
										</div>
	                </div>
	              </div>


	              <div class="row">
	              	<div class="col-md-4 col-md-offset-4 text-center">
	                	<button type="submit" id="btnLogin" class="btn btn-primary btn-raised">
											Iniciar Sesion
										</button>
	                 </div>
	              </div>
	             </form>
	          </div>
					</div>
				 </div>
	  </div>

		<div class="section landing-section" id="registrar">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center title">Registrate</h2>
					<h4 class="text-center description">Si no tienes una cuenta, creala ahora para compartir momentos unicos, y expresar todo lo que quieras decir.</h4>
		        <form class="contact-form">
	          	<div class="row">
	            	<div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label">Nombre</label>
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="col-md-6 text-center">
									<div class="form-group label-floating">
										<label class="control-label">Correo Electrónico</label>
										<input type="email" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label">Contraseña</label>
										<input type="password" class="form-control">
									</div>
								</div>

								<div class="col-md-6 text-center">
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
