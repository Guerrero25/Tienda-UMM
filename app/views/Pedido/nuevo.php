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
                <div class="form-group label-floating">
                  <label for="tema" class="control-label">Tema Principal</label>
                  <input class="form-control" type="text" name="tema" id="tema">
                </div>
                <div class="form-group label-floating">
                  <label for="" class="control-label">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h3 class="text-center">Metodos de Pago</h3>
            <p>Para la realizacion de su pedido debera consignar por lo menos la mitad del pedido para que se empiece a fabricar. Realize su consignacion a la cuenta <strong>661727718182</strong>
            con la referencia <strong>2142312</strong></p>
            <div class="price">
              <h4 class="text text-center ">Total a pagar: $ <?= $array->precio/2; ?></h4>
            </div>
            <p>Luego de realizar el pago, debera confirmar su pago enviando una foto del recibo el item de pedidos.</p>
          </div>
          <div class="col-md-8 col-md-offset-2">
            <div class="options">
              <button type="submit" class="btn btn-primary"><i class="material-icons">favorite</i> Confirmar Pedido</button>
              <a href="<?= URL.'Detalle/index' ?>" class="btn btn-danger">Cancelar</a>
            </div>
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
