<?php  
require_once "../../Clases/Config.php";

$con = new Conexion();
$conexion = $con->Connect();

$idCategory = $_GET['idCategory'];

 $sql ="SELECT id_categoria, nombre FROM t_categorias  ORDER BY nombre" ;

 $result =mysqli_query($conexion,$sql );
?>

<label for="categoryContact">Categorias</label>
<select name="categoryContactU" id="categoryContactU" class="form-control">
    <?php
    echo '<option value="0" selected="true" >Sin categoría  </option>';
    while ($r = mysqli_fetch_row($result)) {
        if ($r[0] == $idCategory) {
            echo '<option selected value="' . $r['0'] . '">' . $r['1'] . '</option>';
    ?>
        <?php
        } else {
            echo '<option value="' . $r['0'] . '">' . $r['1'] . '</option>';
        ?>
    <?php }
    }
    ?>
</select>
