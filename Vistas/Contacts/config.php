<?php require_once "../../Clases/Config.php";
include_once "../../Controlador/Admin/login.php";
include_once "../../Clases/Login.php";


$ObjectC = new Conexion();
$user = new Login();
$conexion = $ObjectC->Connect();
$userSession = new UserSession();
$user->setUser($userSession->getCurrentUser());
$lol = $user->getID();
$sql = "SELECT contactos.nombre AS nombre,
        contactos.paterno AS paterno,
        contactos.telefono AS telefono, 
        contactos.email AS email, 
        contactos.users_id, 
        categorias.nombre AS categoria, 
        contactos.id_contactos AS idContact 
        
        FROM t_contactos AS contactos INNER JOIN t_categorias AS categorias ON contactos.id_categoria = categorias.id_categoria WHERE contactos.users_id = $lol ";
$result = mysqli_query($conexion, $sql);


?>