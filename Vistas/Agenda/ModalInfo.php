<div class="modal fade" id="modalInfoAgenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center p-3 mb-2 bg-primary text-white">
        <h3 class="mt-1 mb-2">Detalles</h3>
      </div>
      <div class="modal-body  mb-1" id="info">

        <h5 class="mt-1 mb-2 text-center" id="titulo"></h5>

        <div class="md-form ml-0 mr-0 mb-2 text-center" id="descripcion">
          <p data-error="wrong" data-success="right"></p>
        </div>
      </div>
      <div class="modal-footer d-flex flex-column">
        <div class="d-flex">
          <div class="md-form" id="start">
            <p data-error="wrong" data-success="right" for="form29" class="ml-0"></p>
          </div>
          &nbsp; / &nbsp;
          <div class="md-form" id="end">
            <p data-error="wrong" data-success="left"></p>
          </div>
        </div>
        <div class="d-flex">
        <button class="btn btn-cyan mt-1 text-danger" id="dropEvent"><i class="fas fa-trash"></i>Eliminar</button>
        <button class="btn btn-cyan mt-1" data-bs-dismiss="modal"><i class="fas fa-circle-xmark"></i> Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>