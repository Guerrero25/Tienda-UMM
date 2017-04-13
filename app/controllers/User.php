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
      $response = $this->model->login('*',"email = '".$_POST['email']."'");
      $response = $response[0];
      if ($response["password"] == $_POST["password"]) {
        echo "1";
      }
    }
  }
}


 ?>
