<?php

/**
 *
 */
class Admin extends Controller
{

  function index(){
    if(Sesion::getSesion('Admin') == ''){
      $this->view->render($this, 'index', '');
    }else {
      $this->view->render($this, 'pedidos', '');
    }
  }

  function login() {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $response = $this->model->login($user, $password);

    echo $response;
  }

  function nuevo_detalle() {
    $this->view->render($this, 'nuevo', '');
  }

  function listar_detalles() {
    $this->view->render($this, 'detalles', '');
  }

  function pedidos() {
    $this->view->render($this, 'pedidos', '');
  }


}


 ?>
