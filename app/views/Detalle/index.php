
<br><br><br><br><br><br><br>
	<div class="main main-raised">
		<div class="container">
			<div class="section landing-section">
				<div class="row">
					<div class="col-md-3">
						<div class=" pull-left dropdown">
							<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Categorias
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo URL.'Detalle/categoria/sorpresas'; ?>">Cajas Sorpresas</a></li>
								<li><a href="<?php echo URL.'Detalle/categoria/arreglos'; ?>">Arreglos</a></li>
								<li><a href="<?php echo URL.'Detalle/categoria/carteles'; ?>">Carteles</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="row">
							<?php foreach ($array as $value) { ?>
							<div class="col-md-4 margen-bot">
								<div class="col-item">
									<div class="photo">
										<img src="data:image/jpeg;base64,<?php echo base64_encode($value->imagen); ?>" alt="Detalle 1">
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
												<a href="#" data-toggle="modal" data-target= "#detalle" id="<?= $value->id;?>" class="producto"><i class="material-icons">list</i>Detalles</a>
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
									<img id="imagen" src="" alt="Detalle 1">
								</div>
							</div>
							<div class="col-md-6">
								<div class="descripcion">
									<h4 class="price-text-color" id="nombre"></h4>
									<p id="descripcion"></p>
								</div>
								<div class="especificaciones">
									<h4>Especificaciones</h4>

								</div>
								<div class="precio">
									<h3 id="precio"></h3>
								</div>
								<div class="opciones pull-right">
									<a href="" class="btn btn-primary btn-sm"><i class="material-icons">favorite</i> Comprar</a>
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

	<script src="<?php echo URL.APP_PATH.'views/'.DFT;?>js/detalle.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(".navbar").removeClass("navbar-transparent");
		$(".navbar").removeClass("navbar-color-on-scroll");
		$(".navbar").addClass("navbar-primary");
		$('body').removeClass('landing-page');
		$('body').addClass('components-page');
	</script>
