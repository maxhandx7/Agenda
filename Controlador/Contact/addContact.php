<?php 
require_once "../../Clases/Contacts.php";


  
$dates = array(

            "id_categoria" => isset($_POST["categoryContact"]) ? $_POST["categoryContact"] : NULL,
            "id_user" => $_POST['id_user'],
             "nombre" => $_POST['nombreContact'],
             "paterno" => isset($_POST["apellidoContact"]) ? $_POST["apellidoContact"] : NULL,
             "telefono" => $_POST['telContact'],
             "email" => $_POST['emailContact']


                );

              

            
                
$Contacts = new Contacts();
echo $Contacts->addContact($dates);

?>