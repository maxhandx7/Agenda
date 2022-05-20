<?php 
$ObjectC = new Conexion();
$conexion = $ObjectC->Connect();
$lol = $user->getID();
$sql = "SELECT image FROM imagen WHERE users_id = $lol  ORDER BY imagen.id ASC";
$sql2 = "SELECT estado FROM esatdo WHERE users_id = $lol ORDER BY esatdo.id ASC";

$result = mysqli_query($conexion, $sql);
$result2 = mysqli_query($conexion, $sql2);
