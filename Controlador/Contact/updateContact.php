<?php 
require_once "../../Clases/Contacts.php";
        $dates = array(
            "idContact" => $_POST['idContact'],
            "id_categoria" => isset($_POST["categoryContactU"]) ? $_POST["categoryContactU"] : NULL,
            "nombre" => $_POST['nombreContactU'],
            "paterno" => $_POST['apellidoContactU'],
            "telefono" => $_POST['telContactU'],
            "email" => $_POST['emailContactU'],
            "avatar" => $_POST['imgUpdate']
                );  
               
                
$contacts = new Contacts();
echo $contacts->updateContact($dates);

?>