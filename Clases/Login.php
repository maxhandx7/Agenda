<?php
require_once "Config.php";
class Login extends DB
{

    private $ID;
    private $nombre;
    private $username;


    public function userexists($user, $pass)
    {
        // $md5pass = md5($pass);



        $query = $this->connect()->prepare('SELECT * FROM user WHERE nombre = :user AND pass = :pass');

        $query->execute(['user' => $user, 'pass' => $pass]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setUser($user)
    {

        $query = $this->connect()->prepare('SELECT * FROM user WHERE nombre = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->ID = $currentUser['id_user'];
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['email'];
        }
    }
    public function getID()
    {
        return $this->ID;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->username;
    }
}
