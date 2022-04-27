
<!-- Modal -->
<div class="modal fade" id="modaladdcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
          <form id="frmaddcategory" action="" method="post">
          <div class="form-group">
            <label for="nombreCategory">Nombre</label>
            <input type="txt" class="form-control" id="nombreCategory" name="nombreCategory">
        </div>

        <input type="number" id="id_user" name="id_user" value="<?php echo $user->getID() ?>" style="display: none;">

        <div class="form-group">
            <label for="dscategory">Descripcion</label>
            <textarea id="dscategory" class="form-control" name="dscategory" rows="2"></textarea>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnSaveCa">Guardar</button>
      </div>
    </div>
  </div>
</div>