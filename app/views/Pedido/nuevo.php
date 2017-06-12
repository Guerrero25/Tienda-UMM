<div class="col-md-12" style="height:130px"></div>
<div class="main main-raised">
  <div class="section landing-section">
    <div class="container">
      <form id="nuevoPedido" name="nuevoPedido" role="form" class="contact-form">
        <div class="row">
          <h3 class="text-center">Informacion del pedido</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="data">
                <p>Para confirmar tu pedido primero debes brindarnos informacion.</p>

                <div class="form-group label-floating">
                  <label for="tema" class="control-label">Tema Principal</label>
                  <input class="form-control" type="text" name="tema" id="tema">
                </div>
                <p>Un tema para el detalle. Ejemplo: Cumpleaños, Aniversario</p>

                <div class="form-group">
                  <label for="" class="control-label"> Descripcion</label>
                  <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                </div>
                <p>Una descripcion en donde expliques los deseos y gustos que te gustaria estuvieran plasmados en el detalle. Si no se llena este campo, el detalle sera fabricado como en la foto.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="product">
                <input type="hidden" name="id" value="<?= $array->id ?>">
                <div class="row">
                  <div class="col-md-6">
                    <div class="cont">
                      <img src="data:image/jpeg;base64,<?php echo base64_encode($array->imagen); ?>" alt="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="informacion">
                      <div class="nombre">
                        <b>Nombre: </b><span><?= $array->nombre; ?></span>
                      </div>
                      <div class="especificaciones card">
                        <h5>Especificaciones</h5>
                        <div class="list">
                          <div class="li label label-info">
                            <b>Tamaño: </b><span>15x15</span>
                          </div>
                        </div>
                        <b>Precio: </b><span><?= $array->precio ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <div class="options">
            <button type="submit" class="btn btn-primary"><i class="material-icons">favorite</i> Confirmar Pedido</button>
            <a href="<?= URL.'Detalle/index' ?>" class="btn btn-danger">Cancelar</a>
          </div>
        </div>
      </form>
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
