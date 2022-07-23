<?php
require_once "Config.php";
class User extends Conexion
{

    public function addUser($dates)
    {

        $conexion = Conexion::Connect();
        $sql = "INSERT INTO user (nombre, pass, email, num) VALUES(?,?,?,?)";

        $query = $conexion->prepare($sql);
        $query->bind_param('sssi', $dates['nombre'], $dates['pass'], $dates['email'], $dates['num']);
        $answer = $query->execute();

        return $answer;
    }

    public function editUser($idUser)
    {
        $conexion = Conexion::Connect();

        $sql = "SELECT id_user, nombre, pass, email, num FROM user WHERE id_user = '$idUser'";
        $result = mysqli_query($conexion, $sql);
        $user = mysqli_fetch_array($result);
        $dates = array(
            "idUser" => $user['id_user'],
            "nombre" => $user['nombre'],
            "pass" => $user['pass'],
            "email" => $user['email'],
            "num" => $user['num']
        );
         
        return $dates;
    }

    public function updateUser($dates)
    {
        $conexion = Conexion::Connect();
        $sql = "UPDATE user SET  nombre= ?,  pass= ?, email= ?, num=? WHERE id_user = ?";

        $query = $conexion->prepare($sql);
        $query->bind_param('sssii',  $dates['nombre'], $dates['pass'], $dates['email'], $dates['num'], $dates['idUser']);
        $answer = $query->execute();

        return $answer;
    }

    public function addimg($dates)
    {

        $conexion = Conexion::Connect();
        $sql = "REPLACE INTO imagen (users_id ,image) VALUES(?,?)";

        $query = $conexion->prepare($sql);
        $query->bind_param('is', $dates['iduser'], $dates['ruta']);
        $answer = $query->execute();

        return $answer;
    }


    public function addStatus($dates)
    {

        $conexion = Conexion::Connect();
        $sql = "REPLACE INTO esatdo (users_id ,estado) VALUES(?,?)";

        $query = $conexion->prepare($sql);
        $query->bind_param('is', $dates['id_userS'], $dates['est']);
        $answer = $query->execute();

        return $answer;
    }
}
