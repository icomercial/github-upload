<?php
foreach ($salas as $sala) {
        //Imprime el docente        
        echo "<option value =\"" . $sala["Aula"] . "\">" . $sala["Aula"] . " (" . $sala["Capacidad"] . " )</option>";
    }

?>