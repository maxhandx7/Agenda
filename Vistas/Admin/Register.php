<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar nuevo usuario</title>
  <link rel="shortcut icon" href="../../Public/images/System/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../../Public/Style.css">
  <link rel="stylesheet" href="../../node_modules/sweetalert2/dist/sweetalert2.css">
</head>
<body>
  <form id="frmadduser" class="box">
    <section class="Form-register">
      <h1>Nuevo usuario</h1>
      <input class="controls" name="txtNombre" autocomplete="off" type="text" id="nombretxt" placeholder="Usuario *" require>

      <input class="controls" name="txtPass" autocomplete="off" type="password" id="passtxt" placeholder="Contraseña *" require>

      <input class="controls" name="Passconfirm" autocomplete="off" type="password" id="Passconfirm" placeholder="Confirmar contraseña *" require>

      <input class="controls" name="txtEmail" id="txtEmail" type="email" placeholder="Email" require>

      <input class="controls" name="txtTel" autocomplete="off" id="txtTel" type="number" placeholder="Telefono" require>

      <button type="button" class="boton" id="btnuser">Registrar</button>
      <a class="btn_reg" id="btn" href="/index.php"> <span style="font-size: 12px;"> Login </span></a>
    </section>
  </form>
  <script src="../../Public/js/jquery-3.6.0.min.js"></script>
  <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
  <script src="../../Public/js/admin.js"></script>

</body>

</html>