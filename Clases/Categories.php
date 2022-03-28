<?php

require_once "Config.php"  ;
class Categories extends Conexion{
public function addCategory($dates){
    
    $conexion = Conexion::Connect();
    $sql ="INSERT INTO t_categorias (nombre,descripcion) VALUES(?,?)";

    $query = $conexion->prepare($sql);
    $query->bind_param('ss', $dates['nombre'], $dates['descripcion']);
    $answer = $query->execute();

    return $answer;
}

public function dropCategory($Category_id){
    $conexion = Conexion::Connect();

    $sql ="DELETE FROM t_categorias WHERE id_categoria = ?";
    $query = $conexion->prepare($sql);

    $query->bind_param('i', $Category_id);
    $answer = $query->execute();

    return $answer;
}

public function editCategory($Category_id){
    $conexion = Conexion::Connect();

    $sql ="SELECT id_categoria, nombre, descripcion FROM t_categorias WHERE id_categoria = '$Category_id'";
    $result = mysqli_query($conexion, $sql);
    $category = mysqli_fetch_array($result);
    $dates = array("Category_id" => $category['id_categoria'],
    "nombre" => $category['nombre'],
    "descripcion" => $category['descripcion'],
    );

    return $dates;
}
public function updateCategory($dates){
    $conexion = Conexion::Connect();
    $sql ="UPDATE t_categorias SET nombre = ?, descripcion= ? WHERE id_categoria = ?";

    $query = $conexion->prepare($sql);
    $query->bind_param('ssi', $dates['nombre'], $dates['descripcion'], $dates['idCategoria']);
    $answer = $query->execute();

   return $answer;
}

}
