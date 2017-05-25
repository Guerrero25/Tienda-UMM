<?php
/**
 *
 */
class User extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function ver()
  {
    if(isset($_POST['id'])){
      $id = $_POST['id'];
      $response = $this->model->buscar($id);
      echo json_encode($response);
    }
  }

  public function login(){
    if (isset($_POST["email"]) && isset($_POST["password"])) {
      $response = $this->model->login($_POST['email'],$_POST["password"]);
      echo $response;
    }
  }

  public function registro()
  {
    if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["nombre"])&& isset($_POST["username"])){
      $email = ($_POST["email"]);
      $pass = $_POST["password"];
      $nombre = $_POST["nombre"];
      $username = $_POST["username"];

      $response = $this->model->login($email);
      if($response == ''){
        $nuevo = $this->model->nuevoRegistro($nombre,$email,$username,$pass);
        $this->crearSesion($nuevo->username, $nuevo->id);
        echo '1';
      }else {
        echo 'El correo ya esta registrado';
      }
    }
  }

  public function actualizar ()
  {
    $email = ($_POST["email"]);
    $pass = $_POST["password"];
    $nombre = $_POST["nombre"];
    $username = $_POST["username"];
    $telefono = $_POST["telefono"];

    $this->model->actualizar($email, $pass, $nombre, $username,$telefono);
    echo 'Datos Actualizados Exitosamente!';
  }

  function cerrarSesion(){
    Sesion::destroy();

    header("Location:".URL);
  }
}


 ?>
