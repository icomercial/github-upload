<?php
$diasemana=array("","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
$mesesanio=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
?>
<div class="container">
  <div class="row">
    <div class="col"></div>
  </div>
  <div class="row" id="principal1">
    <div class="col-9" id="totalesAlumnos">
      <div class="row">
      <div class="col-12" id="CargarActualday">

      </div><!--end col-12-->
    </div><!-- end row #CargarActualday -->
    </div><!-- end col-9 #totalesAlumnos -->
    <div class="col" id="sidebar1">
      <div class="row">
        <div class="col">
        <h2>
          <?php echo $diasemana[date("N")]." ".date("d");?>
          </h2>
          <h5><?php echo $mesesanio[date("n")]." ". date("Y");?></h5>
        </div><!--end col-->
      </div><!-- end row-->
      <div class="row">
        <div class="col" id="Cumples">
        
        </div><!-- end col -->
      </div><!-- end row #Cumples -->
      <div class="row">
        <div class="col">
        <div class="card mb-3">
          <h4 class="card-header">Últimos registros</h4>
          <div class="list-group">
          <?php foreach ($atenciones as $atencionitem) {
            # code...
            ?>
            <a class="list-group-item list-group-item-action flex-column align-items-start" href="<?php echo base_url()."index.php/portada/datosalumno/".$atencionitem->rutatencion;?>" class="card-link">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1"><?php echo $atencionitem->rutatencion; ?></h5>
            <small><?php echo $atencionitem->fecha ?></small>
            </div>
            <p class="mb-1"><?php echo substr($atencionitem->comentario,0,140); ?>... </p>
    <small><?php echo $atencionitem->usuario; ?></small>
            </a>                      
          <?php
          }
          ?>
          </div>
          </div><!-- end card -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end col #siderbar1 -->
  </div><!-- end row #principal1 -->
  
</div><!-- end container -->
