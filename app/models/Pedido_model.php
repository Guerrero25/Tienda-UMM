<?php
/**
 *
 */
 class Pedido_model extends ActiveRecord\Model
 {


   function detalle($id)
   {
     return $this->first(array('from' => 'detalle_models', 'conditions' => array('id = ?', $id)));
   }

   function nuevo_pedido($tema, $descripcion, $id_detalle, $id_usuario){
     $atrr = array('tema' => $tema, 'descripcion' => $descripcion, 'id_detalle' => $id_detalle, 'id_usuario'=> $id_usuario, 'estado' => 'sin pagar');
     $pedido = $this->create($atrr);
     return $pedido->id;
   }

   function todos_pedidos() {
     $pedidos = $this::find('all');

     foreach ($pedidos as $value) {
       $user = '<button name="usuario_id" data-toggle="modal" data-target= "#usuario" id="'.$value->id_usuario.'" type="button" rel="tooltip" title="Ver Usuario" class="btn btn-info btn-simple btn-xs">
         <i class="fa fa-user"></i>
       </button>';
       $value->estado == 'pagado' ? $comenzar = ' <button id="'.$value->id.'" name="confirm_pedido" type="button" rel="tooltip" title="Confirmar" class="btn btn-success btn-simple btn-xs"><i class="fa fa-check"></i></button>' : $comenzar = '';
       $cancelar = ' <button type="button" rel="tooltip" title="Cancelar" class="btn btn-danger btn-simple btn-xs" id="'.$value->id.'"><i class="fa fa-times"></i></button>';
       $data['tema'] = $value->tema;
       $data['descripcion'] = $value->descripcion;
       $data['estado'] = $value->estado;
       $data['opciones'] = $user.$comenzar.$cancelar;
       $arreglo['data'][] = $data;
     }
     return $arreglo;
   }

   function datos($id) {
     $pedido = $this->first(array('id' => $id));
     $detalle = $this->detalle($pedido->id_detalle);

     $dato['total'] = $detalle->precio/2;
     $dato['id_pedido'] = $id;
     $dato['nombre'] = $detalle->nombre;
     return $dato;
   }

   function pedidos_usuario($id) {
     $pedidos = $this->find('all', array('id_usuario' => $id));
     return $pedidos;
   }

   function pagado($id) {
     $pedido = $this->first(array('id' => $id));
     $pedido->estado = 'pagado';
     $pedido->save();
   }

   function confirmar($id) {
     $pedido = $this->first(array('id' => $id));
     $pedido->estado = 'en proceso';
     $pedido->save();
   }

 }


 ?>
