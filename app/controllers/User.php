<?php
/**
 *
 */
class User extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function login(){
    if (isset($_POST["email"]) && isset($_POST["password"])) {
      $response = $this->model->login($_POST['email']);
      if ($response->password == $_POST["password"]) {
        $this->crearSesion($response->nombre);
        echo '1';
      }
    }
  }

  function crearSesion($user){
    Sesion::setSesion('Usuario', $user);
  }

  function cerrarSesion(){
    Sesion::destroy();

    header("Location:".URL."public/");
  }
}


 ?>
