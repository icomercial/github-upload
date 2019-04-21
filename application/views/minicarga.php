<div class="container">
  <div class="row">
      <div class="col"></div>
  </div><!--end row-->
  <div class="row">
    <div class="col">
      <h2>Docentes Programación 2019-2</h2>
    </div>
  </div><!--end row-->
  <form>
    <div class="row">
        <div class="col-lg-6">
        <div class="form-group">
                <label for="cargaForm">Profesor</label>
                
                <select class="form-control" id="cargaForm" name="Profex">
                    <option></option>
                <?php                                
                                $e=0;
                                foreach ( $docentes as $docente )
{
            // Access data using object syntax
                                    
            echo "<option value =\"".$docente->IdDocente."\">".$docente->NombreDocente." [".$docente->IdDocente."]</option>";
            $e++;
}
                                ?>
                </select>
                
                
                
            </div>
        </div><!-- end row -->
        </form>
    </div><!-- end row -->    
    <div class="row" id="verProfe">
                        
    </div><!-- end row -->
</div><!-- end container -->
