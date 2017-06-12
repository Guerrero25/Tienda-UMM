<?php
  /**
   *
   */
  class Admin_model extends ActiveRecord\Model
  {
    function login($user, $password) {
      $admin = $this->first(array('user' => $user));

      if($admin != ''){
        if($admin->password == $password){
          Sesion::setSesion('Admin', $user);
          return '1';
        }else {
          return 'Contraseña Incorrecta!';
        }
      }else{
        return 'Usuario incorrecto';
      }
    }


  }

 ?>
