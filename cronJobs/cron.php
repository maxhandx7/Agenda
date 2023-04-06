<?php
require_once "../Clases/Config.php";
include_once "../Controlador/Admin/login.php";
include_once "../Clases/Login.php";

$ObjectC = new Conexion();
$user = new Login();
$conexion = $ObjectC->Connect();
$userSession = new UserSession();
$user->setUser($userSession->getCurrentUser());
$lol = $user->getID();

$sql = "select evento.titulo as titulo, 
               evento.inicio as fecha, 
               evento.descripcion as descripcion, 
               users.email as email 
               from eventos as evento 
               INNER JOIN user as users 
               ON evento.id_user = users.id_user 
               WHERE users.id_user = $lol";

$result = mysqli_query($conexion, $sql);

global $fecha_envio;
global $titulo;
global $descripcion;
global $email;


foreach ($result as $value) {
    $fecha_envio = $value['fecha'];
    $titulo = $value['titulo'];
    $descripcion = $value['descripcion'];
    $email = $value['email'];
}

if (date('Y-m-d') == $fecha_envio) {
    enviar_correo(
        $fecha_envio,
        $titulo,
        $descripcion,
        $email
    );
}


function enviar_correo($titulo, $descripcion, $email)
{
    $para = $email;
    $titulo = $titulo;
    $mensaje = $descripcion;
    $cabeceras = 'De: maxhand171996@gmail.com' . "\r\n" .
        'Responder a: maxhand171996@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($para, $titulo, $mensaje, $cabeceras);
}
