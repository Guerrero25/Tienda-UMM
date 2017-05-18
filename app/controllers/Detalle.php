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
			$response = $this->model->ver($id);
			if($response != ''){
				$data['id'] = $response->id;
				$data['nombre'] = $response->nombre;
				$data['descripcion'] = $response->descripcion;
				$data['precio']= $response->precio;
				//$data['comprar'] = URL.'Pedido/nuevo/'.$response->id;
				echo json_encode($data, JSON_UNESCAPED_UNICODE);
			}

		}
	}

	public function ultimosAgregados(){
		$response = $this->model->ultimosAgregados();
		foreach ($response as $value) {
			$data['id'] = $value->id;
			$data['nombre'] = $value->nombre;
			$data['precio'] = $value->precio;
			$data['ver'] = $value->id;
			$arreglo[] = $data;
		}
		echo json_encode($arreglo, JSON_UNESCAPED_UNICODE);
	}

}

 ?>
