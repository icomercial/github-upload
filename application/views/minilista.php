<h3><?php echo $seccion[0];?></h3>
<table class="table table-bordered table-sm table-hover table-striped">
    <thead>
    <th>N</th>
    <th>Rut</th>
    <th>A. Paterno</th>
    <th>A. Materno</th>
    <th>Nombres</th>
    <th>Mail Duoc</th>
    <th>Mail Alternativo</th>
    </thead>
    <tbody>
<?php
$i=1;
foreach ($listasec as $ramo) {
   ?>
    <tr>
        <td> <?php echo $i;?>
        <td> <a href="<?php echo base_url()."index.php/portada/datosalumno/". $ramo->RutInscri;?>"><?php echo $ramo->RutInscri;?></a></td>
        <td> <small><?php echo $ramo->ApellidoP;?></small></td>
        <td> <small><?php echo $ramo->ApellidoM;?></small></td>
        <td> <small><?php echo $ramo->Nombres;?></small></td>
        <td> <?php echo strtolower(trim($ramo->Usuario));?>@alumnos.duoc.cl;</td>
        <td> <?php echo strtolower(trim($ramo->Email));?>;</td>
    </tr>
    <?php
    $i++;
}
/* * ****** */
?>
    </tbody>
</table>
<h4>Para enviar correo:</h4>
<p><small>Para: 
    <?php
    foreach ($listasec as $ramo) {
    echo strtolower(trim($ramo->Usuario))."@alumnos.duoc.cl; ";
    }
    ?></small>
</p>
<p><small>CC: 
    <?php
    foreach ($listasec as $ramo) {
    echo strtolower(trim($ramo->Email))."; ";
    }
    ?></small>
</p>