<?php
	class Detalle_model extends ActiveRecord\Model{

		function todos(){
			return $this::find('all');
		}

		function ver($id){
			return $this::find('first', array('id' => $id));
		}

		function ultimosAgregados(){
			return $this::find('all');
		}

		function categoria($categoria){
			return $this::find('all', array('categoria' => $categoria));
		}
	}
?>
