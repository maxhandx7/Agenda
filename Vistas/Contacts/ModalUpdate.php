<!-- Modal -->
<div class="modal fade" id="modalupdatecontacts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="frmUpdatecontact"  method="post">
          <div class="form-group">
            <input type="txt" class="form-control" name="idContact" id="idContact" hidden="">
        </div>

          <div class="form-group">
            <label for="nombreContactU">Nombre</label>
            <input type="txt" class="form-control" id="nombreContactU" name="nombreContactU" require>
        </div>

        <div class="form-group">
            <label for="apellidoContactU">Apellido</label>
            <input type="txt" class="form-control" id="apellidoContactU" name="apellidoContactU" require>
        </div>

        <div class="form-group">
            <label for="telContactU">Telefono</label>
            <input type="number" class="form-control" id="telContactU" name="telContactU" require>
        </div>

        <div class="form-group">
            <label for="emailContactU">Email</label>
            <input type="email" class="form-control" id="emailContactU" name="emailContactU" require>
        </div>
        <div id="categoryContactU"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info" id="btnUpdateContacts">Actualizar</button>
      </div>
    </div>
  </div>
</div>