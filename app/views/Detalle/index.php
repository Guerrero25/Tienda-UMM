
<br><br><br><br><br><br><br>
	<div class="main main-raised">
		<div class="container">
			<div class="section landing-section">
				<div class="row">
					<div class="col-md-4 pull-left">
						<h2>Productos:</h2>
					</div>
					<div class="col-md-3 dropdown pull-rigth">
						<a href="#" class="btn  btn-primary dropdown-toggle" data-toggle="dropdown">Categorias
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">

						</ul>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="row">
							<?php foreach ($array as $value) { ?>
							<div class="col-md-4">
								<div class="col-item">
									<div class="photo">
										<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" alt="Detalle 1">
									</div>
									<div class="info">
										<div class="row">
											<div class="price col-md-8">
												<h5><?= $value->nombre ?></h5>
												<h5 class="price-text-color">$ <?= $value->precio ?></h5>
											</div>
										</div>
										<div class="separator clear-left">
											<p class="btn-add">
												<a href="" class="hidden-sm"><i class="material-icons">favorite</i>Comprar</a>
											</p>
											<p class="btn-details">
												<a href="<?php echo URL.'public/Detalle/ver/'.$value->id ?>" class="hidden-sm"><i class="material-icons">list</i>Detalles</a>
											</p>
										</div>
										<div class="clearfix">
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
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
