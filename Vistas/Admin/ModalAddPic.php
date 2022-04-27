<!-- Modal -->
<div class="modal fade" id="modalupdatepic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Imagen de perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="frmPicuser" role="form" method="post" enctype="multipart/form-data">



          <input type="number" id="idUser" name="idUser" value="<?php echo $user->getID() ?>" hidden="">



          <div class="mb-3">
            <input id="pic" class="form-control" type="file" name="pic">
            <label for="pic" class="form-label">Buscar imagen en dispositivo</label>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-info" id="btnPicUsers">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>