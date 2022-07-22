<?php 
require_once "../../Clases/Categories.php";
        $dates = array(
            "id_user" => $_POST['id_user'],
            "nombre" => $_POST['nombreCategory'],
             "descripcion" => $_POST['dscategory']
                );

                
$Categories = new Categories();
echo $Categories->addCategory($dates);

?>