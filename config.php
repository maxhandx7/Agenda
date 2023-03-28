<?php
include_once "Clases/Login.php";
include_once "Controlador/Admin/login.php";


$userSession = new UserSession();
$user = new Login();

if (isset($_SESSION['user'])) {
    $user->setUser($userSession->getCurrentUser());
    $idUser = $user->getID();
?>


    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Public/images/System/favicon.png" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <?php require_once "dependencies.php"; ?>
    </head>

    <body>
        <div class="container">
            <?php require_once "Vistas/Layouts/menu.php"; ?>

            <div class="jumbotron">
                <h1 class="display-4"><?php echo $user->getNombre(); ?></h1>
                <p class="lead"></p>
                <hr class="my-4">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cambiar imagen de perfil</h5>
                                <a class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalupdatepic">
                                    <i class="fa fa-image"></i>
                                    Abrir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Actualizar Estado</h5>
                                <button class="btn btn-outline-info" type="button" data-bs-toggle="modal" data-bs-target="#modalupdatestate">
                                    <i class="fa-solid fa-face-smile"></i>
                                    Abrir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Actualizar datos de perfil </h5>
                                <a class="btn btn-outline-info" onclick="editUser('<?php echo $idUser ?>')" data-bs-toggle="modal" data-bs-target="#modalupdateuser">
                                    <i class="fa-solid fa-user-pen"></i>
                                    Abrir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once "Vistas/Admin/ModalAddPic.php"; ?>
                <?php require_once "Vistas/Admin/ModalUpdate.php"; ?>
                <?php require_once "Vistas/Admin/ModalUpdatestatus.php"; ?>
            </div>
            <?php require_once "Vistas/Layouts/Footer.php"; ?>

        </div>

    </body>
    <script src="Public/js/admin.js"></script>

    </html>
<?php

} else {
    require_once "Vistas/ErrorPage/404.php";
}


?>