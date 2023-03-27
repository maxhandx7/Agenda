<?php 
require_once "../../Clases/Contacts.php";

$idContact = $_POST['idContact'];
$Contacts = new Contacts();
echo json_encode($Contacts->infoContact($idContact));
?>