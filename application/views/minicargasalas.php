<div class="container">
  <div class="row">
      <div class="col"></div>
  </div><!--end row-->
  <div class="row">
    <div class="col">
      <h2>Salas Programación 2019-2</h2>
    </div>
  </div><!--end row-->
  <form>
    <div class="row">
        <div class="col-lg-6">
        <div class="form-group">
                <label for="salaForm">Sala</label>
                <select class="form-control" id="salaForm">
                <option></option>
                <?php                                
                                $o=0;
                                foreach ( $salas as $sala )
{
            // Access data using object syntax
                                    $selectado ="";
            if($o==0){$selectado = " selected=\"selected\"";}
            echo "<option value =\"".$sala->Aula."\"".$selectado.">".$sala->Aula." (".$sala->capacidad.")</option>";
            $e++;
}
                                ?>
                </select>
            </div>
        </div><!-- end row -->
        </form>
    </div><!-- end row -->    
    <div class="row" id="verSala">
                        
    </div><!-- end row -->
</div><!-- end container -->
