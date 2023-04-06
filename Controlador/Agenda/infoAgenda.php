<?php 
require_once "../../Clases/User.php";

$idAgenda = $_POST['idAgenda'];
$User = new User();
echo json_encode($User->infoAgenda($idAgenda));
?>