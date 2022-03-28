<?php require_once "../../Clases/Config.php" ;
    
    $ObjectC = new Conexion();
    
    $conexion = $ObjectC->Connect();
    $sql = "SELECT * FROM t_categorias"; 
    $result = mysqli_query($conexion, $sql);
?>
<div class="card">
    <div class="card-body">
       <div class="table-responsive">
           <table class="table table-hover table-condensed" id="CategoryTableDT">
               <thead>
                   <tr>
                       <th>Nombre</th>
                       <th>Descripcion</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                   <?php 
                   foreach($result as $r){
                       $Category_id = $r['id_categoria'];
                   ?>
                       <td> <?php echo $r['nombre'] ?></td>
                       <td><?php echo $r['descripcion'] ?></td>
                       <td><a onclick="editCategory('<?php echo $Category_id ?>')" data-bs-toggle="modal" data-bs-target="#modalupdatecategory" class="btn btn-outline-info btn-sm"><i class="fa fa-pen"></i> </a></td>
                       <td><a class="btn btn-outline-danger btn-sm" onclick="dropCategory('<?php echo $Category_id ?>')"><i class="fa fa-trash"></i> </a></td>
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
$('#CategoryTableDT').DataTable();
});
</script>