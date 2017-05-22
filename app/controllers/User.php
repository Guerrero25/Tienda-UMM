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
      if($response != ''){
        $data['nombre'] = $response->nombre;
        $data['username'] = $response->username;
        $data['contraseña'] = $response->password;
        $data['email'] = $response->email;
        echo json_encode($data);
      }
    }
  }

  public function login(){
    if (isset($_POST["email"]) && isset($_POST["password"])) {
      $response = $this->model->login($_POST['email']);
      if($response != ''){
        if ($response->password == $_POST["password"]) {
          $this->crearSesion($response->username, $response->id);
          echo '1';
        }else{
          echo "Los datos ingresados no coinciden!";
        }
      }else{
        echo "Correo No Registrado";
      }
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

  function crearSesion($user, $id){
    Sesion::setSesion('Usuario', $user);
    Sesion::setSesion('id', $id);
  }

  function cerrarSesion(){
    Sesion::destroy();

    header("Location:".URL);
  }
}


 ?>
