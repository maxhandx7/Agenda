<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Public/images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <?php require_once "dependencies.php"; ?>
</head>
<body>
   <div class="container">
   <?php require_once "Vistas/Layouts/menu.php"; ?>

    <div class="jumbotron">
        <h1 class="display-4">Contactos</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <div class="mx-auto align-items-center">
        <p>  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaladdcontacts">
        <i class="fa fa-user-plus"></i>  
        Añadir contacto
        </button> </p></div>
    <div id="TableLoadContacts"></div>
    <?php require_once "Vistas/Contacts/ModalUpdate.php"; ?>
    <?php require_once "Vistas/Contacts/ModalAdd.php"; ?>
    </div>
    <?php require_once "Vistas/Layouts/Footer.php"; ?>
    
    </div>
    <script src="Public/js/contacts.js"></script>
</body>
</html>