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

   public function nuevoRegistro($nombre,$email,$username,$pass)
   {
     $atributos = array('nombre' => $nombre, 'email' => $email, 'username' => $username, 'password' => $pass);
     $this::create($atributos);
   }
 }


 ?>
