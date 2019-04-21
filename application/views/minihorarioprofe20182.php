<?php
$diaSemana = ["", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"];
$inicioB = ["", "8:31:00", "9:16:00", "10:01:00", "10:46:00", "11:31:00", "12:16:00", "13:01:00", "13:46:00", "14:31:00", "15:16:00", "16:01:00", "16:46:00", "17:31:00", "18:16:00", "19:01:00", "19:46:00", "20:31:00", "21:16:00", "22:01:00"];
$finalB = ["", "9:15:00", "10:00:00", "10:45:00", "11:30:00", "12:15:00", "13:00:00", "13:45:00", "14:30:00", "15:15:00", "16:00:00", "16:45:00", "17:30:00", "18:15:00", "19:00:00", "19:45:00", "20:30:00", "21:15:00", "22:00:00", "22:45:00"];
$totalHoras = 0;
foreach ($ramos as $ramo) {
    // Access data using object syntax
    //print_r($ramos);
    //echo $ramo->HorInic."COCO";
    $nombreProfe = $ramo->Docente;
    $idProfe = $ramo->IdDocente;
    $SeccionRec = $ramo->Seccion;
    if (($ramo->Lun == "x")||($ramo->Lun == "X")) {
        for ($j = 1; $j <= 19; $j++) {
            if ((strtotime($ramo->HorInic) <= strtotime($inicioB[$j])) && (strtotime($ramo->Final) >= strtotime($finalB[$j]))) {
                $asignaturaM[$j][1] = $ramo->Seccion;
                $AulaM[$j][1] = $ramo->Aula;
                $CapacidadM[$j][1] = $ramo->Inscritos;
                $DocenteM[$j][1] = $ramo->Plan;
                $DesAsignatura[$j][1] = $ramo->Asignatura;
                $linkEditar[$j][1] = "<a href=\"#" . $ramo->IdMiniSabana . "\" class=\"editarLink fa fa-pencil\" id=\"" . $ramo->IdMiniSabana . "\">Editar</a>";                
            } else {
                
            }
        }
    } elseif (($ramo->Mar == "x")||($ramo->Mar == "X")) {
        for ($j = 1; $j <= 19; $j++) {
            if ((strtotime($ramo->HorInic) <= strtotime($inicioB[$j])) && (strtotime($ramo->Final) >= strtotime($finalB[$j]))) {
                $asignaturaM[$j][2] = $ramo->Seccion;
                $AulaM[$j][2] = $ramo->Aula;
                $CapacidadM[$j][2] = $ramo->Inscritos;
                $DocenteM[$j][2] = $ramo->Plan;
                $DesAsignatura[$j][2] = $ramo->Asignatura;
                $linkEditar[$j][2] = "<a href=\"#" . $ramo->IdMiniSabana . "\" class=\"editarLink fa fa-pencil\" id=\"" . $ramo->IdMiniSabana . "\">Editar</a>";
                
            } else {
               
            }
        }
    } elseif (($ramo->Mie == "x")||($ramo->Mie == "X")) {
        for ($j = 1; $j <= 19; $j++) {
            if ((strtotime($ramo->HorInic) <= strtotime($inicioB[$j])) && (strtotime($ramo->Final) >= strtotime($finalB[$j]))) {
                $asignaturaM[$j][3] = $ramo->Seccion;
                $AulaM[$j][3] = $ramo->Aula;
                $CapacidadM[$j][3] = $ramo->Inscritos;
                $DocenteM[$j][3] = $ramo->Plan;
                $DesAsignatura[$j][3] = $ramo->Asignatura;
                $linkEditar[$j][3] = "<a href=\"#" . $ramo->IdMiniSabana . "\" class=\"editarLink fa fa-pencil\" id=\"" . $ramo->IdMiniSabana . "\">Editar</a>";
               
            } else {
               
            }
        }
    } elseif (($ramo->Jue == "x")||($ramo->Jue == "X")) {
        for ($j = 1; $j <= 19; $j++) {
            if ((strtotime($ramo->HorInic) <= strtotime($inicioB[$j])) && (strtotime($ramo->Final) >= strtotime($finalB[$j]))) {
                $asignaturaM[$j][4] = $ramo->Seccion;
                $AulaM[$j][4] = $ramo->Aula;
                $CapacidadM[$j][4] = $ramo->Inscritos;
                $DocenteM[$j][4] = $ramo->Plan;
                $DesAsignatura[$j][4] = $ramo->Asignatura;
                $linkEditar[$j][4] = "<a href=\"#" . $ramo->IdMiniSabana . "\" class=\"editarLink fa fa-pencil\" id=\"" . $ramo->IdMiniSabana . "\">Editar</a>";
                
            } else {
                
            }
        }
    } elseif (($ramo->Vie == "x")||($ramo->Vie == "X")) {
        for ($j = 1; $j <= 19; $j++) {
            if ((strtotime($ramo->HorInic) <= strtotime($inicioB[$j])) && (strtotime($ramo->Final) >= strtotime($finalB[$j]))) {
                $asignaturaM[$j][5] = $ramo->Seccion;
                $AulaM[$j][5] = $ramo->Aula;
                $CapacidadM[$j][5] = $ramo->Inscritos;
                $DocenteM[$j][5] = $ramo->Plan;
                $DesAsignatura[$j][5] = $ramo->Asignatura;
                $linkEditar[$j][5] = "<a href=\"#" . $ramo->IdMiniSabana . "\" class=\"editarLink fa fa-pencil\" id=\"" . $ramo->IdMiniSabana . "\">Editar</a>";
                
            } else {
                
            }
        }
    } elseif (($ramo->Sab == "x")||($ramo->Sab == "X")) {
        for ($j = 1; $j <= 19; $j++) {
            if ((strtotime($ramo->HorInic) <= strtotime($inicioB[$j])) && (strtotime($ramo->Final) >= strtotime($finalB[$j]))) {
                $asignaturaM[$j][6] = $ramo->Seccion;
                $AulaM[$j][6] = $ramo->Aula;
                $CapacidadM[$j][6] = $ramo->Inscritos;
                $DocenteM[$j][6] = $ramo->Plan;
                $DesAsignatura[$j][6] = $ramo->Asignatura;
                $linkEditar[$j][6] = "<a href=\"#" . $ramo->IdMiniSabana . "\" class=\"editarLink fa fa-pencil\" id=\"" . $ramo->IdMiniSabana . "\">Editar</a>";
               
            } else {
                
            }
        }
    } else {
        
    }
}
/* * ****** */
?>
<h2><?php echo $nombreProfe." (".$idProfe.")";?></h2>
<table class="table table-bordered table-condensed table-sm">
<thead class="thead-dark">
    <tr>
        <th>Horario <small><?php //echo $SeccionRec; ?></small> </th>
    <?php
    for ($ic = 1; $ic <= 6; $ic++) {
        echo "<th>" . $diaSemana[$ic] . "</th>";
    }
    ?>                                
    </tr>
    </thead>
    <tbody>
<?php
for ($ie = 1; $ie <= 19; $ie++) {
    ?>
        <tr id="Bloque<?php echo $ie; ?>">
            <td><?php echo substr($inicioB[$ie], 0, -3); ?> a <?php echo substr($finalB[$ie], 0, -3); ?></td>
    <?php
    for ($im = 1; $im <= 6; $im++) {
        ?>
                <td id="<?php echo "bloque" . $ie . "dia" . $im; ?>" class="fondo_<?php if(isset($asignaturaM[$ie][$im])){echo $asignaturaM[$ie][$im];} ?>">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td colspan="2" class="fondo_<?php if(isset($asignaturaM[$ie][$im])){echo $asignaturaM[$ie][$im];} ?>"><small><strong><?php if (isset($asignaturaM[$ie][$im])){echo $asignaturaM[$ie][$im];} ?> </strong> <?php if (isset($linkEditar[$ie][$im])){echo $linkEditar[$ie][$im];} ?></small>
                            <br><?php if (isset($DesAsignatura[$ie][$im])){echo $DesAsignatura[$ie][$im];} ?></td>
                            <td class="fondo_<?php if(isset($asignaturaM[$ie][$im])){echo $asignaturaM[$ie][$im];} ?>"><small><?php if(isset($AulaM[$ie][$im])){echo substr($AulaM[$ie][$im], 3);$totalHoras++;} ?></small><br /><small><?php if (isset($CapacidadM[$ie][$im])){echo $CapacidadM[$ie][$im];} ?></small></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="fondo_<?php if(isset($asignaturaM[$ie][$im])){echo $asignaturaM[$ie][$im];} ?>"><small><?php if (isset($DocenteM[$ie][$im])){echo $DocenteM[$ie][$im];} ?></small></td>                            
                        </tr>
                    </table>
                </td>
            <?php
        }
        ?>


        </tr>
    <?php
    //fin for bloques horario
}
?>
<tr><td class="td-dark"><?php echo $totalHoras; ?></td><td colspan="6"></td></tr>
</tbody>
</table>
<div class="modal">

</div>
