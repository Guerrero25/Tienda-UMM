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

	public function buscar(){
		$response = $this->model->buscar();
		echo json_encode($response);
	}

	public function nuevo(){
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$categoria = $_POST['categoria'];
		$descripcion = $_POST['descripcion'];
		$imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

		$response = $this->model->nuevo_detalle($nombre, $precio, $categoria, $descripcion, $imagenBinaria);
		echo $response;
	}

	public function eliminar() {
		$id = $_POST['id'];
		$response = $this->model->eliminar($id);
		echo $response;
	}

	public function editar()
	{
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$categoria = $_POST['categoria'];
		$descripcion = $_POST['descripcion'];
		 $imagenBinaria = isset($_FILES['imagen']) ? addslashes(file_get_contents($_FILES['imagen']['tmp_name'])) : '';


		$response = $this->model->editar_detalle($id, $nombre, $precio, $categoria, $descripcion, $imagenBinaria);
		echo $response;
	}
}

 ?>
