<?php

/**
 *
 */
class Admin extends Controller
{

  function index(){
    if(Sesion::getSesion('Usuario') == ''){
      if(Sesion::getSesion('Admin') == ''){
        $this->view->render($this, 'index', '');
      }else{
        $this->view->render($this, 'pedidos', '');
      }
    }else {
      header("Location:".URL);
    }
  }

  function login() {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $response = $this->model->login($user, $password);

    echo $response;
  }

  function detalles() {
    $this->view->render($this, 'detalles', '');
  }


  function pedidos() {
    $this->view->render($this, 'pedidos', '');
  }

  function cerrarSesion() {
    Sesion::destroy();
    header("Location:".URL);
  }

}


 ?>
