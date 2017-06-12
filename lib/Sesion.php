<?php
/**
 *
 */
class Sesion{

  static function start(){
    @session_start();
  }

  static function getSesion($name){
    if(isset($_SESSION[$name])){
      return $_SESSION[$name];
    }else{
      return '';
    }

  }

  static function setSesion($name, $data){
    $_SESSION[$name] = $data;
  }

  static function destroy(){
    @session_destroy();
  }
}


 ?>
