<?php
/**
 *
 */
 class User_model extends ActiveRecord\Model
 {


   function login($correo, $password)
   {
     $response = $this::find('first', array('email' => $correo));
     if($response != ''){
       if ($response->password == $password) {
         $this->crearSesion($response->username, $response->id);
         return '1';
       }else{
         return "Los datos ingresados no coinciden!";
       }
     }else{
       return "Correo No Registrado";
     }
   }

   function buscar($id)
   {
     $response = $this::find('first', array('id' => $id));
     if($response != ''){
       $data['nombre'] = $response->nombre;
       $data['username'] = $response->username;
       $data['contraseña'] = $response->password;
       $data['email'] = $response->email;
       $data['telefono'] = $response->telefono;
       return $data;
     }
   }

   public function nuevoRegistro($nombre,$email,$username,$pass)
   {
     $atributos = array('nombre' => $nombre, 'email' => $email, 'username' => $username, 'password' => $pass);
     $this::create($atributos);
     $this::first( array('email' => $email ));
   }

   function crearSesion($user, $id){
     Sesion::setSesion('Usuario', $user);
     Sesion::setSesion('id', $id);
   }

   function actualizar($email, $pass, $nombre, $username,$telefono)
   {
     $user = $this::first(array('id' => Sesion::getSesion('id')));
     $user->nombre = $nombre;
     $user->password = $pass;
     $user->email = $email;
     $user->username = $username;
     $user->telefono = $telefono;
     $user->save();
   }
 }



 ?>
