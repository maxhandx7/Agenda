<?php require_once "../../Clases/Config.php";
include_once "../../Controlador/Admin/login.php";
include_once "../../Clases/Login.php";


$ObjectC = new Conexion();
$user = new Login();
$conexion = $ObjectC->Connect();
$userSession = new UserSession();
$user->setUser($userSession->getCurrentUser());
$lol = $user->getID();
    
   
    
    $conexion = $ObjectC->Connect();
    $sql = "SELECT * FROM t_categorias WHERE users_id = $lol"; 
    $result = mysqli_query($conexion, $sql);
?>