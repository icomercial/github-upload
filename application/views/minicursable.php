<table class="table table-bordered table-sm">
            <tr class="table-info">
                <th><small>Sigla</small></th>
                <th><small>DesAsig</small></th>
                <th><small>Estandar</small></th>
                <th><small>TipoSala</small></th>
                <th><small>Teorico</small></th>
                <th><small>Practico</small></th>
                <th><small>Nivel</small></th>
                <th><small>Plan</small></th>
                <th><small>Jornada</small></th>
                <th><small>Cursable</small></th>
                <th><small>Nteo</small></th>
                <th><small>CapaTeo</small></th>
                <th><small>Npra</small></th>
                <th><small>CapaPra</small></th>
            </tr>
            <?php
            foreach ($cursables as $cursable) {
                // Access data using object syntax
                echo " 
            <tr>
                <td><small>" . $cursable->Sigla . "</small></td>
                <td><small>" . $cursable->DesAsig . "</small></td>
                <td><small>" . $cursable->CapacidEstandar . "</small></td>
                <td><small>" . $cursable->TipoSala . "</small></td>
                <td><small>" . $cursable->Teorico . "</small></td>
                <td><small>" . $cursable->Practico . "</small></td>
                <td><small>" . $cursable->Nivel . "</small></td>
                <td><small>" . $cursable->Plan . "</small></td>
                <td><small>" . $cursable->Jornada . "</small></td>
                <td><small>" . $cursable->Cursable . "</small></td>
                <td><small><b>" . $cursable->Nteo . "</b></small></td>
                <td><small>" . $cursable->CapaTeo . "</small></td>
                <td><small>" . $cursable->Npra . "</small></td>
                <td><small>" . $cursable->CapaPra . "</small></td>             
            </tr>";
            }
            ?>
        </table>