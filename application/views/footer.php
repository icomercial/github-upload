<footer>
<div class="container">
<div class="row">
<div class="col">
<em>En desarrollo por Nelson Álvarez Sanhueza <a href="https://www.twitter.com/nalvarez">@nalvarez</a></em>
</div>
</div>
</div>
</footer>
<script src="<?php echo base_url();?>bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $("#CargarActualday").load("<?php echo base_url();?>index.php/actualday/index/");
    $("#Cumples").load("<?php echo base_url();?>index.php/actualday/cumples/");
    $("#botonCursable").hide();
    $("#botonCursable2").hide();
    $(".verRamosAlumno").click(function () {
                var str = $("#rutAlumno").val();
                //$("#verAlumno").html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
                $("#verAlumno").load("<?php echo base_url(); ?>index.php/datosalumno/index/" + str);
                $("#verAlumnoContacto").load("<?php echo base_url(); ?>index.php/datosalumno/contacto/" + str);
                $("#verAlumnoDatos").load("<?php echo base_url(); ?>index.php/datosalumno/nombre/" + str);
                $("#verAlumnoAtenciones").load("<?php echo base_url(); ?>index.php/datosalumno/atenciones/" + str);                
            });//endclick
            $("#buscarut").click(function () {
                var str = $("#txtUsuario").val();                                
                //$("#rutAlumno").val(str2);
                $.ajax({                    
                url:'<?php echo base_url(); ?>index.php/datosalumno/rut/'+str,
                cache: false                               
            }).done(function(str2){
                $("#rutAlumno").val(str2);
                $(".verRamosAlumno").click();
            });                
            });//endclick
            <?php if (isset($datorut)){?>
            //cargo en datosalumno
                            var str = "<?php echo $datorut[0];?>";
                $("#verAlumno").load("<?php echo base_url(); ?>index.php/datosalumno/index/" + str);
                $("#verAlumnoContacto").load("<?php echo base_url(); ?>index.php/datosalumno/contacto/" + str);
                $("#verAlumnoDatos").load("<?php echo base_url(); ?>index.php/datosalumno/nombre/" + str);
                $("#verAlumnoAtenciones").load("<?php echo base_url(); ?>index.php/datosalumno/atenciones/" + str);
                
            //end datosalumno
            <?php }?>
            <?php if (isset($datodocente)){?>
            var str = "<?php echo $datodocente[0];?>";
            $("#verProfe20182").load("<?php echo base_url(); ?>index.php/programacion/cargadocente20182/"+str);
            <?php }?>
            <?php if (isset($secciones)){?>
            //cargo en secciones
            $("#profeForm").change(function () {
                    var str = $(this).val();
                    //$("#verProfe").html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
                    $("#verProfe").load("<?php echo base_url(); ?>index.php/datosalumno/lista/" + str);
                });
             //end secciones
            <?php }?>
            <?php if ((!isset($seccion))){?>
            
            <?php } else {?>
            //cargo en secciones
            var str = "<?php echo $seccion[0];?>";
                $("#verProfe").load("<?php echo base_url(); ?>index.php/datosalumno/lista/" + str);
            
             //end secciones
            <?php } ?>
            //cambios en formulario
                    $("#exampleFormControlSelect1" ).change(function() {
                        //alert( "Handler for .change() called." );
                        var str = $(this).val();
                        // alert(str);
                        $("#cursableDatos").hide();
                        $("#botonCursable2").hide();
                        $("#botonCursable").show();
                        $("#cursableDatos").load("<?php echo base_url(); ?>index.php/programacion/vercursable/"+str);
                        $("#siglaAsigForm").load("<?php echo base_url(); ?>index.php/programacion/siglasm/"+str);
                        //$("#verHorario").html('<i class="fa fa-spinner" style="font-size:24px"></i>');
                        $("#verHorario").load("<?php echo base_url(); ?>index.php/programacion/horario/"+str);
                        $("#verCursable").click(function(){
                                        $("#botonCursable").hide();
                                        $("#botonCursable2").show();
                                        $("#cursableDatos").show();
                                    });
                        $("#ocultarCursable").click(function(){
                            $("#botonCursable2").hide();
                            $("#botonCursable").show();
                            $("#cursableDatos").hide();
                        });
                    });
                    $("#inicioForm" ).change(function() {
                        //alert( "Handler for .change() called." );
                        var str = $(this).val();
                        var strFinal = $("#finForm").val();
                        var strDia = $("#diaForm").val();
                        // alert(str);
                        $("#finForm").load("<?php echo base_url(); ?>index.php/programacion/finalm/"+str);
                        $("#idDocenteForm").load("<?php echo base_url(); ?>index.php/programacion/listadocente/"+strDia+"/"+str+"/"+strFinal);
                        $("#salaForm").load("<?php echo base_url(); ?>index.php/programacion/listasala/"+strDia+"/"+str+"/"+strFinal);
                        });
                        $("#siglaAsigForm" ).change(function() {
                        //alert( "Handler for .change() called." );
                        var strFinal = $("#finForm").val();
                        var strInicio = $("#inicioForm").val();
                        var strDia = $("#diaForm").val();
                        // alert(str);
                        $("#idDocenteForm").load("<?php echo base_url(); ?>index.php/programacion/listadocente/"+strDia+"/"+strInicio+"/"+strFinal);
                        $("#salaForm").load("<?php echo base_url(); ?>index.php/programacion/listasala/"+strDia+"/"+strInicio+"/"+strFinal);
                        });
                        $("#finForm" ).change(function() {
                        //alert( "Handler for .change() called." );
                        var strFinal = $(this).val();
                        var strInicio = $("#inicioForm").val();
                        var strDia = $("#diaForm").val();
                        // alert(str);
                        $("#idDocenteForm").load("<?php echo base_url(); ?>index.php/programacion/listadocente/"+strDia+"/"+strInicio+"/"+strFinal);
                        $("#salaForm").load("<?php echo base_url(); ?>index.php/programacion/listasala/"+strDia+"/"+strInicio+"/"+strFinal);
                        });
                        $("#diaForm" ).change(function() {
                        //alert( "Handler for .change() called." );
                        var strDia = $(this).val();
                        var strInicio = $("#inicioForm").val();
                        var strFinal = $("#finForm").val();
                        // alert(str);
                        $("#idDocenteForm").load("<?php echo base_url(); ?>index.php/programacion/listadocente/"+strDia+"/"+strInicio+"/"+strFinal);
                        $("#salaForm").load("<?php echo base_url(); ?>index.php/programacion/listasala/"+strDia+"/"+strInicio+"/"+strFinal);
                    });                    
            //end cambios en formulario
            //Enviar formulario
            $( "#crearAsignaturaForm" ).submit(function( event ) {
                    //alert( "Handler for .submit() called." );
                    var strSeccion = $("#exampleFormControlSelect1").val();
                    event.preventDefault();
                    //mando los datos
                    //request
                    $.ajax({
                        url: "<?php echo base_url(); ?>index.php/programacion/agregarasignatura/",
                        type: 'post',
                        dataType: 'application/json',
                        data: $("#crearAsignaturaForm").serialize()
                    }).done(function() {
                        //alert( "success" );
                    })
                    .fail(function(data) {
                        //alert( data );
                    })
                    .always(function() {
                        //alert( "Asignatura ingresada" );
                        var strSeccion = $("#exampleFormControlSelect1").val();
                        //$("#verHorario").html('<i class="fa fa-spinner" style="font-size:24px"></i>');
                    $("#verHorario").load("<?php echo base_url(); ?>index.php/programacion/horario/"+strSeccion);
                    });
                    
                    });
                        $("#cargaForm" ).change(function() {            
                        var str = $(this).val();                                 
                        $("#verProfe").load("<?php echo base_url(); ?>index.php/programacion/cargadocente/"+str);
                        });
                        $("#cargaForm20182" ).change(function() {            
                        var str = $(this).val();                                 
                        $("#verProfe20182").load("<?php echo base_url(); ?>index.php/programacion/cargadocente20182/"+str);
                        });
                        $("#salaForm" ).change(function() {                        
                        var str = $(this).val();                        
                        $("#verSala").load("<?php echo base_url(); ?>index.php/programacion/cargasala/"+str);
});
});
</script>
</body>
</html>