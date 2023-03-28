<?php require_once "Clases/Config.php";

$ObjectC = new Conexion();
$lol = $user->getID();
$conexion = $ObjectC->Connect();
$sql = "SELECT users_id, id_categoria, nombre  FROM t_categorias WHERE users_id = $lol ";
$result = mysqli_query($conexion, $sql);
?>
<style>
  [type=radio] {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
  }

  [type=radio]+img {
    cursor: pointer;
  }

  [type=radio]:checked+img {
    outline: 2px solid #0d6efd;
  }
</style>
<!-- Modal -->
<div class="modal fade" id="modaladdcontacts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmaddContact" method="post">

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
              <?php foreach ($result as $r) {
                echo '<option value="' . $r['id_categoria'] . '">' . $r['nombre'] . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="md-form mt-4 mb-4">
            <h4>Seleccionar avatar</h4>
          </div>
          <div class="form-group text-center mt-4 mb-4">
            <label class="col-md-2">Sin avatar</label>
            <label class="text-center offset-md-2">
              <input type="radio" id="img" name="img" class="Option0" value="../../Public/images/System/0.svg" checked>
              <img src="../../Public/images/System/0.svg" alt="Option0">
            </label>
          </div>
          <div class="form-group text-center">
            <label>
              <input type="radio" id="img" name="img" value="../../Public/images/System/1.svg">
              <img src="../../Public/images/System/1.svg" alt="Option 1">
            </label>
            <label>
              <input type="radio" id="img" name="img" value="../../Public/images/System/2.svg">
              <img src="../../Public/images/System/2.svg" alt="Option 2">
            </label>
            <label>
              <input type="radio" id="img" name="img" value="../../Public/images/System/3.svg">
              <img src="../../Public/images/System/3.svg" alt="Option 3">
            </label>
            <label>
              <input type="radio" id="img" name="img" value="../../Public/images/System/4.svg">
              <img src="../../Public/images/System/4.svg" alt="Option 4">
            </label>
            <label>
              <input type="radio" id="img" name="img" value="../../Public/images/System/5.svg">
              <img src="../../Public/images/System/5.svg" alt="Option 5">
            </label>
            <label>
              <input type="radio" id="img" name="img" value="../../Public/images/System/6.svg">
              <img src="../../Public/images/System/6.svg" alt="Option 6">
            </label>
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