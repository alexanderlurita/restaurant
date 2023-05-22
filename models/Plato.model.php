<?php

require_once 'Conexion.php';

class Plato extends Conexion{

  private $conexion;

  public function __CONSTRUCT() {
    $this->conexion = parent::getConexion();
  }

  public function listar() {
    try {
      $consulta = $this->conexion->prepare("SELECT * FROM platos ORDER BY idplato");
      $consulta->execute();

      $tabla = $consulta->fetchAll(PDO::FETCH_ASSOC);
      return $tabla;
    } catch(Exception $e) {
      die($e->getMessage());
    }
  }

  public function registrar($datos = []) {
    try {
      $consulta = $this->conexion->prepare("INSERT INTO platos(tipo, nombreplato, precio) VALUES (?,?,?)");
      $consulta->execute(array(
        $datos["tipo"],
        $datos["nombreplato"],
        $datos["precio"]
      ));
    } catch(Exception $e) {
      die($e->getMessage());
    }
  }

}

?>