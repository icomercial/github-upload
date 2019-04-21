<?php
        foreach ( $cursables as $cursable )
{
            // Access data using object syntax
            echo "<option value=\"".$cursable->Sigla."\">".$cursable->Sigla." ".$cursable->DesAsig."</option>";
}
        ?>