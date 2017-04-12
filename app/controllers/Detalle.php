<?php
class Detalle extends Controller{


	function __construct(){

		parent::__construct();
	}

	public function index(){
		$this->view->render($this,'index');

	}

	public function index2($params){

	}
}

 ?>
