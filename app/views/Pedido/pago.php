<div class="col-md-12" style="height:130px"></div>
<div class="main main-raised">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h4>Pago Por PayPal</h4>
          <p class="text-justify">Para que su pedido sea tenido en cuenta, debera pagar la mitad del monto y cuando se le entrega a otra mitad.</p>
          <p>El total por <span><?= $array['nombre'] ?></span> a pagar es: <span><?= $array['total'] ?></span></p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="guerrero9725@gmail.com">
            <input type="hidden" name="item_name" value="">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="amount" value="<?= $array['total'] ?>">
            <input type="hidden" name="return" value="<?= URL.'Pedido/pagado/'.$array['id'] ?>">
            <input type="hidden" name="cancel_return" value="<?= URL.'Pedido/user' ?>">
            <center><input class="btn btn-primary" type="submit" value="Pagar Ahora"></center>
          </form>
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
