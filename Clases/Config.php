<?php
class Conexion
{
    public function Connect()
    {
        /* $serv = "sql109.epizy.com";
        $user = "epiz_33215471";
        $pass = "ePF4i0ySluq5b9z";
        $db = "epiz_33215471_agenda"; */
        $serv = "localhost";
        $user = "root";
        $pass = "";
        $db = "agenda";

        $con = mysqli_connect($serv, $user, $pass, $db);

        return $con;
    }
}

class DB
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        /* $this->host     = 'sql109.epizy.com';
        $this->db       = 'epiz_33215471_agenda';
        $this->user     = 'epiz_33215471';
        $this->password = "ePF4i0ySluq5b9z";
        $this->charset  = 'utf8mb4'; */
        $this->host     = 'localhost';
        $this->db       = 'agenda';
        $this->user     = 'root';
        $this->password = "";
        $this->charset  = 'utf8mb4';
    }
    function connect()
    {

        try {

            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}
