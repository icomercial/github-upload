<?php
$inicioB=["","8:31:00","9:16:00","10:01:00","10:46:00","11:31:00","12:16:00","13:01:00","13:46:00","14:31:00","15:16:00","16:01:00","16:46:00","17:31:00","18:16:00","19:01:00","19:46:00","20:31:00","21:16:00","22:01:00"];
$finalB=["","9:15:00","10:00:00","10:45:00","11:30:00","12:15:00","13:00:00","13:45:00","14:30:00","15:15:00","16:00:00","16:45:00","17:30:00","18:15:00","19:00:00","19:45:00","20:30:00","21:15:00","22:00:00","22:45:00"];
?>
<div class="container">
  <div class="row">
      <div class="col"></div>
  </div><!--end row-->
  <div class="row">
    <div class="col">
      <h2>Programación 2018-1</h2>
    </div>
  </div><!--end row-->
 
  <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
            Ver histórico asignatura
            </div><!-- end card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">

                        <!-- Inicio del panel -->
                        <form id="crearAsignaturaForm" method="post" action="#">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Secci&oacute;n</label>
                                <select class="form-control selectSeccion" id="exampleFormControlSelect1" name="Seccion">
                                    <option></option>
                                    <?php
                                    $i = 0;
                                    foreach ($secciones as $seccion) {
                                        // Access data using object syntax
                                        $selectado = "";
                                        //if($i==0){$selectado = " selected=\"selected\"";}
                                        echo "<option value =\"" . $seccion->Seccion . "\"" . $selectado . ">" . $seccion->nomCarrera . " Nivel " . $seccion->Nivel . " " . $seccion->Jornada . " Secci&oacute;n " . $seccion->Seccion . "</option>";
                                        $i++;
                                    }
                                    ?>
                                </select>
                               
                            </div>
                            </form>
                    </div>
                    
                </div>
                                    </div><!-- end card-body-->
                                    </div>
                <div class="row">



                    
    </div><!--end col-->
  </div><!--end row-->
  <div class="row">
    <div class="col-lg-12" id="verHorario">

    </div>
  </div>
</div><!--end container-->