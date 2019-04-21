<?php
foreach ($docentes as $docente) {
        //Imprime el docente
        echo "<option value =\"" . $docente["IdDocente"] . "\">" . $docente["NombreDocente"] . "</option>";
    }

?>