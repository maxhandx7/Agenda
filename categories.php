<?php
include_once "Clases/Login.php";
include_once "Controlador/Admin/login.php";


$userSession = new UserSession();
$user = new Login();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());

   ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Public/images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <?php require_once "dependencies.php"; ?>
</head>
<body>
   <div class="container">
    <?php require_once "Vistas/Layouts/menu.php"; ?>
    
    <div class="jumbotron">
        <h1 class="display-4">Categorias</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <p>  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaladdcategory">
        <i class="fa fa-plus"></i>  
        Agregar categoria
</button> </p>
    <div id="TableLoadCategories"></div>
    <?php require_once "Vistas/Categories/ModalUpdate.php"; ?>
    <?php require_once "Vistas/Categories/ModalAdd.php"; ?>
    </div>
    <?php require_once "Vistas/Layouts/Footer.php"; ?>
    </div>
    

<script src="Public/js/categories.js"></script>
</body>
</html>

<?php

} else {
    require_once "Vistas/ErrorPage/404.php";
}


?>