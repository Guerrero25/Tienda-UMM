<?php
/**
 *
 */
class Pedido extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function nuevo($id) {
    if(Sesion::getSesion('Usuario') == ''){
      $this->view->render($this,'login','');
    }else{
      $detalle = $this->model->detalle($id);
      $this->view->render($this,"nuevo",$detalle);
    }

  }

  function guardar_pedido() {
    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];
    $id_detalle = $_POST['id_detalle'];

    $response = $this->model->nuevo_pedido($tema, $descripcion, $id_detalle, Sesion::getSesion('id'));
    echo $response;
  }

  function pagar_pedido($id_pedido){
    $response = $this->model->datos($id_pedido);

    $this->view->render($this, 'pago', $response);
  }

  function ver() {
    $response = $this->model->todos_pedidos();
    echo json_encode($response);
  }

  function user(){
    $response = $this->model->pedidos_usuario(Sesion::getSesion('id'));
    $this->view->render($this, 'user', $response);
  }

  function pagado($id){
    $this->model->pagado($id);
    header("Location: ".URL."Pedido/user");
  }

  function confirmar(){
    $id = $_POST['id'];
    $this->model->confirmar($id);
    echo 'El pedido a cambiado de estado a *En Proceso*!';
  }


}

 ?>
