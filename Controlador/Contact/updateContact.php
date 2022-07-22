<?php 
require_once "../../Clases/Contacts.php";
        $dates = array(
            "idContact" => $_POST['idContact'],
            "id_categoria" => $_POST['categoryContactU'],
            "nombre" => $_POST['nombreContactU'],
            "paterno" => $_POST['apellidoContactU'],
            "telefono" => $_POST['telContactU'],
            "email" => $_POST['emailContactU']
                );  
               
                
$contacts = new Contacts();
echo $contacts->updateContact($dates);

?>