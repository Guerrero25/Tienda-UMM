<?php
	class Detalle extends Model{
		protected $table = "detalles";
		private $descripcion;
		private $nombre;
		private $precio;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $value){
			$this->$atributo = $value;
		}


	}
?>