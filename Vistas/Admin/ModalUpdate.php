<!-- Modal -->
<div class="modal fade" id="modalupdateuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmUpdateuser" method="post">
          <div class="form-group">
            <input type="txt" class="form-control" name="id_User" id="id_User" hidden="">
          </div>

          <div class="form-group">
            <label for="nombreUserU">Nombre</label>
            <input type="txt" class="form-control" id="nombreUserU" name="nombreUserU" require>
          </div>

          <div class="form-group">
            <label for="passUserU">Contraseña</label>
            <input type="password" class="form-control" id="passUserU" name="passUserU" require>
          </div>

          <div class="form-group">
            <label for="emailUserU">Email</label>
            <input type="email" class="form-control" id="emailUserU" name="emailUserU" require>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info" id="btnUpdateUsers">Actualizar</button>
      </div>
    </div>
  </div>
</div>