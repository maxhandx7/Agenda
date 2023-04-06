<?php
require_once "Config.php";
class User extends Conexion
{

    public function addUser($dates)
    {
        if ($dates['nombre'] == "" && $dates['pass'] == "") {
            return false;
        }
        if ($dates['email'] == "") {
            return false;
        }

        if (strlen($dates['pass']) < 6) {
            return false;
        }

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

    public function addCommitment($dates)
    {
        $conexion = Conexion::Connect();
        $sql = 'INSERT INTO eventos (id_user, titulo, descripcion, inicio, fin) VALUES (?, ?, ?, ?, ?)';
        $query = $conexion->prepare($sql);
        $query->bind_param('issss', $dates['id_user'], $dates['titulo'], $dates['descripcion'], $dates['inicio'], $dates['fin']);
        $answer = $query->execute();
        return $answer;
    }

    public function infoAgenda($idAgenda)
    {
        $conexion = Conexion::Connect();
        $sql = "SELECT  evento.id,
                        evento.titulo,
                        evento.descripcion,
                        evento.inicio,
                        evento.fin
                        FROM eventos AS evento 
                        WHERE evento.id = $idAgenda";

        $result = mysqli_query($conexion, $sql);
        $evento = mysqli_fetch_array($result);

        $dates = array(
            "titulo" => $evento['titulo'],
            "descripcion" => $evento['descripcion'],
            "inicio" => $evento['inicio'],
            "fin" => $evento['fin']
        );

        return $dates;
    }

    public function dropEvent($idEvent)
    {
        $conexion = Conexion::Connect();

        $sql = "DELETE FROM eventos WHERE id = ?";
        $query = $conexion->prepare($sql);

        $query->bind_param('i', $idEvent);
        $answer = $query->execute();

        return $answer;
    }
}
