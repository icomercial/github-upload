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
      <h2>Programación 2019-2</h2>
    </div>
  </div><!--end row-->
  <div class="row">
  <div class="col">
            <div class="card">            
                <div class="card-header">
                Cursable <span id="botonCursable"><a href="#" id="verCursable"><img src="<?php echo base_url();?>bootstrap/img/si-glyph-arrow-down.svg" width="16px" height="16px" /></a></span><span id="botonCursable2"><a href="#" id="ocultarCursable"><img src="<?php echo base_url();?>bootstrap/img/si-glyph-arrow-up.svg" width="16px" height="16px" /></a></span>
                </div><!-- end card-header -->
                <div id="cursableDatos">
                </div><!-- end cursableDatos-->
            </div><!--end card-->
    </div>
  </div><!-- end row-->
  <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
            Agregar asignatura
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
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="siglaAsigForm">Sigla</label>
                            <select class="form-control" id="siglaAsigForm" name="Sigla">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="diaForm">D&iacute;a</label>
                            <select class="form-control" id="diaForm" name="Dia">
                                <option value="Lun">Lunes</option>
                                <option value="Mar">Martes</option>
                                <option value="Mie">Mi&eacute;rcoles</option>
                                <option value="Jue">Jueves</option>
                                <option value="Vie">Viernes</option>
                                <option value="Sab">S&aacute;bado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="inicioForm">Inicio</label>
                            <select class="form-control" id="inicioForm" name="Inicio">
                                <?php
                                for ($iv = 1; $iv <= 19; $iv++) {
                                    echo "<option value=\"" . $inicioB[$iv] . "\">" . substr($inicioB[$iv], 0, -3) . "</option>";
                                }
                                ?>                    
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="finForm">Final</label>
                            <select class="form-control" id="finForm" name="Final">
                                <?php
                                for ($ib = 1; $ib <= 19; $ib++) {
                                    echo "<option value=\"" . $finalB[$ib] . "\">" . substr($finalB[$ib], 0, -3) . "</option>";
                                }
                                ?>   
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="idDocenteForm">Docente</label>
                            <select class="form-control" id="idDocenteForm" name="Docente">

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="salaForm">Sala</label>
                            <select class="form-control" id="salaForm" name="Sala">
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">



                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="capaForm">Capacidad</label>
                            <input type="text" class="form-control" id="capaForm" name="Capacidad">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="Teo" name="Teo" value="Teorico">
                                    Te&oacute;rico
                                </label>
                            </div></div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="Pra" name="Pra" value="Practico">
                                    Pr&aacute;ctico
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
                </form>
            </div><!-- end card-body -->
        </div><!-- end card -->
                <!-- Final del panel -->
    </div><!--end col-->
  </div><!--end row-->
  <div class="row">
    <div class="col-lg-12" id="verHorario">

    </div>
  </div>
</div><!--end container-->