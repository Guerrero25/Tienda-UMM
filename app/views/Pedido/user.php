<div class="col-md-12" style="height:130px"></div>
<div class="main main-raised">
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
          <center><h2>Pedidos de Usuario: <?= Sesion::getSesion('Usuario') ?></h2></center>
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
                  <?php foreach ($array as $value): ?>
                    <tr>
                      <td><?= $value->tema ?></td>
                      <td><?= $value->descripcion ?></td>
                      <td><?= $value->estado ?></td>
                      <td><?= $dato['accion'] = $value->estado == 'sin pagar' ? '<a href="'.URL.'Pedido/pagar_pedido/'.$value->id.'" rel="tooltip" title="Pagar" class="btn btn-success btn-simple btn-xs"><i class="fa fa-check"></i></a>' : ''; ?></td>
                    </tr>
                  <?php endforeach; ?>
                 </tbody>
               </table>
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
