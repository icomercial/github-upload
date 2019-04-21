<?php
function CalculaEdad($fecha) {
    list($Y, $m, $d) = explode("-", $fecha);
    return( date("md") < $m . $d ? date("Y") - $Y - 1 : date("Y") - $Y );
}
?>
<div class="card mb-3">
          <h4 class="card-header">Cumpleaños del día</h4>
          <?php foreach ($cumpleshoy as $cumpleshoy_item): ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo ucwords(strtolower($cumpleshoy_item->Nombres))." ".ucwords(strtolower($cumpleshoy_item->ApellidoP))." ".ucwords(strtolower($cumpleshoy_item->ApellidoM)) ?></h5>
            <h6 class="card-subtitle text-muted"><?php echo $cumpleshoy_item->Codigo." (".$cumpleshoy_item->Jornada.") * ".$cumpleshoy_item->Fnac." * (<em>".CalculaEdad($cumpleshoy_item->Fnac)." años</em>)"; ?></h6>
            <a href="<?php echo base_url()."index.php/portada/datosalumno/".$cumpleshoy_item->Rut;?>" class="card-link">Ver datos</a>            
          </div>
          <?php endforeach; ?>        
</div>