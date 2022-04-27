<!-- Modal -->
<div class="modal fade" id="modalupdatestate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo estado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmaddstate" method="post">


          <div class="form-group">
            <input type="text" id="id_userS" name="id_userS" value="<?php echo $user->getID() ?>" style="display: none;">
          </div>


          <div class="form-group">
            <label for="est">Estado</label>
            <textarea name="est" id="est" class="form-control" cols="20" rows="10" placeholder="limite 256 caracteres" require></textarea>

          </div>





        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info" id="btnAddEst">Actualizar</button>
      </div>
    </div>
  </div>
</div>