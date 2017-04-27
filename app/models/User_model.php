<?php
/**
 *
 */
 class User_model extends ActiveRecord\Model
 {


   function login($correo)
   {
     return $this::find('first', array('email' => $correo));
   }
 }


 ?>
