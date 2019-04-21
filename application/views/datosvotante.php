<?php
$diasemana=array("","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
$mesesanio=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

?>
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
                        <h2>Acreditación Elecciones 2019</h2>
                    </div>

                </div>
                <form>
                <fieldset>
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label for="profeForm" class="col col-form-label">Buscar por Rut</label>
                                <div class="col">
                                <input type="text" class="form-control" id="rutAlumno" value="">
                                </div>
                                <div class="col">
                                <button type="button" class="verRamosAlumno btn btn-primary">Buscar Ramos <span class="glyphicon glyphicon-search"></span></button>
                                </div>
                            </div>
                        </div>
                        
                                             
                        <div class="col">
                        <div class="form-group row">
                            <label for="profeForm">Usuario Alumno</label>
                            <div class="col">
                                <input type="text" class="form-control" id="txtUsuario">
                            </div>
                            <div class="col">
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="buscarut">
  Buscar rut
</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </fieldset>
                </form>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Datos del Alumno(a)
                                    </div>
                                    <div class="card-body">
                                        <div class="row" id="verAlumnoDatos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Datos de Contacto
                                    </div>
                                    <div class="card-body">
                                        <div class="row" id="verAlumnoContacto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                                                
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        Atenciones registradas
                                    </div>
                                    <div class="card-body">
                                        <div class="row" id="verAlumnoAtenciones">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-lg-12" id="horarioSabProfe">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" id="listaAlumnos">

                    </div>
                </div>
            </div><!-- end wrapper-->
      </div><!--end col-12-->
    </div><!-- end row #CargarActualday -->
    </div><!-- end col #totalesAlumnos -->    
  </div><!-- end row #principal1 -->
  
</div><!-- end container -->
