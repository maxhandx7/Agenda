<?php
include_once "Clases/Login.php";
include_once "Controlador/Admin/login.php";


$userSession = new UserSession();
$user = new Login();

if (isset($_SESSION['user'])) {
    $user->setUser($userSession->getCurrentUser());
    $Users = $user->getID();

?>


    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Public/images/System/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda</title>
        <?php require_once "dependencies.php"; ?>
    </head>

    <body>
        <div class="container">
            <?php require_once "Vistas/Layouts/menu.php"; ?>

            <div class="jumbotron">
                <h1 class="display-4">Agenda</h1>
                <p class="lead"></p>
                <hr class="my-4">
                <?php require_once "Vistas/Agenda/TableAgenda.php"; ?>
                <?php require_once "Vistas/Agenda/ModalInfo.php"; ?>
            </div>
            <?php require_once "Vistas/Layouts/Footer.php"; ?>

        </div>
        <script src="Public/js/agenda.js"></script>
    </body>

    </html>
<?php

} else {
    require_once "Vistas/ErrorPage/404.php";
}


?>