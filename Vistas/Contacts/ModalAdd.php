<?php require_once "Clases/Config.php" ;
    
    $ObjectC = new Conexion();
    $lol = $user->getID();
    $conexion = $ObjectC->Connect();
    $sql = "SELECT users_id, id_categoria, nombre  FROM t_categorias WHERE users_id = $lol "; 
    $result = mysqli_query($conexion, $sql);
?>
<!-- Modal -->
<div class="modal fade" id="modaladdcontacts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="frmaddContact"  method="post">

          <div class="form-group">
            <label for="nombreContact">Nombre</label>
            <input type="txt" id="nombreContact" class="form-control" name="nombreContact" require>
        </div>

        <input type="number" id="id_user" name="id_user" value="<?php echo $user->getID() ?>" style="display: none;">
        
        <div class="form-group">
            <label for="apellidoContact">Apellido</label>
            <input type="txt" id="apellidoContact" class="form-control" name="apellidoContact" require>
        </div>

        <div class="form-group">
            <label for="telContact">Telefono</label>
            <input type="number" id="telContact" class="form-control" name="telContact" require>
        </div>

        <div class="form-group">
            <label for="emailContact">Email</label>
            <input type="email" id="emailContact" class="form-control" name="emailContact" require>
        </div>
       
                   
                      
                   
        <div class="form-group">
            <label for="categoryContact">Categorias</label>
            <select name="categoryContact" id="categoryContact" class="form-control">
                <option value="" selected disabled>seleccione una categoria</option>
                <?php  foreach($result as $r){									
                                            echo '<option value="'.$r['id_categoria'].'">'.$r['nombre']. '</option>';   }                     
                                        ?>          
            </select>
          
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnSaveCo">Guardar</button>
      </div>
    </div>
  </div>
</div>