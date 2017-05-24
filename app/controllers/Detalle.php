<?php
class Detalle extends Controller{


	function __construct(){
		parent::__construct();
	}

	public function index(){
		$response = $this->model->todos();

		$this->view->render($this,'index', $response);
	}

	public function ver(){
		if(isset($_POST['id'])){
			$id = $_POST['id'];
			$data = $this->model->ver($id);
			if($data != ''){
				echo json_encode($data, JSON_UNESCAPED_UNICODE);
			}

		}
	}

	public function categoria($categoria)
	{
		$response = $this->model->categoria($categoria);
		if($response != ''){
			$this->view->render($this, 'index', $response);
		}else{
			$response = $this->model->todos();
			$this->view->render($this, 'index', $response);
		}
	}
	public function ultimosAgregados(){
		$response = $this->model->ultimosAgregados();

		echo json_encode($response, JSON_UNESCAPED_UNICODE);
	}

}

 ?>
