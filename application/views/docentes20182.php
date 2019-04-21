<div class="container">
  <div class="row">
      <div class="col"></div>
  </div><!--end row-->
  <div class="row">
    <div class="col">
      <h2>Docentes 2019-1</h2>
    </div>
  </div><!--end row-->
  <form>
    <div class="row">
        <div class="col-lg-6">
        <div class="form-group">
                <label for="cargaForm">Profesor</label>
                
                <select class="form-control" id="cargaForm20182" name="Profex">
                    <option></option>
                <?php                                
                                $e=0;
                                //print_r($docentes);
                                foreach ( $docentes as $docente )
{
            // Access data using object syntax
            //$datas = json_decode($docente->Docente,true);                        
            echo "<option value =\"".$docente->Id."\">".$docente->Docente."</option>";
            $e++;
}
                                ?>
                </select>
                
                
                
            </div>
        </div><!-- end row -->
        </form>
    </div><!-- end row -->    
    <div class="row" id="verProfe20182">
                        
    </div><!-- end row -->
</div><!-- end container -->