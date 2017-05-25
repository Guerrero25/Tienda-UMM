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


 }


 ?>
