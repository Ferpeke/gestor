<?php
  
  class Conectar {

    public function conexion() {
      // $servidor = "localhost";
      // $usuario = "root";
      // $base = "gestor";
      // $puerto = "33061";

      $conexion = mysqli_connect("localhost","root", "", "gestor", "33061");
      $conexion->set_charset('utf8mb4');
      return $conexion;

    }
  }
  
?>