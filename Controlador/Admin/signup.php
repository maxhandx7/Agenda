<?php
require_once "../../Clases/User.php";

$dates = array(

    "nombre" => $_POST['txtNombre'],
    "pass" => $_POST['txtPass'],
    "email" => $_POST['txtEmail'],
    "num" => $_POST['txtTel']
);
$user = new User();
echo $user->addUser($dates);
