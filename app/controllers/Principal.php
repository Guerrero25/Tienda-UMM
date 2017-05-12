<?php
/**
 *
 */
class Principal extends Controller{

  function __construct(){
    parent::__construct();
  }

  public function index()
  {
    if(isset($_SESSION['Usuario'])){
      $this->view->render($this,'principal','');
    }else{
      header("Location:".URL);
    }

  }
}

 ?>
