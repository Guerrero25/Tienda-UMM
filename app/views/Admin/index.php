<div class="col-md-12" style="height:230px"></div>
<div class="main main-raised">
  <div class="section">
    <div class="container">
      <div class="row">
						<div class=" col-md-12">
							<div class="card card-signup">
								<!-- Formulario de Inicio de Sesion-->
								<form class="contact-form" role="form" id="loginAdmin">
									<div class="hsm header header-primary text-center">
										<h4>Iniciar Sesión</h4>
									</div>
										<div class="content">
											<div class="input-group col-md-10 col-md-offset-1">
												<span class="input-group-addon">
													<i class="material-icons">email</i>
												</span>
													<div class="form-group is-empty">
														<input type="text" placeholder="Correo Electrónico" name="user" id="user" class="form-control" required>
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
					</div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(".navbar").removeClass("navbar-transparent");
  $(".navbar").removeClass("navbar-color-on-scroll");
  $(".navbar").addClass("navbar-primary");
  $('body').removeClass('landing-page');
  $('body').addClass('components-page');
</script>

<script src="<?= URL.APP_PATH.'views/'.DFT;?>js/funciones_admin.js" type="text/javascript"></script>
