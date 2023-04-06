<?php 
require_once "../../Clases/User.php";

$idEvent = $_POST['idEvent'];

$User = new User();
echo $User ->dropEvent($idEvent);
?>