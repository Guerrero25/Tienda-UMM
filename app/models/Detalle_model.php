<?php
	class Detalle_model{
		protected $table = "detalles";
		private $descripcion;
		private $nombre;
		private $precio;

		function __construct(){
			$this->descripcion = "Detalle para un gran amor";
			$this->nombre = "Detalle Grande";
			$this->precio = "55000";
		}

		public function datos(){
			$datos = array($this->descripcion, $this->nombre, $this->precio );
			return $datos;
		}

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $value){
			$this->$atributo = $value;
		}


	}
?>
