<div class="col-md-12" style="height:130px"></div>
<div class="main main-raised">
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="blog" style="padding: 3em 0em;">
            <div class="card">
              <table class="table" id="detallesTable">
                <a href="#" data-toggle="modal" data-target= "#detalle" id="<?= $value->id;?>" class="btn btn-primary"><i class="material-icons">add</i>Agregar Detalle</a>
                <thead>
                  <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Especificaciones</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Opciones</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
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
          <form enctype="multipart/form-data" id="nuevoDetalle">
            <div class="col-md-17">
  						<div class="row">
  							<div class="col-md-6">
  								<div class="content">
  									<div class="xdc">
  										<label for="imagen">Seleccionar Imagen</label>
    									<input type="file" name="imagen" id="imagen">
  									</div>
  								</div>
  							</div>
  							<div class="col-md-6">
  								<div class="card">
  									<div class="content">
  										<div class="col-sm-12">
  											<div class="form-group label-floating">
  												<label class="control-label">Nombre</label>
  												<input type="text" class="form-control" id="nombre" name="nombre">
  											</div>
  										</div>
  									</div>
  									<div class="content">
  										<div class="col-sm-12">
  											<div class="form-group label-floating">
  												<label class="control-label">$ Precio</label>
  												<input type="number" class="form-control" id="precio" name="precio">
  											</div>
  										</div>
  									</div>
  									<div class="content">
  										<div class="col-sm-12">
  											<div class="form-group label-floating">
  												<label class="control-label">Categoria</label>
  												<input type="text" class="form-control" id="categoria" name="categoria">
  											</div>
  										</div>
  									</div>
  									<div class="content">
  										<div class="col-sm-12">
  											<textarea class="form-control" placeholder="Descripcion" rows="3" id="descripcion" name="descripcion"></textarea>
  										</div>
  									</div>
  								<div class="opciones pull-right">
  									<button type="submit" id="agregar" class="btn btn-primary btn-sm"><i class="material-icons">add</i> Agregar</button>
  									<button type="button" href="#" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</button>
  								</div>
  							</div>
  						</div>
  					</div>
  	      </div>
          </form>
	      <div class="modal-footer">

	      </div>
	    </div>
	  </div>
	</div>
</div>

<!--Modal de Editar Detalle-->
	<div class="modal fade" id="editarDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	      </div>
	      <div class="modal-body">
          <form enctype="multipart/form-data" id="editarDetalle">
            <div class="col-md-17">
  						<div class="row">
  							<div class="col-md-6">
  								<div class="content">
  									<div class="xdc">
  										<label for="imagen">Seleccionar Imagen</label>
    									<input type="file" name="imagen" id="imagen">
											<input type="text" class="form-control" id="id" name="id" style="display:none">
  									</div>
  								</div>
  							</div>
  							<div class="col-md-6">
  								<div class="card">
  									<div class="content">
  										<div class="col-sm-12">
  											<div class="form-group">
  												<label class="control-label">Nombre</label>
  												<input type="text" class="form-control" id="nombre" name="nombre">
  											</div>
  										</div>
  									</div>
  									<div class="content">
  										<div class="col-sm-12">
  											<div class="form-group">
  												<label class="control-label">$ Precio</label>
  												<input type="number" class="form-control" id="precio" name="precio">
  											</div>
  										</div>
  									</div>
  									<div class="content">
  										<div class="col-sm-12">
  											<div class="form-group">
  												<label class="control-label">Categoria</label>
  												<input type="text" class="form-control" id="categoria" name="categoria">
  											</div>
  										</div>
  									</div>
  									<div class="content">
  										<div class="col-sm-12">
												<label class="control-label">Descripcion</label>
  											<textarea class="form-control" placeholder="Descripcion" rows="3" id="descripcion" name="descripcion"></textarea>
  										</div>
  									</div>
  								<div class="opciones pull-right">
  									<button type="submit" id="agregar" class="btn btn-primary btn-sm"><i class="material-icons">add</i> Confirmar</button>
  									<button type="button" href="#" class="btn btn-danger btn-simple" data-dismiss="modal">Cancelar</button>
  								</div>
  							</div>
  						</div>
  					</div>
  	      </div>
          </form>
	      <div class="modal-footer">

	      </div>
	    </div>
	  </div>
	</div>
</div>
<!--Final Modal de Editar Detalle-->
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
