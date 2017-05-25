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
      $this->view->render($this,"nuevo",$detalle);
    }

  }

  function guardar_pedido()
  {
    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];
    $id_detalle = $_POST['id_detalle'];

    $response = $this->model->nuevo_pedido($tema, $descripcion, $id_detalle, Sesion::getSesion('id'));
    echo "Pedido generado exitosamente! con id = ".$response;
  }
}

 ?>
