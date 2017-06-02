<div class="col-md-12" style="height:130px"></div>
<div class="main main-raised">
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="blog" id="informes-partidos" style="padding: 3em 0em;">
              <table class="table" id="pedidosTable">
                <thead>
                  <tr>
                    <th class="text-center">Tema</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Opciones</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td class="text-center">Prueba</td>
                    <td class="text-center">Prueba</td>
                    <td class="text-center">Prueba</td>
                    <td class="td-actions text-center">
            	         <a href="#" data-toggle="modal" data-target= "#usuario" id="<?= $value->id;?>" type="button" rel="tooltip" title="Ver Usuario" class="btn btn-info btn-simple btn-xs">
                         <i class="fa fa-user"></i>
                       </a>
                       <a type="button" rel="tooltip" title="Aceptar" class="btn btn-success btn-simple btn-xs">
                         <i class="fa fa-check"></i>
                       </a>
                       <a type="button" rel="tooltip" title="Cancelar" class="btn btn-danger btn-simple btn-xs">
                         <i class="fa fa-times"></i>
                       </a>
                     </td>
                   </tr>
                 </tbody>
               </table>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>
<!--Modal de Ver detalle-->
	<div class="modal fade" id="usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      </div>
	      <div class="modal-body">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="content">
										<div class="col-sm-12">
											<div class="form-group label-floating">
												<label class="control-label">Nombre</label>
                        <h4 id="nombreH4">Omar  Guerrero</h4>
											</div>
										</div>
									</div>
									<div class="content">
										<div class="col-sm-12">
											<div class="form-group label-floating">
												<label class="control-label">Correo</label>
                        <h4 id="correoH4">guerrero9725@gmail.com</h4>
											</div>
										</div>
									</div>
									<div class="content">
										<div class="col-sm-12">
											<div class="form-group label-floating">
												<label class="control-label">Telefono</label>
                        <h4 id="telefonoH4">3003052880</h4>
											</div>
										</div>
									</div>
									<div class="text-center">
										<a class="btn btn-primary btn-sm" data-dismiss="modal"><i class="material-icons"></i> Aceptar</a>
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
</div>
<script type="text/javascript">
  $(".navbar").removeClass("navbar-transparent");
  $(".navbar").removeClass("navbar-color-on-scroll");
  $(".navbar").addClass("navbar-primary");
  $('body').removeClass('landing-page');
  $('body').addClass('components-page');
</script>

<script src="<?= URL.APP_PATH.'views/'.DFT;?>js/funciones_admin.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
