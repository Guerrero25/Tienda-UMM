<?php
/**
 *
 */
class Conexion extends Controller
{

  function __construct()
  {
    $this->db = new QueryManager("localhost","root", "", "umm");
  }
}


 ?>
