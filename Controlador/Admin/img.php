<?php 
require_once "../../Clases/User.php";

$carpeta = "../../Public/images/";
$nombre_archivo = "imagen_".date("dHis") .".". pathinfo($_FILES["pic"]["name"],PATHINFO_EXTENSION);

$usuario = $_POST['idUser'];

$RUTA_FINAL = $carpeta.$nombre_archivo;

if (move_uploaded_file($_FILES["pic"]["tmp_name"],$RUTA_FINAL)) {
    
    $dates = array(

        "iduser" => $usuario, 
        "ruta" => $nombre_archivo
    
     );
     $user = new User();
     echo $user->addimg($dates);

}else{
    echo "no se pudo guardar";
}
