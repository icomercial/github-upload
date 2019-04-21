<?php
if (!empty($aten)){
    echo "<table class=\"table table-bordered table-sm table-striped table-hover\">
    <thead class=\"table-success\">
    <th>Fecha</th><th>Comentario</th><th>Usuario</th>
    </thead>
    <tbody>";
foreach ($aten as $aten_item) {
    # code...
    echo "<tr>";
    echo "<td>".$aten_item->fecha."</td>";
    echo "<td>".$aten_item->comentario."</td>";    
    echo "<td>".$aten_item->usuario."</td>";
    echo "</tr>";
}
echo "</tbody></table>";
}else{
    echo "<table class=\"table table-borderless\"><tr><td>Sin datos previos.</td></tr></table>";
}
?>
<div class="col-lg-12">
    <form method="POST" id="crearComentarioForm">
        <div class="form-group">
            <label><b>Ingresar comentario</b></label>
            <textarea class="form-control" rows="3" name="ingresaComentario"></textarea>
        </div>
        <input type="hidden" name="Alum" value="<?php echo $rut;?>">
        <input type="hidden" name="Login" value="<?php echo "nalvarez";?>">        
        <button type="submit" class="btn btn-default" id="enviarComentario">Enviar Comentario</button>
        <button type="reset" class="btn btn-group">Cancelar</button>
    </form>
</div>
<script>
$(document).ready(function(){
    //alert("");

//Inicio enviar comentario
                    $("#enviarComentario").click(function(e){
                            //alert("HOla");
                            e.preventDefault();
                            $.ajax({
                                    url: "<?php echo base_url(); ?>index.php/datosalumno/agregarcomentario/",
                                    type: 'post',
                                    dataType: 'application/json',
                                    data: $("#crearComentarioForm").serialize()
                                }).done(function() {
                                alert( "success" );
                                })
                                .fail(function() {
                                //alert( data );
                                })
                                .always(function() {                 
                                    $("#verAlumnoAtenciones").load("<?php echo base_url(); ?>index.php/datosalumno/atenciones/<?php echo $rut; ?>");
                                });
                            
                        });
                    //fin enviar comentario
});
</script>