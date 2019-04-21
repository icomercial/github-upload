<?php 

foreach ($contactoalumno as $contactoalumno_item): 
    echo "<div class=\"col-lg-12\">
                    E-mail 1: <span id=\"mail1AlumnoDuoc\"><b>" . strtolower($contactoalumno_item->Usuario) . "@alumnos.duoc.cl</b></span>
                </div>";
    echo "<div class=\"col-lg-12\">
                    E-mail 2: <span id=\"mail2AlumnoDuoc\">" . strtolower($contactoalumno_item->Email) . "</span>
                </div>";
    echo "<div class=\"col-lg-12\">
                    Fono 1: <span id=\"fono1AlumnoDuoc\">" . strtolower($contactoalumno_item->Telefono) . "</span>
                </div>";
    echo "<div class=\"col-lg-12\">
                    Fono 2: <span id=\"fono2AlumnoDuoc\">" . strtolower($contactoalumno_item->Celular) . "</span>
                </div>";
    echo "<div class=\"col-lg-12\">
                    Direccion: <span id=\"comunaAlumnoDuoc\">" . strtolower($contactoalumno_item->Calle) . " " . $contactoalumno_item->Numero . " " . $contactoalumno_item->Comuna . "</span>
                </div>";
endforeach;
 
 ?>