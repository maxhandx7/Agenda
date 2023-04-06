<?php 

/* $ObjectC = new Conexion();
$conexion = $ObjectC->Connect();
$lol = $user->getID();
$sql = "SELECT id, id_user, titulo, inicio, fin FROM eventos WHERE id_user = $lol  ORDER BY eventos.id ASC";


$result = mysqli_query($conexion, $sql);
 */

 $dsn = 'mysql:host=localhost;dbname=agenda';
$usuario = 'root';
$contraseña = '';
$pdo = new PDO($dsn, $usuario, $contraseña);
$sql = "SELECT titulo as title,id,inicio as start, fin as end FROM eventos WHERE id_user = $Users ORDER BY eventos.id ASC";
$statement = $pdo->query($sql);
$eventos = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<script>
  var eventos = <?php echo json_encode($eventos); ?>;
</script>


