<!-- Modal -->
<div class="modal fade" id="modalupdatecontacts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmUpdatecontact" method="post">
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

          <div class="md-form mt-4 mb-4">
            <label for="Select imagen">Seleccionar avatar</label>
          </div>
          <div class="form-group text-center mt-4 mb-4">
            <label class="col-md-2">Sin imagen</label>
          <label class="text-center offset-md-2">
            <input type="radio" id="imgUpdate" name="imgUpdate" value="../../Public/images/System/0.svg"  checked>
            <img src="../../Public/images/System/0.svg" alt="Option 1">
            </label>
          </div>
          <div class="form-group text-center">
            <label>
              <input type="radio" id="imgUpdate" name="imgUpdate" value="../../Public/images/System/1.svg">
              <img src="../../Public/images/System/1.svg" alt="Option 1">
            </label>
            <label>
              <input type="radio" id="imgUpdate" name="imgUpdate" value="../../Public/images/System/2.svg">
              <img src="../../Public/images/System/2.svg" alt="Option 2">
            </label>
            <label>
              <input type="radio" id="imgUpdate" name="imgUpdate" value="../../Public/images/System/3.svg">
              <img src="../../Public/images/System/3.svg" alt="Option 3">
            </label>
            <label>
              <input type="radio" id="imgUpdate" name="imgUpdate" value="../../Public/images/System/4.svg">
              <img src="../../Public/images/System/4.svg" alt="Option 4">
            </label>
            <label>
              <input type="radio" id="imgUpdate" name="imgUpdate" value="../../Public/images/System/5.svg">
              <img src="../../Public/images/System/5.svg" alt="Option 5">
            </label>
            <label>
              <input type="radio" id="imgUpdate" name="imgUpdate" value="../../Public/images/System/6.svg">
              <img src="../../Public/images/System/6.svg" alt="Option 6">
            </label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info" id="btnUpdateContacts">Actualizar</button>
      </div>
    </div>
  </div>
</div>