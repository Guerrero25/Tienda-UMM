<?php
/**
 *
 */
class Pedido extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function nuevo($id)
  {
    if(Sesion::getSesion('Usuario') == ''){
      $this->view->render($this,'login','');
    }else{
      $detalle = $this->model->detalle($id);
      $this->view->render($this,$detalle->categoria,$detalle);
    }

  }
}

 ?>
