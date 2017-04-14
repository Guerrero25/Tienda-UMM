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
    $this->view->render($this,'principal');
  }
}

 ?>
