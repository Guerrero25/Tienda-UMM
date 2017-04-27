<?php
class Detalle extends Controller{


	function __construct(){
		parent::__construct();
	}

	public function index(){
		$response = $this->model->todos();

		$this->view->render($this,'index', $response);
	}

	public function ver($id){
		$response = $this->model->ver($id);

		$this->view->render($this, 'ver',$response);
	}

}

 ?>
