<div class="col-12">
<?php 
$rutAlumno="";
echo "<div class=\"row\"><div class=\"col\"><table class=\"table table-bordered table-sm table-hover table-striped\">";
foreach ($dataalumno as $dataalumno_item): 
    echo "<tr>";
    echo "<td><small><a href=\"".base_url()."index.php/portada/correosasignatura/".rtrim($dataalumno_item->SecInscri)."\" class=\"listaAlu\" data-alu=\"" . urlencode(trim($dataalumno_item->SecInscri)) . "\"><span class=\"siglaAlumno\">" . trim($dataalumno_item->SecInscri) . "</span></a></small></td>";
    echo "<td><small>".rtrim($dataalumno_item->Asignatura)."</small></td>";
    echo "<td><small><a href=\"https://itmaipu.entrar.cl/index.php/portada/docentes20182/".$dataalumno_item->IdDocente."\" class=\"horarioSabanaProfe\" data-profe=\"" . urlencode(rtrim($dataalumno_item->Docente)) . "\"><span class=\"siglaAlumno\">" . rtrim($dataalumno_item->Docente) . "</span></a></small></td>";
    echo "</tr>";
    $rutAlumno = $dataalumno_item->RutInscri;
endforeach;
 echo "</table></div></div>";
 ?>
 <div class="row">
 <div class="col">
<a class="btn btn-success" href="http://appserver.duoc.cl:7777/integracion/mira_alumno2.ficha_curricular?sesion=web&pu=web&p_rut=<?php echo substr($rutAlumno,0,-1); ?>" target="_blank">Ver Ficha (DARA)</a>
<a class="btn btn-secondary" href="http://appserver.duoc.cl:7777/integracion/mira_alumno2.misnotas?sesion=web&pu=web&p_rut=<?php echo substr($rutAlumno,0,-1); ?>" target="_blank">Ver Calificaciones (DARA)</a>
 </div>
 <div class="col">

 </div>
 </div>
 </div>
 