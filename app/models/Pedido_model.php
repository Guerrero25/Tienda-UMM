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


 }


 ?>
