<?php

require_once '../models/Plato.model.php';

if (isset($_POST['operacion'])) {
  
  $plato = new Plato();

  if ($_POST['operacion'] == 'listar') {
    $datos = $plato->listar();
    echo json_encode($datos);
  }

  if ($_POST['operacion'] == 'registrar') {
    $datos = [
      "tipo"        => $_POST['tipo'],
      "nombreplato" => $_POST['nombreplato'],
      "precio"      => $_POST['precio']
    ];

    $plato->registrar($datos);
  }
}

?>