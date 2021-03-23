<?php

$conexion = mysqli_connect(
  'localhost', 'root', '', 'uefa'
);

$sql="SELECT nombre FROM equipos ";

$realmadrid="SELECT nombre FROM `equipos` WHERE id=1010";

?>
