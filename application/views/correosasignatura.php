<div class="container">
  <div class="row">
    <div class="col"></div>
  </div>
  <div class="row" id="principal1">
    <div class="col" id="totalesAlumnos">
      <div class="row">
        <div class="col-12" id="DatosAlumnosWrapper">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Listas de correos</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="profeForm">Asignatura</label>
                                        <select class="form-control" id="profeForm" name="Profex">
                                        <option></option>
                                        <?php
                                        foreach ($secciones as $secciones_item) {
                                        // Access data using object syntax
                                        echo "<option value =\"" . trim($secciones_item->Seccion)
                                        . "\"><b>" . $secciones_item->Seccion
                                        . "</b> [" . rtrim($secciones_item->Asignatura)
                                        . "] <small>" . rtrim($secciones_item->Docente) . "</small></option>";
                                        }
                                        ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <div class="row">
                            <div class="col-lg-12" id="verProfe">
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

            </div><!-- end wrapper-->
            </div></div></div></div></div>