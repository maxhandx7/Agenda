<?php 
require_once "../../Clases/Categories.php";
        $dates = array(
            "idCategoria" => $_POST['idCategory'],
            "nombre" => $_POST['nombreCategoryU'],
             "descripcion" => $_POST['dscategoryU']
                );  

                
$Categories = new Categories();
echo $Categories->updateCategory($dates);
