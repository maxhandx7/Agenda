<?php require_once "../../Clases/Config.php" ;
    
    $ObjectC = new Conexion();
    
    $conexion = $ObjectC->Connect();
    $sql = "SELECT contactos.nombre AS nombre,
    contactos.paterno AS paterno,
    contactos.telefono AS telefono,
    contactos.email AS email,
    categorias.nombre AS categoria,
    contactos.id_contactos AS idContact
   
   FROM t_contactos AS contactos INNER JOIN t_categorias AS categorias 
   ON contactos.id_categoria = categorias.id_categoria";  
    $result = mysqli_query($conexion, $sql);
?>
<div class="card">
    <div class="card-body">
       <div class="table-responsive">
           <table class="table table-hover table-condensed" id="ContactTableDT">
               <thead>
                   <tr>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Telefono</th>
                       <th>Email</th>
                       <th>Categoria</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                   <?php 
                  
                   foreach($result as $r){
                       $idContact = $r['idContact'];
                       ?>

                       <td><?php echo $r['nombre'] ?></td>
                       <td><?php echo $r['paterno'] ?></td>
                       <td><?php echo $r['telefono'] ?></td>
                       <td><?php echo $r['email'] ?></td>
                       <td><?php echo $r['categoria'] ?></td>

                       <td><a class="btn btn-outline-info btn-sm" onclick="editContact('<?php echo $idContact ?>')" data-bs-toggle="modal" data-bs-target="#modalupdatecontacts"><i class="fa fa-pen"></i></a></td>
                       <td><a  class="btn btn-outline-danger btn-sm" onclick="dropContacts('<?php echo $idContact  ?>')" ><i class="fa fa-trash"></i> </a></td>
                   </tr>
                   <?php 
                   }
                   ?>
               </tbody>
           </table>
       </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
$('#ContactTableDT').DataTable();
});
</script>