<?php 
require_once "../../Clases/User.php";

$idUser = $_POST['idUser'];
$User = new User();
echo json_encode($User->editUser($idUser));
