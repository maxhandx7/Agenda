<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Public/Style.css">
  <link rel="shortcut icon" href="Public/images/favicon.png" type="image/x-icon">
  <title>Agenda | Login</title>
</head>

<body>

  <form class="box" action="Controlador/Admin/login.php" method="POST">
    <img src="Public/images/LOGO.svg" alt="">
    <input type="text" name="txtuser" autocomplete="off" id="user" placeholder="Nombre">
    <input type="password" name="txtpassword" autocomplete="off" id="password" placeholder="ContraseÃ±a">
    <input type="submit" value="Entrar">
    <a href="Vistas/Admin/Register.php"><p  style="text-decoration: none; color:white"> Registrar</p></a>
  </form>
</body>

</html>
