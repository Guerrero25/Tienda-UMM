<div class="wrapper">
        <div class="header header-filter" style="background-image: url('<?php echo URL.APP_PATH.'views/'.DFT?>img/bg2.jpg');">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-6 col-md-offset-3">
        				<h1 class="title text-center">Tienda UMM</h1>
        			</div>
        		</div>
        	</div>
        </div>

		<div class="main main-raised">
			<div class="container">
				<div class="section landing-section">

						<div class="row">
							<div class="col-md-6">
								<div class="cont-img">
									<img src="<?php echo URL.APP_PATH.'views/'.DFT?>img/detalle1.jpg" class="img-rounded">
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="title text-center"><?= $array->nombre ?></h2>
								<p class="decription"><?= $array->descripcion ?></p>
								<div class="row">
									<div class="title text-center col-md-6 col-md-offset-3">
										<h3><small>Especificaciones</small></h3>
									</div>

									<div class="col-md-12">
										<span class="label label-info">Fotos</span>
					                    <span class="label label-info">Chocolates</span>
					                    <span class="label label-info">Frases Personalizadas</span>

									</div>
								</div>
								<div class="row">
									<div class="title text-center col-md-6 col-md-offset-3">
										<h3><small>Modificables</small></h3>
									</div>

									<div class="col-md-12">
										<span class="label label-info">Fotos: 4-8</span>
					                    <span class="label label-info">Chocolates</span>
					                    <span class="label label-info">Frases</span>
					                    <span class="label label-info">Color</span>
									</div>
								</div>
								<div class="solicitud">
									<div class="row">
										<div class="col-md-11 col-md-offset-2">
											<button class="btn btn-default"><?= $array->precio ?></button>
											<button type="button" data-toggle="tooltip" data-placement="top" title="" data-container="body" data-original-title="Tiempo minimo necesario para la entrega." class="btn btn-success brn-xs">Duración: 3 dias.</button>
						                    <a href="solicitud.html" class="btn btn-primary btn-round">
						                    	<li class="material-icons">favorite</li> Solicitar
						                    </a>
										</div>
									</div>
								</div>
							</div>
						</div>

				</div>
	        </div>
		</div>
