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

	public function ultimosAgregados(){
		$response = $this->model->ultimosAgregados();
		foreach ($response as $value) {
			$data['id'] = $value->id;
			$data['nombre'] = $value->nombre;
			$data['precio'] = $value->precio;
			$data['ver'] = URL.'Detalle/ver/'.$value->id;
			$arreglo[] = $data;
		}
		echo json_encode($arreglo);
	}

}

 ?>
