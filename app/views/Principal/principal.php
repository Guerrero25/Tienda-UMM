<?php
  Sesion::start();
  $userName  = Sesion::getSesion('Usuario');
?>
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
							<div class="row">
								<div class="cont-img col-md-6 col-md-offset-3">
									<img src="img/persona.jpg" class="img-circle">
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-md-offset-2 title text-center">
									<h2><?= $userName  ?></h2>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="title text-center">
								<h2><small>Pedidos Relacionados</small></h2>
							</div>

							<div class="panel panel-info">
								<div class="panel-heading">Nombre: Detalle Numero 1</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-4">
											<a class="btn btn-info">Estado: En Proceso</a>
										</div>
										<div class="col-md-4">
											<a class="btn btn-warning">Entrega: 04/25/2017</a>
										</div>
									</div>
								</div>
							</div>

							<div class="panel panel-success">
								<div class="panel-heading">Nombre: Detalle Numero 1</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-4">
											<a class="btn btn-success">Estado: Terminado</a>
										</div>
										<div class="col-md-4">
											<a class="btn btn-warning">Entrega: 04/20/2017</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
	        </div>
		</div>
