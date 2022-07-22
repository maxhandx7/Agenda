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
        <?php //require_once "Vistas/Admin/config2.php" 
        ?>
        <?php

        include_once "Clases/Config.php";
        $ObjectC = new Conexion();
        $conexion = $ObjectC->Connect();
        $bsq = $_GET["srch"];
        $sql = "SELECT id_user, nombre, email, num FROM user WHERE nombre = '$bsq' ";

        $result = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($result) == 0) {
            echo "<div class='jumbotron'>
        <h4 class='text-danger textdisplay-8 text-left'>Resultado de la Busqueda:</h4>
        <p class='lead text-center'>No hay resultados para:</p>    
        <h3 class='display-5 text-center'><b><span>" . $bsq . "</span></b></h3>
            
            <hr class='my-4'>
        </div>";
            echo "<a href='index.php' class='text-decoration-none'>Volver a inicio</a>";
        } else {
            foreach (mysqli_fetch_all($result, MYSQLI_ASSOC) as $bsqda) {
                $est1 = $bsqda['id_user'];
                $estado = "SELECT estado FROM esatdo WHERE users_id = $est1  ORDER BY esatdo.id ASC";
                $result2 = mysqli_query($conexion, $estado);

                //imagen

                $est3 = $bsqda['id_user'];
                $img = "SELECT image FROM imagen WHERE users_id = $est3  ORDER BY imagen.id ASC";
                $result3 = mysqli_query($conexion, $img);

        ?>
                <div class="jumbotron">
                    <h4 class="text-success textdisplay-8 text-left">Resultado de la Busqueda:</h4>
                    <h3 class="display-5 text-center"><b><span><?php echo $bsqda['nombre']; ?></span></b></h3>
                    <p class="lead text-center"><?php echo $bsqda['email'];
                                            } ?></p>
                    <p class="lead text-center"><?php echo $bsqda['num']; ?></p>
                    <p class="lead text-center"><a href="" class="text-decoration-none"><i>Agregar</i></a></p>
                    <hr class="my-4">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <?php

                            foreach ($result3 as $r2) {
                                $r2['image'];
                            }
                            if (empty($r2)) {
                                echo "<img  src='Public/images/user.png' height='300px' width='300px' style='border-radius: 50%;  display: block;
                        margin: 0px auto;' alt='profile'>";
                            } else {
                                echo "<img  src='Public/images/" . $r2['image'] . "' height='300px' width='300px' style='border-radius: 50%; 
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
                            if (empty($r2)) {
                                echo "<p class='card-text'>Hola, Actualiza tu estado.</p>";
                            } else {
                                echo "<p class='card-text'>" . $r2['estado'] . "</p>";
                            }
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