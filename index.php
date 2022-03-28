<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Public/images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <?php require_once "dependencies.php"; ?>
</head>
<body>
   <div class="container">
   <?php require_once "Vistas/Layouts/menu.php"; ?>

    <div class="jumbotron">
        <h1 class="display-4 text-center">Bienvenido</h1>
        <h3 class="display-5 text-center"><b><span>Alan</span></b></h3>
        <p class="lead text-center">Alancarabali@gmail.com</p>
        <hr class="my-4">
       <div class="row">
           <div class="col-sm-6">
               <img  src="Public/images/pp.jpg" height="300" style="border-radius: 50%;  display: block;
                margin: 0px auto;" alt="profile">
           </div>

           <!-- <div class="col-sm-6">
               <div class="card">
                   <div class="card-body">
                       <h5 class="card-title"></h5>
                       <p class="card-text"></p>
                   </div>
               </div>
           </div> -->
       </div>

        
    </div>

    <?php require_once "Vistas/Layouts/Footer.php"; ?>
    </div>
    
</body>
</html>