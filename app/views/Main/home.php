<div class="main">
		<div class="container">
			<div class="row">
				<div class="informacion col-md-8 col-xs-12">
					<div class="informacion_img">
						<img src="<?php echo URL.APP_PATH.'views/'.DFT;?>img/logo_regalo.png" alt="">
					</div>
					<h2 class="informacion_titulo">Bienvenido a Tu Tienda de Regalos</h2>
					<p class="informacion_descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<a class="btn btn-info btn-lg" href="#">Conocenos</a>
					<a class="btn btn-info btn-lg" href="#">Registrate</a>
				</div>

				<div class="singin col-md-4 col-xs-12 middle-xs">
					<div class="container">
						<div class="sesiontitle">
							<h2>Iniciar Sesion</h2>
						</div>
						<div class="formulario">
		          <form class="form-singin" role="form" id="Sesion" name="Sesion" method="POST">
		            <div class="form-group">
		              <label for="email">Correo Electrónico</label>
		              <input type="email" name="email" id="email" class="form-control" placeholder="Correo Eléctronico">
		            </div>
		            <div class="form-group">
		              <label for="password">Contraseña</label>
		              <input type="password" name="password" class="form-control" placeholder="Contraseña">
		            </div>
								<button type="button" id="btnLogin" onclick="userLogin()" class="btn btn-info btn-lg btn-block">Iniciar Sesión</button>
							</form>
						</div>
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

				$.ajax({
					type:"POST",
					url:"<?php echo URL;?>public/User/login",
					data:{email: email, password: password},
					success: function(response){
						if (response == '1') {
							location.href = '<?php echo URL;?>public/Detalle/index';
						}else{
							alert("Usuario invalido");
						}
					}
				});
				return false;
			});
		});
	</script>
