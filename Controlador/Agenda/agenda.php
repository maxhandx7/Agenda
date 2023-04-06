
<?php
require_once "../../Clases/User.php";
include_once "../Admin/login.php";
include_once "../../Clases/Login.php";
$user = new Login();
$userSession = new UserSession();
$user->setUser($userSession->getCurrentUser());
$Users = $user->getID();

$datos_evento = json_decode(file_get_contents('php://input'));
$dates = array(
    "titulo" => $datos_evento->titleInput,
    "descripcion" => $datos_evento->descripcion,
    "inicio" => $datos_evento->start,
    "fin" => $datos_evento->end,
    "id_user" => $Users
);

$User = new User();
echo $User->addCommitment($dates);


