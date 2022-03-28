<?php 
require_once "../../Clases/Categories.php";
        $dates = array(

            "nombre" => $_POST['nombreCategory'],
             "descripcion" => $_POST['dscategory']
                );

                
$Categories = new Categories();
echo $Categories->addCategory($dates);

?>