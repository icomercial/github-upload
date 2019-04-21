<?php date_default_timezone_set('America/Santiago');?>
<div class="row">
    <div class="col-12 col-lg-12">
    <h2>Sabana </h2><h5>(<small><?php echo date("G:i e");?></small>)</h5>
    </div><!-- end col-->
</div><!-- end row-->
<div class="row">
    <div class="col-lg-12">
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-active">
            <th scope="col" class="text-center">Aula</th>
            <th scope="col" class="text-center">Sigla</th>
            <th scope="col">Asignatura</th>
            <th scope="col" class="text-center">Horario</th>
            <th scope="col">Docente</th>
            <th class="text-center">Ins.</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($sabana as $sabana_item): ?>
        <tr>
            <th scope="row" class="text-center"><?php echo "<small class=\"miPa\"><b>" .substr($sabana_item->Aula, 3). "</b></small>"; ?></th>
            <td><?php echo "<small class=\"miPa\"><a href=\"".base_url()."index.php/portada/correosasignatura/".rtrim($sabana_item->Seccion)."\" class=\"listaAlu\" data-alu=\"" . urlencode(trim($sabana_item->Seccion)) . "\"><span class=\"siglaAlumno\">" . trim($sabana_item->Seccion) . "</span></a></small>"; ?></td>
            <td><?php echo "<small class=\"miPa\">" .$sabana_item->Asignatura. "</small>"; ?></td>
            <td class="text-center"><?php echo "<small class=\"miPa\">" . substr($sabana_item->HorInic, 0, -3) . "</small>";?>
                <?php echo "<small class=\"miPa\"> a " . substr($sabana_item->Final, 0, -3) . " <span class=\"glyphicon glyphicon-dashboard\" area-hidden=\"true\"></span></small>";?></td>
            <td><?php echo "<small><span class=\"blue\">" . $sabana_item->Docente . "</span></small>";?>            
            </td>
            <td class="text-center">
            <span class="badge badge-primary badge-pill"><?php echo $sabana_item->Inscritos; ?></span>
            </td>
        </tr>

    <?php endforeach; ?>
    <?php foreach ($totalsabana as $totalsabana_item): ?>
    <tr class="table-active">
    <td class="text-center"><small><b><?php echo $totalsabana_item->totaldocentes;?></b></small></td>
        <td colspan="3"></td>
        <td class="text-right"><small><b><em>TOTAL INSCRITOS:</em></b></small></td>        
        <td class="text-center"><span class="badge badge-primary badge-pill"><?php echo $totalsabana_item->total;?></span></td>        
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div><!-- end col-->
</div><!-- end row -->