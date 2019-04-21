<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar la Asignatura <?php echo $asigX->Asignatura;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          ¿Est&aacute seguro de eliminar el registro?
          <form>
              <input type="hidden" name="seccionx" id="seccionx" value="<?php echo $asigX->Seccion;?>">
          </form>          
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="delete" value="<?php echo $asigX->IdAsig;?>">S&iacute;, Eliminar Registro</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>