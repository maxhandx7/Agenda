<!-- Modal -->
<div class="modal fade" id="modalupdatecategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="frmupdatecategory" method="post">
          <div class="form-group">
            <input type="txt" class="form-control" name="idCategory" id="idCategory" hidden="">
        </div>
          <div class="form-group">
            <label for="nombreCategoryU">Nombre</label>
            <input type="txt" class="form-control" name="nombreCategoryU" id="nombreCategoryU">
        </div>
        <div class="form-group">
            <label for="dscategoryU">Descripcion</label>
            <textarea id="dscategoryU" class="form-control" name="dscategoryU" id="dscategoryU" rows="2"></textarea>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info"     id="btnUpdateCategory">Actualizar</button>
      </div>
    </div>
  </div>
</div>