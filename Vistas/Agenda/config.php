<?php 
/* $dsn = 'mysql:host=sql109.epizy.com;dbname=epiz_33215471_agenda';
$usuario = 'epiz_33215471';
$contraseña = 'ePF4i0ySluq5b9z'; */
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


