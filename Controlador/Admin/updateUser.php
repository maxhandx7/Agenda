<?php 
require_once "../../Clases/User.php";
        $dates = array(
            "idUser" => $_POST['id_User'],
            "nombre" => $_POST['nombreUserU'],
            "pass" => $_POST['passUserU'],
            "email" => $_POST['emailUserU'],
            "num" => $_POST['numUserU']
                );  
               
                
$user = new User();
echo $user->updateUser($dates);
