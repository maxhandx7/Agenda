<?php
include_once "Clases/Login.php";
include_once "Controlador/Admin/login.php";


$userSession = new UserSession();
$user = new Login();

if (isset($_SESSION['user'])) {
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());

    include_once 'home.php';
} else if (isset($_POST['txtuser']) && isset($_POST['txtpassword'])) {

    $userForm = $_POST['txtuser'];
    $passForm = $_POST['txtpassword'];

    $user = new Login();
    if ($user->userExists($userForm, $passForm)) {
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'home.php';
    } else {
        // echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o contraseña incorrecto";

        include_once 'form.php';
    }
} else {
    //echo "no hay sesionm";

    include_once 'form.php';
}
