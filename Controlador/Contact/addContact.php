<?php 
require_once "../../Clases/Contacts.php";
        $dates = array(

            "id_categoria" => $_POST['categoryContact'],
            "id_user" => $_POST['id_user'],
             "nombre" => $_POST['nombreContact'],
             "paterno" => $_POST['apellidoContact'],
             "telefono" => $_POST['telContact'],
             "email" => $_POST['emailContact']


                );

              
                
$Contacts = new Contacts();
echo $Contacts->addContact($dates);

?>