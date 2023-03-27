<?php

require_once "Config.php";
class Contacts extends Conexion
{
    public function addContact($dates)
    {

        $conexion = Conexion::Connect();
        $sql = "INSERT INTO t_contactos (id_categoria, users_id, nombre, paterno, telefono, email) VALUES(?,?,?,?,?,?)";


        $query = $conexion->prepare($sql);
        $query->bind_param('iissss', $dates['id_categoria'], $dates['id_user'], $dates['nombre'], $dates['paterno'], $dates['telefono'], $dates['email']);
        $answer = $query->execute();



        return $answer;
    }

    public function dropContact($idContact)
    {
        $conexion = Conexion::Connect();

        $sql = "DELETE FROM t_contactos WHERE id_contactos = ?";
        $query = $conexion->prepare($sql);

        $query->bind_param('i', $idContact);
        $answer = $query->execute();

        return $answer;
    }

    public function editContact($idContact)
    {
        $conexion = Conexion::Connect();

        $sql = "SELECT id_contactos, id_categoria, nombre, paterno, telefono, email FROM t_contactos WHERE id_contactos = '$idContact'";
        $result = mysqli_query($conexion, $sql);
        $contact = mysqli_fetch_array($result);
        $dates = array(
            "idContact" => $contact['id_contactos'],
            "id_categoria" => $contact['id_categoria'],
            "nombre" => $contact['nombre'],
            "paterno" => $contact['paterno'],
            "telefono" => $contact['telefono'],
            "email" => $contact['email']
        );

        return $dates;
    }
    public function infoContact($idContact)
    {
        $conexion = Conexion::Connect();
        $sql = "SELECT contactos.id_contactos AS idContacts,
                       contactos.nombre AS nombre, 
                       contactos.paterno AS paterno, 
                       contactos.telefono AS telefono, 
                       contactos.email AS email, 
                       categorias.nombre AS categoria, 
                       contactos.fechaInsert AS fechaInsert 
                       FROM t_contactos AS contactos 
                       LEFT JOIN t_categorias AS categorias ON contactos.id_categoria = categorias.id_categoria 
                       WHERE contactos.id_contactos = $idContact";

        $result = mysqli_query($conexion, $sql);
        $contact = mysqli_fetch_array($result);
        
        $dates = array(
            "nombre" => $contact['nombre'],
            "paterno" => $contact['paterno'],
            "telefono" => $contact['telefono'],
            "email" => $contact['email'],
            "categoria" => $contact['categoria'],
            "fechaInsert" => $contact['fechaInsert']
        );

        return $dates;
    }
    public function updateContact($dates)
    {
        $conexion = Conexion::Connect();
        $sql = "UPDATE t_contactos SET id_categoria = ?, nombre= ?,  paterno= ?, telefono= ?, email= ? WHERE id_contactos = ?";

        $query = $conexion->prepare($sql);
        $query->bind_param('issssi', $dates['id_categoria'], $dates['nombre'], $dates['paterno'], $dates['telefono'], $dates['email'], $dates['idContact']);
        $answer = $query->execute();

        return $answer;
    }
}
