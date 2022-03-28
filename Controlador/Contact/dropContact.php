<?php 
require_once "../../Clases/Contacts.php";

$idContact = $_POST['idContact'];

$contacts = new Contacts();
echo $contacts ->dropContact($idContact);
?>