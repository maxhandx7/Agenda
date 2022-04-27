<?php
require_once "../../Clases/User.php";

    $dates = array(

    "nombre" => $_POST['txtNombre'],
    "pass" => $_POST['txtPass'],
    "email" => $_POST['txtEmail'] 
   

 );
 
$user = new User();
echo $user->addUser($dates);
