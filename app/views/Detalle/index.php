
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo URL.APP_PATH.'views/'.DFT?>img/bg2.jpg');">
		<div class="container">
			<div class="row">
				<div class="title text-center">
					<h1>Tienda UMM</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="container">
			<div class="section landing-section">
				<div class="row">
					<?php foreach ($array as $value) { ?>
					<div class="col-md-4">
						<div class="cont">
							<div class="row">
								<div class="cont-img col-md-6 col-md-offset-3"><img width='100%' src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg"></div>
							</div>
							<h4 class="title text-center"><?= $value->nombre ?></h4>
							<p class="description"><?= $value->descripcion ?></p>
							<div class="col-md-8 col-md-offset-2">
								<span class="label label-info"><?= $value->precio ?></span>
								<a href="<?php echo URL.'public/Detalle/ver/'.$value->id ?>" class="btn btn-primary btn-round">
									<i class="material-icons">favorite</i> Ver
								</a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
