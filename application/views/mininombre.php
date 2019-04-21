<?php 
function CalculaEdad($fecha) {
    list($Y, $m, $d) = explode("-", $fecha);
    return( date("md") < $m . $d ? date("Y") - $Y - 1 : date("Y") - $Y );
}
foreach ($nombrealumno as $nombrealumno_item): 
    echo "<div class=\"col-lg-12\">
    <h5 class=\"text-primary\"><b><span id=\"nombreAlumnoDuoc\">" . ucwords(strtolower($nombrealumno_item->Nombres)) . "</span> <span id=\"mail2AlumnoDuoc\">" . ucwords(strtolower(utf8_encode($nombrealumno_item->ApellidoP))) . "</span>
<span id=\"fono1AlumnoDuoc\">" . ucwords(strtolower($nombrealumno_item->ApellidoM)) . "</span>
</b></h5></div>";
echo "<div class=\"col-lg-12\">
    <span id=\"fono2AlumnoDuoc\">" . ($nombrealumno_item->NombreCarrera);
echo " (" . $nombrealumno_item->Jornada . ") </span></div>";
echo "<div class=\"col-lg-12\">";
echo "<span id=\"fono2AlumnoDuoc\">Plan " . $nombrealumno_item->Codigo . " (" . $nombrealumno_item->AnioIngreso . ")</span></div>";
echo "<div class=\"col-lg-12\">";
echo "<span id=\"fechanac\">Fecha de nacimiento: " . $nombrealumno_item->Fnac . " (" . CalculaEdad($nombrealumno_item->Fnac) . " años)</span>";
endforeach;
 
 ?>