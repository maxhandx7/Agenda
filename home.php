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
        <?php require_once "Vistas/Admin/config.php" ?>
        <div class="jumbotron">
            <h1 class="display-4 text-center">Bienvenido</h1>
            <h3 class="display-5 text-center"><b><span><?php echo $user->getNombre(); ?></span></b></h3>
            <p class="lead text-center"><?php echo $user->getEmail(); ?></p>
            <hr class="my-4">
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <?php

                    foreach ($result as $r) {
                        $r['image'];
                    }
                    if (empty($r)) {
                        echo "<img  src='Public/images/user.png' height='300px' width='300px' style='border-radius: 50%;  display: block;
                        margin: 0px auto;' alt='profile'>";
                    } else {
                        echo "<img  src='Public/images/" . $r['image'] . "' height='300px' width='300px' style='border-radius: 50%; 
                        border:1px solid;
                        display: block;
                        margin: 0px auto;' alt='profile'>";
                    }

                    ?>
                </div>

                    <br>
            </div>


            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Estado</h5>
                        <?php

                        foreach ($result2 as $r2) {
                            $r2['estado'];
                        }
                        if ($r2['estado'] ==NULL  ) {
                            echo "<p class='card-text'>Hola, Actualiza tu <a href='http://localhost/Agenda/config.php'>estado.</a></p>";
                        } else {
                            echo "<p class='card-text'>" . $r2['estado'] . "</p>";
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
       


        <?php require_once "Vistas/Layouts/Footer.php"; ?>
    </div>

</body>

</html>