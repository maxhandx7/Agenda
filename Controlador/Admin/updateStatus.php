<?php
require_once "../../Clases/User.php";

    $dates = array(

    "id_userS" => $_POST['id_userS'],
    "est" => $_POST['est']


 );
 
$user = new User();
echo $user->addStatus($dates);
