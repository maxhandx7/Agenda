<?php 
require_once "../../Clases/Contacts.php";
        $dates = array(

            "id_categoria" => $_POST['categoryContact'],
             "nombre" => $_POST['nombreContact'],
             "paterno" => $_POST['apellidoContact'],
             "telefono" => $_POST['telContact'],
             "email" => $_POST['emailContact']


                );


                
$Contacts = new Contacts();
echo $Contacts->addContact($dates);

?>