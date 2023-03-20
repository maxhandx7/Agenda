<form class="box" method="post">
    <img src="Public/images/LOGO.svg" alt="">

    <?php

    if (isset($errorLogin)) {
        echo  "<div style='background-color: #f02849; border-radius: 2.5%; border: 2px solid #f02849;'> <span style='color: white;'>" . $errorLogin . "</span></div>";
    }
    ?>
    <input type="text" name="txtuser" autocomplete="off" id="txtNombre" placeholder="Nombre">
    <input type="password" name="txtpassword" autocomplete="off" id="txtPass" placeholder="Contraseña">
    <input type="submit" id="entrar" value="Entrar">
    <a class="btn_reg" id="btn" href="/Vistas/Admin/Register.php"> <span style="font-size: 12px;"> Registrar </span></a>
</form>