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

   function buscar($id)
   {
     return $this::find('first', array('id' => $id));
   }

   public function nuevoRegistro($nombre,$email,$username,$pass)
   {
     $atributos = array('nombre' => $nombre, 'email' => $email, 'username' => $username, 'password' => $pass);
     $this::create($atributos);
     $this::first( array('email' => $email ));
   }
 }


 ?>
