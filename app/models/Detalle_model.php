<?php
	class Detalle_model extends ActiveRecord\Model{

		function todos(){
			return $this::find('all');
		}

		function ver($id){
			$response =  $this::find('first', array('id' => $id));
			if($response != ''){
				$data['id'] = $response->id;
				$data['nombre'] = $response->nombre;
				$data['descripcion'] = $response->descripcion;
				$data['precio']= $response->precio;
				$data['imagen'] = base64_encode($response->imagen);
				$data['comprar'] = URL.'Pedido/nuevo/'.$response->id;
				return $data;
			}else{
				return '';
			}
		}

		function ultimosAgregados(){
			$response =  $this::find('all');
			foreach ($response as $value) {
				$data['id'] = $value->id;
				$data['nombre'] = $value->nombre;
				$data['precio'] = $value->precio;
				$data['ver'] = $value->id;
				$data['imagen'] = base64_encode($value->imagen);
				$data['comprar'] = URL.'Pedido/nuevo/'.$value->id;
				$arreglo[] = $data;
			}
			return $arreglo;
		}

		function categoria($categoria){
			return $this::find('all', array('categoria' => $categoria));
		}
	}
?>
