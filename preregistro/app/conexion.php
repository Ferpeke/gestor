<?php
  
  function conexion() {
    $conexion = new mysqli('localhost:8080', 'root', '', 'preregistro');

    if ($conexion->connect_errno) {
      echo 'Error en la conexion'.$conexion->connect_error;

      $conexion->set_charset("utf8");

      return $conexion;
    }
  }
  
  
?>