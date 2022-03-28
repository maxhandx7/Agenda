<?php 
class Conexion{
    public function Connect(){
        $serv = "localhost";
        $user = "root";
        $pass = "";
        $db = "agenda";

        $con = mysqli_connect($serv, $user, $pass, $db);

        return $con;
    }
}

/*Class Connection{
	//datos de acceso
	private $server = "mysql:host=localhost;dbname=agenda";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "Hubo un problema con la conexiÃ³n: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 */




?> 