<?php
class DetalleController{

	public function index(){
		$detalles = Detalle::all();
		Response::renderDetalles("index", $detalles);
	}


	public function mostrar(){
		$detalle = Detalle::find(1);
		Response::renderDetalles("mostrar", ["nombre" => $detalle->__get("nombre"), "descripcion" => $detalle->__get("descripcion"), "precio" => $detalle->__get("precio")]);
	}
}

 ?>
