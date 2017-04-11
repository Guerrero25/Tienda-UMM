<?php
class Detalle extends Controller{
	public $response;

	function __construct(){
		$response = "";
		parent::__construct();
	}

	public function index(){
		$this->response = $this->model->datos();
		$d = $this->response;
		require APP_PATH."views/Detalles/index.php";

	}


	public function index2($params){
		$detalle = Detalle::find(1);
		Response::renderDetalles("mostrar", ["nombre" => $detalle->__get("nombre"), "descripcion" => $detalle->__get("descripcion"), "precio" => $detalle->__get("precio")]);
	}
}

 ?>
