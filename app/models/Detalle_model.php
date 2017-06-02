<?php
	class Detalle_model extends ActiveRecord\Model{

		function todos(){
			return $this::find('all');
		}

		function buscar()
		{
			$detalles = $this::find('all');
			foreach ($detalles as $value) {
				$edit = '<button id="'.$value->id.'" data-toggle="modal" data-target="#editarDetalle" name="edit_detalle" type="button" rel="tooltip" title="Editar Detalle" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </button>';
				$delete = '<button id="'.$value->id.'" name="delete_detalle" type="button" rel="tooltip" title="Cancelar" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                </button>';
				$data['nombre'] = $value->nombre;
				$data['precio'] = $value->precio;
				$data['descripcion'] = $value->descripcion;
				$data['especificaciones'] = $value->especificaciones;
				$data['categoria'] = $value->categoria;
				$data['opciones'] = $edit.$delete;
				$arreglo['data'][]=$data;
			}
			return $arreglo;
		}

		function ver($id){
			$response =  $this::find('first', array('id' => $id));
			if($response != ''){
				$data['id'] = $response->id;
				$data['nombre'] = $response->nombre;
				$data['descripcion'] = $response->descripcion;
				$data['categoria'] = $response->categoria;
				$data['precio']= $response->precio;
				$data['imagen'] = base64_encode($response->imagen);
				$data['comprar'] = URL.'Pedido/nuevo/'.$response->id;
				$data['especificaciones'] = explode(';' , $response->especificaciones);
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

		function nuevo_detalle($nombre, $precio, $categoria, $descripcion, $imagen) {
			$atrr = array('nombre' => $nombre, 'precio' => $precio, 'categoria' => $categoria, 'descripcion' => $descripcion, 'imagen' => $imagen);
			$this::create($atrr);
			return 'Detalle creado exitosamente!';
		}

		function eliminar($id) {
			$detalle = $this::find(array('id' => $id));
			if($detalle != ''){
				$detalle->delete();
				return '1';
			}else{
				return 'El detalle no existe';
			}
		}

		function editar_detalle($id, $nombre, $precio, $categoria, $descripcion, $imagen) {
			$detalle = $this->first(array('id' => $id));
			$detalle->nombre = $nombre;
			$detalle->precio = $precio;
			$detale->categoria = $categoria;
			$detalle->descripcion = $descripcion;
			if ($imagen != '') {
				$detalle->imagen = $imagen;
			}


			$detalle->save();

			return 'Datos actualizados con exito';
		}
	}
?>
